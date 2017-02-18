<?php

class cmsUploader {

    private $allow_remote = false;
    private $file_name = '';
    private $user_id = 0;
    private $site_cfg = array();

    private $last_error = false;
    private $upload_errors = array();

    public function __construct() {
        $this->upload_errors = array(
            UPLOAD_ERR_OK         => LANG_UPLOAD_ERR_OK,
            UPLOAD_ERR_INI_SIZE   => sprintf(LANG_UPLOAD_ERR_INI_SIZE, $this->getMaxUploadSize()),
            UPLOAD_ERR_FORM_SIZE  => LANG_UPLOAD_ERR_FORM_SIZE,
            UPLOAD_ERR_PARTIAL    => LANG_UPLOAD_ERR_PARTIAL,
            UPLOAD_ERR_NO_FILE    => LANG_UPLOAD_ERR_NO_FILE,
            UPLOAD_ERR_NO_TMP_DIR => LANG_UPLOAD_ERR_NO_TMP_DIR,
            UPLOAD_ERR_CANT_WRITE => LANG_UPLOAD_ERR_CANT_WRITE,
            UPLOAD_ERR_EXTENSION  => LANG_UPLOAD_ERR_EXTENSION
        );
        $this->user_id = cmsUser::getInstance()->id;
        $this->site_cfg = cmsConfig::getInstance();
    }

    public function setFileName($name) {
        $this->file_name = mb_substr(trim($name), 0, 64); return $this;
    }

    public function setUserId($id) {
        $this->user_id = $id; return $this;
    }

    public function getLastError() {
        return $this->last_error;
    }

//============================================================================//
    /**
     * Возвращает строку с максимальным размером загружаемых файлов,
     * установленным в php.ini
     * @return string
     */
    public function getMaxUploadSize(){

        // вычисляем по тому, что меньше, т.к. если post_max_size меньше upload_max_filesize,
        // то максимум можно будет загрузить post_max_size
        $max_size = min(files_convert_bytes(@ini_get('upload_max_filesize')), files_convert_bytes(@ini_get('post_max_size')));

        return files_format_bytes($max_size);

    }

    public function isUploaded($name){

        if (!isset($_FILES[$name])) { return false; }

        if (empty($_FILES[$name]['size'])) {

            if(isset($_FILES[$name]['error'])){
                if(isset($this->upload_errors[$_FILES[$name]['error']]) && $this->upload_errors[$_FILES[$name]['error']] !== UPLOAD_ERR_OK){
                    $this->last_error = $this->upload_errors[$_FILES[$name]['error']];
                }
            }

            return false;

        }

        return true;

    }

    public function isUploadedXHR($name){
        return !empty($_GET['qqfile']);
    }

    public function isUploadedFromLink($name){
        return $this->allow_remote && !empty($_POST[$name]);
    }

    public function enableRemoteUpload() {
        $this->allow_remote = true; return $this;
    }
    public function disableRemoteUpload() {
        $this->allow_remote = false; return $this;
    }

    private function getFileName($path, $file_ext, $file_name = false) {

        if(!$file_name){
            if($this->file_name){
                $file_name = str_replace('.'.$file_ext, '', files_sanitize_name($this->file_name.'.'.$file_ext));
            } else {
                $file_name = substr(md5(uniqid().microtime(true)), 0, 8);
            }
        }

        if (file_exists($path.$file_name.'.'.$file_ext)) {
            return $this->getFileName($path, $file_ext, $file_name.'_'.uniqid());
        }

        return $file_name.'.'.$file_ext;

    }

//============================================================================//
//============================================================================//

    public function resizeImage($source_file, $size){

        $dest_dir  = $this->getUploadDestinationDirectory();
        $dest_ext  = pathinfo($source_file, PATHINFO_EXTENSION);
        $dest_name = $this->getFileName($dest_dir, $dest_ext);

        $dest_file = $dest_dir . $dest_name;

        if (!isset($size['height'])) { $size['height'] = $size['width']; }
        if (!isset($size['quality'])) { $size['quality'] = 90; }

        if (img_resize($source_file, $dest_file, $size['width'], $size['height'], $size['is_square'], $size['quality'])) {

            return str_replace($this->site_cfg->upload_path, '', $dest_file);

        }

        return false;

    }

    private function checkExt($ext, $allowed_ext) {

        if($allowed_ext === false){
            return true;
        }

        if(empty($ext)){ return false; }

        if(!is_array($allowed_ext)){
            $allowed_ext = explode(',', (string)$allowed_ext);
        }

        $allowed = array();

        foreach($allowed_ext as $aext){
            $aext = mb_strtolower(trim(trim((string)$aext, '., ')));
            if(empty($aext)){
                continue;
            }
            $allowed[] = $aext;
        }

        return in_array(mb_strtolower($ext), $allowed, true);

    }

//============================================================================//
//============================================================================//

    /**
     * Загружает файл на сервер
     * @param string $post_filename Название поля с файлом в массиве $_FILES
     * @param string $allowed_ext Список допустимых расширений (через запятую)
     * @param string $allowed_size Максимальный размер файла (в байтах)
     * @param string $destination Папка назначения (внутри пути upload)
     * @return array
     */
    public function upload($post_filename, $allowed_ext = false, $allowed_size = 0, $destination = false){

        if ($this->isUploadedFromLink($post_filename)){
            return $this->uploadFromLink($post_filename, $allowed_ext, $allowed_size, $destination);
        }

        if ($this->isUploadedXHR($post_filename)){
            return $this->uploadXHR($post_filename, $allowed_ext, $allowed_size, $destination);
        }

        if ($this->isUploaded($post_filename)){
            return $this->uploadForm($post_filename, $allowed_ext, $allowed_size, $destination);
        }

        $last_error = $this->getLastError();

        return array(
            'success' => false,
            'error'   => ($last_error ? $last_error : LANG_UPLOAD_ERR_NO_FILE)
        );

    }

//============================================================================//
//============================================================================//

    /**
     * Загружает файл на сервер переданный через input типа file
     * @param string $post_filename Название поля с файлом в массиве $_FILES
     * @param string $allowed_ext Список допустимых расширений (через запятую)
     * @param string $allowed_size Максимальный размер файла (в байтах)
     * @param string $destination Папка назначения (внутри пути upload)
     * @return array
     */
    public function uploadForm($post_filename, $allowed_ext = false, $allowed_size = 0, $destination = false){

        $source     = $_FILES[$post_filename]['tmp_name'];
        $error_code = $_FILES[$post_filename]['error'];
        $dest_size  = (int)$_FILES[$post_filename]['size'];
        $dest_name  = files_sanitize_name($_FILES[$post_filename]['name']);
        $dest_ext   = pathinfo($dest_name, PATHINFO_EXTENSION);

        if(!$this->checkExt($dest_ext, $allowed_ext)){
            return array(
                'error'   => LANG_UPLOAD_ERR_MIME,
                'success' => false,
                'name'    => $dest_name
            );
        }

        if ($allowed_size){
            if ($dest_size > $allowed_size){
                return array(
                    'error'   => sprintf(LANG_UPLOAD_ERR_INI_SIZE, files_format_bytes($allowed_size)),
                    'success' => false,
                    'name'    => $dest_name
                );
            }
        }

        if (!$destination){
            $destination = $this->getUploadDestinationDirectory();
        } else {
            $destination = $this->site_cfg->upload_path . $destination . '/';
            $this->file_name = $dest_name;
        }

        $destination .= $this->getFileName($destination, $dest_ext);

        return $this->moveUploadedFile($source, $destination, $error_code, $dest_name, $dest_size);

    }

//============================================================================//
//============================================================================//

    public function uploadFromLink($post_filename, $allowed_ext = false, $allowed_size = 0, $destination = false) {

        $dest_ext  = strtolower(pathinfo(parse_url(trim($_POST[$post_filename]), PHP_URL_PATH), PATHINFO_EXTENSION));
        $dest_name = files_sanitize_name($_POST[$post_filename]);

        if(!$this->checkExt($dest_ext, $allowed_ext)){
            return array(
                'error'   => LANG_UPLOAD_ERR_MIME,
                'success' => false,
                'name'    => $dest_name
            );
        }

        $file_bin = file_get_contents_from_url($_POST[$post_filename]);

        if(!$file_bin){
            return array(
                'success' => false,
                'error'   => LANG_UPLOAD_ERR_PARTIAL,
                'name'    => $dest_name,
                'path'    => ''
            );
        }

        $image_size = strlen($file_bin);

        if ($allowed_size){
            if ($image_size > $allowed_size){
                return array(
                    'error'   => sprintf(LANG_UPLOAD_ERR_INI_SIZE, files_format_bytes($allowed_size)),
                    'success' => false,
                    'name'    => $dest_name
                );
            }
        }

        if (!$destination){
            $destination = $this->getUploadDestinationDirectory();
        } else {
            $destination = $this->site_cfg->upload_path . $destination.'/';
        }

        $destination .= $this->getFileName($destination, $dest_ext);

		$f = fopen($destination, 'w+');
		fwrite($f, $file_bin);
        fclose($f);

        return array(
            'success' => true,
            'path'    => $destination,
            'url'     => str_replace($this->site_cfg->upload_path, '', $destination),
            'name'    => basename($destination),
            'size'    => $image_size
        );

    }

    /**
     * Загружает файл на сервер переданный через XHR
     * @param string $post_filename Название поля с файлом в массиве $_GET
     * @param string $allowed_ext Список допустимых расширений (через запятую)
     * @param string $allowed_size Максимальный размер файла (в байтах)
     * @param string $destination Папка назначения (внутри пути upload)
     * @return array
     */
    public function uploadXHR($post_filename, $allowed_ext = false, $allowed_size = 0, $destination = false){

        $dest_name = files_sanitize_name($_GET['qqfile']);
        $dest_ext  = pathinfo($dest_name, PATHINFO_EXTENSION);

        if(!$this->checkExt($dest_ext, $allowed_ext)){
            return array(
                'error'   => LANG_UPLOAD_ERR_MIME,
                'success' => false,
                'name'    => $dest_name
            );
        }

        if ($allowed_size){
            if ($this->getXHRFileSize() > $allowed_size){
                return array(
                    'error'   => sprintf(LANG_UPLOAD_ERR_INI_SIZE, files_format_bytes($allowed_size)),
                    'success' => false,
                    'name'    => $dest_name
                );
            }
        }

        if (!$destination){
            $destination = $this->getUploadDestinationDirectory();
        } else {
            $destination = $this->site_cfg->upload_path . $destination . '/';
        }

        $destination .= $this->getFileName($destination, $dest_ext);

        return $this->saveXHRFile($destination, $dest_name);

    }

    public function getXHRFileSize(){
        if (isset($_SERVER["CONTENT_LENGTH"])){
            return (int)$_SERVER["CONTENT_LENGTH"];
        } else {
            return false;
        }
    }

//============================================================================//
//============================================================================//

    public function saveXHRFile($destination, $orig_name=''){

        $target = @fopen($destination, 'wb');
        $input  = @fopen("php://input", 'rb');

        if (!$target){
            return array(
                'success' => false,
                'error'   => LANG_UPLOAD_ERR_CANT_WRITE,
                'name'    => $orig_name,
                'path'    => ''
            );
        }
        if (!$input){
            return array(
                'success' => false,
                'error'   => LANG_UPLOAD_ERR_NO_FILE,
                'name'    => $orig_name,
                'path'    => ''
            );
        }

        while ($buff = fread($input, 4096)) {
            fwrite($target, $buff);
        }

        @fclose($target);
        @fclose($input);

        $real_size = filesize($destination);

        if ($real_size != $this->getXHRFileSize()){
            @unlink($destination);
            return array(
                'success' => false,
                'error'   => LANG_UPLOAD_ERR_PARTIAL,
                'name'    => $orig_name,
                'path'    => ''
            );
        }

        return array(
            'success' => true,
            'path'    => $destination,
            'url'     => str_replace($this->site_cfg->upload_path, '', $destination),
            'name'    => basename($destination),
            'size'    => $real_size
        );

    }

//============================================================================//
    /**
     * Копирует файл из временной папки в целевую и отслеживает ошибки
     * @param string $source
     * @param string $destination
     * @param int $errorCode
     * @return bool
     */
    private function moveUploadedFile($source, $destination, $errorCode, $orig_name='', $orig_size=0){

        if($errorCode !== UPLOAD_ERR_OK && isset($this->upload_errors[$errorCode])){

            return array(
                'success' => false,
                'error'   => $this->upload_errors[$errorCode],
                'name'    => $orig_name,
                'path'    => ''
            );

        }

        $upload_dir = dirname($destination);
        if (!is_writable($upload_dir)){	@chmod($upload_dir, 0777); }

        if (!is_writable($upload_dir)){
            return array(
                'success' => false,
                'error'   => LANG_UPLOAD_ERR_CANT_WRITE,
                'name'    => $orig_name,
                'path'    => ''
            );
        }

        return array(
            'success' => @move_uploaded_file($source, $destination),
            'path'    => $destination,
            'url'     => str_replace($this->site_cfg->upload_path, '', $destination),
            'name'    => basename($destination),
            'size'    => $orig_size,
            'error'   => $this->upload_errors[$errorCode]
        );

    }

//============================================================================//
    /**
     * Удаляет файл
     * @param string $file_path
     * @return boolean
     */
    public function remove($file_path){
        return @unlink($file_path);
    }

//============================================================================//
    /**
     * Создаёт дерево директорий для загрузки файла
     * @return string
     */
    public function getUploadDestinationDirectory(){

        $dir_num_user = sprintf('%03d', intval($this->user_id/100));

        $file_name  = md5(uniqid(). $this->site_cfg->db_user . $this->site_cfg->db_base .microtime(true));
        $first_dir  = substr($file_name, 0, 2);
        $second_dir = substr($file_name, 2, 2);

        $dest_dir = $this->site_cfg->upload_path . "{$dir_num_user}/u{$this->user_id}/{$first_dir}/{$second_dir}/";

        if(!is_dir($dest_dir)){
            @mkdir($dest_dir, 0777, true);
            @chmod($dest_dir, 0777);
            @chmod(pathinfo($dest_dir, PATHINFO_DIRNAME), 0777);
            @chmod($this->site_cfg->upload_path . "{$dir_num_user}/u{$this->user_id}", 0777);
            @chmod($this->site_cfg->upload_path . "{$dir_num_user}", 0777);
        }

        return $dest_dir;

    }

//============================================================================//
    /**
     * Проверяет файл, является ли он изображением
     * @param string $src
     * @return boolean
     */
    public function isImage($src){

        $size = getimagesize($src);

        return $size !== false;

    }

    /**
     * Это устаревший метод, используйте функцию img_resize
     */
    public function imageCopyResized($src, $dest, $maxwidth, $maxheight=160, $is_square=false, $quality=95){
        return img_resize($src, $dest, $maxwidth, $maxheight, $is_square, $quality);
    }

}
