<?php

    define('LANG_LOADING',                   'Loading...');
    define('LANG_SENDING',                   'Sending data...');
    define('LANG_MORE',                      'More');
    define('LANG_VERSION',                   'Version');

    //CONTENT
    define('LANG_CONTENT_TYPE',              'Content Type');
    define('LANG_CONTENT_TYPE_SETTINGS',     'Configure %s');
    define('LANG_CONTENT_SELECT_ITEM',       'Select %s');
    define('LANG_CONTENT_ADD_ITEM',          'Add %s');
    define('LANG_CONTENT_BIND_ITEM',         'Bind %s');
    define('LANG_CONTENT_BIND_ITEMS',        'Bind');
    define('LANG_CONTENT_UNBIND_ITEM',       'Unbind %s');
    define('LANG_CONTENT_UNBIND_ITEMS',      'Unbind');
    define('LANG_CONTENT_EDIT_ITEM',         'Edit %s');
    define('LANG_CONTENT_DELETE_ITEM',       'Delete %s');
    define('LANG_CONTENT_DELETE_ITEM_CONFIRM',  'Are you sure you want to delete %s?');
    define('LANG_CONTENT_RETURN_CONFIRM',    'Are you sure you want to retrieve this item from the moderation?\nIt will move to your drafts.');
    define('LANG_CONTENT_SAVE_DRAFT',		 'Save to Drafts');
    define('LANG_CONTENT_MOVE_DRAFT',		 'Move to drafts');
    define('LANG_CONTENT_DRAFT_NOTICE',		 'The item is hidden in drafts');
    define('LANG_CONTENT_DRAFT_LIST',		 'Drafts');
    define('LANG_CONTENT_NOT_APPROVED',      'Pending approval');
    define('LANG_CONTENT_EDITED',            'Edited');
    define('LANG_CONTENT_NOT_IS_PUB',		 'Not published');

    define('LANG_CONTENT_BIND_ITEM_FIND_HINT','Type part of the field value');

    define('LANG_SHOW_FILTER',               'Show filter');
    define('LANG_FILTER',                    'Filter');
    define('LANG_FILTERS',                   'Filters');
    define('LANG_FILTER_FIELD',              'Filter by field');
    define('LANG_FILTER_ADD',                'New filter');
    define('LANG_FILTER_LIKE',               'contains');
    define('LANG_FILTER_LIKE_BEGIN',         'starts with');
    define('LANG_FILTER_LIKE_END',           'ends with');
    define('LANG_FILTER_DATE_YOUNGER',       'not earlier, days');
    define('LANG_FILTER_DATE_OLDER',         'not later, days');
    define('LANG_FILTER_NOT_NULL',           'filled');
    define('LANG_FILTER_IS_NULL',            'not filled');
    define('LANG_FILTER_APPLY',              'Apply');
    define('LANG_FILTER_URL',                'URL');
    define('LANG_FILTER_SAVE_DIFF_ORDER',    'Save different order');
    define('LANG_SORTING_FIELD',             'Sort by field');
    define('LANG_SORTING',                   'Sort');
    define('LANG_SORTING_ADD',               'New rule');
    define('LANG_SORTING_ASC',               'Ascending');
    define('LANG_SORTING_DESC',              'Descending');
    define('LANG_PHOTO',                     'Image');
    define('LANG_PHOTOS',                    'Images');
    define('LANG_COMMENTS',                  'Comments');
    define('LANG_RATING',                    'Rating');
    define('LANG_KARMA',                     'Reputation');
    define('LANG_KARMA_UP',                  'Vote Up');
    define('LANG_KARMA_DOWN',                'Vote Down');
    define('LANG_CSS_CLASS',                 'CSS class');
    define('LANG_CSS_CLASS_WRAP',            'Container CSS class');
    define('LANG_CSS_CLASS_TITLE',           'Title CSS class');
    define('LANG_CSS_CLASS_BODY',            'Body CSS class');
    define('LANG_GROUP',                     'Group');
    define('LANG_GROUPS',                    'Groups');
    define('LANG_WROTE_IN_GROUP',            'in');
    define('LANG_DESIGN',					 'Design');

    //WIDGETS
    define('LANG_WP_SYSTEM',                 'System');
    define('LANG_WP_CUSTOM',                 'Custom');
    define('LANG_WP_ALL_PAGES',              'All pages');
    define('LANG_WP_HOME_PAGE',              'Main page');
    define('LANG_WIDGET_TAB_PREV',           'Group with the previous widget');
    define('LANG_WIDGET_TITLE_LINKS',        'Links in the widget header');
    define('LANG_WIDGET_TITLE_LINKS_HINT',   'In the <b><em>Title | URL</em></b> format, for example, <b><em>Google | http://www.google.com</em></b><br>If a link is wrapped in curly brackets <b>{ }</b>, it will be shown to authorized users only<br>One link in a line');
    define('LANG_WIDGET_WRAPPER_TPL',		 'Container template');
    define('LANG_WIDGET_WRAPPER_TPL_HINT',	 'File title is taken from the <b>widgets</b> folder of your theme, without the <b>.tpl.php</b> extension');
    define('LANG_WIDGET_BODY_TPL',			 'Widget template');
    define('LANG_WIDGET_BODY_TPL_HINT',	     'File title is taken from the <b>%s</b> folder of your theme, without the <b>.tpl.php</b> extension');
    define('LANG_WIDGET_DEVICE',			 'Which devices show the widget');
    define('LANG_WIDGET_TEMPLATE_LAYOUT',	 'Display on layouts');
    define('LANG_DESKTOP_DEVICES',  'Desktop PCs');
    define('LANG_TABLET_DEVICES',  'Tablets');
    define('LANG_MOBILE_DEVICES',  'Phones');

    //PARSERS
    define('LANG_PARSER_LIST_IS_AUTOLINK',     'AutoLink');
    define('LANG_PARSER_LIST_IS_AUTOLINK_HINT', 'Enabling this option breaks (by comma) the field value into separate words and each makes a reference. ');
    define('LANG_PARSER_LIST_IS_AUTOLINK_FILTER', 'Option "Show in filter" should be enabled.');
    define('LANG_PARSER_BITMASK_CHECKBOX_MULTIPLE', 'Multi-selection by checkboxes');
    define('LANG_PARSER_BITMASK_LIST_CLASS', 'List css class');
    define('LANG_PARSER_BITMASK_MAX',        'List items maximum number');
    define('LANG_PARSER_BITMASK_MAX_HINT',   'in the preset values');
    define('LANG_PARSER_CAPTION',            'Caption');
    define('LANG_PARSER_STRING',             'String');
    define('LANG_PARSER_HIDDEN',             'Hidden field');
    define('LANG_PARSER_NUMBER',             'Number');
    define('LANG_PARSER_NUMBER_FILTER_RANGE','Filter by range');
    define('LANG_PARSER_NUMBER_UNITS',       'Units');
    define('LANG_PARSER_CITY',               'Location');
    define('LANG_PARSER_CITY_LOCATION_TYPE', 'Location type');
    define('LANG_PARSER_CITY_LOCATION_GROUP', 'Name for group');
    define('LANG_PARSER_CITY_LOCATION_GROUP_HINT', 'If you want to combine locations country-region-city, enter a name for unification of all fields. At a minimum, it should be established fields such as "Country" and "Region"');
    define('LANG_PARSER_CITY_OUTPUT_STRING', 'Field value output string');
    define('LANG_PARSER_CITY_OUTPUT_STRING_HINT', 'For example, "{country}, {city}", where country and city system field names. It is useful to use, disabling output for the rest of the field groups, showing the desired values in this field. If not specified - output value of the current field.');
    define('LANG_PARSER_CHECKBOX',           'Checkbox');
    define('LANG_PARSER_TEXT',               'Textarea');
    define('LANG_PARSER_TEXT_MAX_LEN',       'Maximum length');
    define('LANG_PARSER_TEXT_MIN_LEN',       'Minimum length');
    define('LANG_PARSER_SHOW_SYMBOL_COUNT',  'Show characters count');
    define('LANG_PARSER_HTML',               'HTML text');
    define('LANG_PARSER_HTML_EDITOR',        'WYSIWYG editor');
    define('LANG_PARSER_HTML_FILTERING',     'Sanitize input');
    define('LANG_PARSER_BUILD_REDIRECT_LINK', 'External links via a redirect if sanitize input');
    define('LANG_PARSER_HTML_TEASER_LEN',    'Truncate text length in list view');
    define('LANG_PARSER_HTML_TEASER_LEN_HINT','The text will be truncated to a specified length, the formatting will be removed');
    define('LANG_PARSER_BBCODE',             'Textarea with BB-code');
    define('LANG_PARSER_LIST',               'List');
    define('LANG_PARSER_LIST_FILTER_HINT',   'Item index');
    define('LANG_PARSER_LIST_FILTER_MULTI',  'Allow multiple selection in filter');
    define('LANG_PARSER_LIST_GROUPS',        'User groups list');
    define('LANG_PARSER_LIST_GROUPS_SHOW_GUESTS',     'Show "Guests" item');
    define('LANG_PARSER_LIST_IS_MULTIPLE',   'Allow multiple selection');
    define('LANG_PARSER_LIST_MULTIPLE',      'Multiple list');
    define('LANG_PARSER_LIST_MULTIPLE_SHOW_ALL',      'Show "All" item');
    define('LANG_PARSER_URL',                'Link');
    define('LANG_PARSER_URL_REDIRECT',       'Links through a redirect');
    define('LANG_PARSER_URL_AUTO_HTTP',      'Add http:// automatically');
    define('LANG_PARSER_URL_NOFOLLOW',       'Add rel="nofollow" attribute');
    define('LANG_PARSER_URL_CSS_CLASS',      'Link CSS class');
    define('LANG_PARSER_URL_TITLE',          'Set link title option');
    define('LANG_PARSER_URL_TITLE_HINT',     'To display the link title, enter its name through the sign "|", for example: http://google.com|Google');
    define('LANG_PARSER_AGE',                'Age');
    define('LANG_PARSER_AGE_DATE_TITLE',     'Starting date title');
    define('LANG_PARSER_AGE_FILTER_RANGE',   'Filter by range');
    define('LANG_PARSER_AGE_FROM_DATE',      'Count from the specified date');
    define('LANG_PARSER_AGE_FROM_DATE_HINT', 'If not specified, the count will be conducted from the current time');
    define('LANG_PARSER_DATE',               'Date');
    define('LANG_PARSER_DATE_FILTER_HINT',   'YYYY-MM-DD');
    define('LANG_PARSER_DATE_SHOW_TIME',     'Show time');
    define('LANG_PARSER_USER',               'User');
    define('LANG_PARSER_USER_FILTER_HINT',   'User ID');
    define('LANG_PARSER_USERS',              'User list');
    define('LANG_PARSER_PARENT',             'Parent');
    define('LANG_PARSER_IMAGE',              'Image');
    define('LANG_PARSER_IMAGE_SPELL',        'image|image|images');
    define('LANG_PARSER_IMAGE_DELETE',       'Delete the image from the server?');
    define('LANG_PARSER_IMAGES',             'Multiple images');
    define('LANG_PARSER_IMAGE_ALLOW_IMPORT_LINK', 'Allow import from link');
    define('LANG_PARSER_FIRST_IMAGE_EMPHASIZE', 'Emphasize first image in entry');
    define('LANG_PARSER_IMAGE_MAX_COUNT',    'The maximum images count');
    define('LANG_PARSER_IMAGE_MAX_COUNT_HINT', 'Maximum %s');
    define('LANG_PARSER_SMALL_IMAGE_PRESET', 'Thumbnail preset');
    define('LANG_PARSER_IMAGE_SIZE_UPLOAD',  'Create thumbnails');
    define('LANG_PARSER_IMAGE_SIZE_TEASER',  'Image size in list');
    define('LANG_PARSER_IMAGE_SIZE_FULL',    'Image size in entry');
    define('LANG_PARSER_IMAGE_SIZE_MODAL',   'Image size in entry whith modal');
    define('LANG_PARSER_IMAGE_SIZE_MICRO',   'Micro');
    define('LANG_PARSER_IMAGE_SIZE_SMALL',   'Small');
    define('LANG_PARSER_IMAGE_SIZE_NORMAL',  'Medium');
    define('LANG_PARSER_IMAGE_SIZE_BIG',     'Big');
    define('LANG_PARSER_IMAGE_SIZE_ORIGINAL','Original');
    define('LANG_PARSER_COLOR',              'Colorpicker');
    define('LANG_PARSER_COLOR_CT',           'Color selection block type');
    define('LANG_PARSER_COLOR_CT_HUE',       'Hue');
    define('LANG_PARSER_COLOR_CT_SATURATION', 'Saturation');
    define('LANG_PARSER_COLOR_CT_BRIGHTNESS', 'Brightness');
    define('LANG_PARSER_COLOR_CT_WHEEL',     'Wheel');
    define('LANG_PARSER_COLOR_CT_SWATCHES',  'Only preset values');
    define('LANG_PARSER_COLOR_CT_SWATCHES_OPT', 'Preset values');
    define('LANG_PARSER_FILE',               'File');
    define('LANG_PARSER_FILE_LABEL',         'File link label');
    define('LANG_PARSER_FILE_LABEL_NAME',    'Filename');
    define('LANG_PARSER_FILE_LABEL_GET',     'Download');
    define('LANG_PARSER_FILE_LABEL_COUNTER', 'downloaded');
    define('LANG_PARSER_FILE_EXTS',          'Allowed file extensions');
    define('LANG_PARSER_FILE_EXTS_HINT',     'List of extensions separated by commas');
    define('LANG_PARSER_FILE_EXTS_FIELD_HINT',     'Allowed file types: %s');
    define('LANG_PARSER_FILE_SIZE_FIELD_HINT',     'Maximum file size: %s');
    define('LANG_PARSER_FILE_MAX_SIZE',      'Maximum file size, Mb');
    define('LANG_PARSER_FILE_MAX_SIZE_PHP',  'Not more than %d Mb (allowed in PHP settings)');
    define('LANG_PARSER_FILE_SHOW_SIZE',     'Show file size');
    define('LANG_PARSER_FILE_SHOW_COUNTER',  'Show download count');
    define('LANG_PARSER_CURRENT_TIME',       'Current time');
    define('LANG_PARSER_IN_FULLTEXT_SEARCH', 'Include in full-text index');
    define('LANG_PARSER_IN_FULLTEXT_SEARCH_HINT', 'Attention! Index will be rebuilt, once the option is changed. It can take a long time in respect of large tables.');
    define('LANG_PARSER_ADD_FROM_LINK', 'add by link');
    define('LANG_PARSER_ENTER_IMAGE_LINK', 'Enter image link');
    define('LANG_OR', 'or');
    define('LANG_BEGIN_TYPING', 'Start typing or select from the list');

    //USERS
    define('LANG_USER',                      'User');
    define('LANG_USERS',                     'Users');
    define('LANG_AUTHOR',                    'Author');
    define('LANG_REGISTRATION',              'Registration');
    define('LANG_USER_REGISTRATION',         'User Registration');
    define('LANG_CREATE_ACCOUNT',            'Sign up, please.');
    define('LANG_LOG_IN',                    'Log in');
    define('LANG_LOG_IN_ACCOUNT',            'Log in using your account');
    define('LANG_LOG_IN_OPENID',             'Log in using social media');
    define('LANG_LOG_OUT',                   'Log out');
    define('LANG_NO_ACCOUNT',                'Don\'t have an account yet?');
    define('LANG_REG_FIRST_TIME',            'Is it your first visit?');
    define('LANG_REG_ALREADY',               'Already registered?');
    define('LANG_EMAIL',                     'E-mail');
    define('LANG_PASSWORD',                  'Password');
    define('LANG_RETYPE_PASSWORD',           'Repeat password');
    define('LANG_USER_GROUP',                'Group');
    define('LANG_USER_IS_ADMIN',             'Administrator');
    define('LANG_LOGIN_ERROR',               'Failed to log in. Verify your e-mail and password.');
    define('LANG_LOGIN_REQUIRED',            'Log in to see the requested page');
    define('LANG_LOGIN_ADMIN_ONLY',          'You can\'t log in when site is offline');
    define('LANG_NICKNAME',                  'Nickname');
    define('LANG_ADMIN',                     'Administrator');
    define('LANG_EMAIL_FIND',                'Find by e-mail');
    define('LANG_FIND',                      'Find');
    define('LANG_MY_PROFILE',                'My profile');
    define('LANG_PROFILE',                   'Profile');
    define('LANG_CITY',                      'City');
    define('LANG_REGION',                    'Region');
    define('LANG_COUNTRY',                   'Country');
    define('LANG_COMPANY',                   'Company');
    define('LANG_PHONE',                     'Phone');
    define('LANG_NAME',                      'First Name');
    define('LANG_SURNAME',                   'Last Name');
    define('LANG_CHANGE_PASS',               'Change password');
    define('LANG_OLD_PASS',                  'Current password');
    define('LANG_OLD_PASS_INCORRECT',        'Current password is incorrect');
    define('LANG_NEW_PASS',                  'New password');
    define('LANG_RETYPE_NEW_PASS',           'Repeat new password');
    define('LANG_PASS_CHANGED',              'Password successfully changed');
    define('LANG_REMEMBER_ME',               'Remember me');
    define('LANG_PLEASE_LOGIN',              'Log in, please');
    define('LANG_LOGIN_ADMIN',               'Log in to administrator account');
    define('LANG_ONLINE',                    'Online');
    define('LANG_USERS_PROFILE_LAST_IP',     'Last IP');
    define('LANG_USERS_PROFILE_LOGDATE',     'Last visit');

    //MODERATION
    define('LANG_MODERATION',                'Moderation');
    define('LANG_MODERATION_USERS',          'Your materials awaiting moderation');
    define('LANG_MODERATOR',                 'Moderator');
    define('LANG_MODERATORS',                'Moderators');
    define('LANG_MODERATION_SUCCESS',        'Approved');
    define('LANG_MODERATION_APPROVE',        'Approve');
    define('LANG_MODERATION_RETURN',         'Remove from the moderation');
    define('LANG_MODERATION_RETURN_FOR_REVISION', 'Return for revision');
    define('LANG_MODERATION_REFUSE',         'Refuse and delete %s');
    define('LANG_MODERATION_REFUSE_REASON',  'What is the reason for the rejection?');
    define('LANG_MODERATION_REMARKS',        'Remarks');
    define('LANG_MODERATION_APPROVED',       'Page published');
    define('LANG_MODERATION_APPROVED_BY',    'Approved by moderator');
    define('LANG_MODERATION_PM_AUTHOR',      'Send a message to the author');
    define('LANG_MODERATION_SEND',           'Submit to moderation');
    define('LANG_MODERATION_NOTICE',         'The entry will be published after moderator\'s approval. ');
    define('LANG_MODERATION_NOTICE_MODER',   'The entry awaits your approval. ');
    define('LANG_MODERATION_NOTICE_VIEW',    '%s %s already %s it%s, the decision has not yet been made.');
    define('LANG_MODERATION_VIEW',           'view');
    define('LANG_MODERATION_VIEWS',          'viewed');
    define('LANG_MODERATION_IDLE',           'Notification was sent to moderator %s');
    define('LANG_MODERATION_NO_TASKS',       'No entries require approval');
    define('LANG_MODERATION_NOTIFY',         'A new page awaits your approval');
    define('LANG_MODERATION_RETURN_NOTIFY',  'Author retrieve the material from the moderation');
    define('LANG_MODERATION_REMARK_NOTIFY',  'Recording is returned for revision');
    define('LANG_PM_MODERATION_COMMENT_APPROVED', 'Moderator approved the comment <b><a href="%2$s">%1$s</a></b> of publication%3$s');
    define('LANG_PM_MODERATION_APPROVED',    'Moderator approved the <b><a href="%2$s">%1$s</a></b> publication%3$s');
    define('LANG_PM_MODERATION_REFUSED',     'Moderator refused  the<b>%1$s</b> publication.%2$s Reason for rejection: %3$s');
    define('LANG_PM_MODERATION_COMMENT_REFUSED', 'A moderator has rejected your comment on the page <b>%1$s</b>.%2$s Reason for rejection: %3$s');
    define('LANG_PM_MODERATION_REWORK',      'The moderator returned the <b><a href="%2$s">%1$s</a></b> page for revision and pointed remarks:<br />%3$s');

    //PERMISSIONS
    define('LANG_PERMISSIONS',               'Permissions');
    define('LANG_PERM_RULE',                 'Permission rule');
    define('LANG_PERM_OPTION_NULL',          'No');
    define('LANG_PERM_OPTION_YES',           'Yes');
    define('LANG_PERM_OPTION_PREMOD',        'With premoderation');
    define('LANG_PERM_OPTION_PREMOD_OWN',    'Only own with premoderation');
    define('LANG_PERM_OPTION_PREMOD_ALL',    'All with premoderation');
    define('LANG_PERM_OPTION_OWN',           'Only own');
    define('LANG_PERM_OPTION_OTHER',         'Only others');
    define('LANG_PERM_OPTION_TO_OTHER',      'Only in others');
    define('LANG_PERM_OPTION_ALL',           'All');
    define('LANG_SHOW_TO_GROUPS',            'Show to groups');
    define('LANG_HIDE_FOR_GROUPS',           'Hide from groups');
    define('LANG_PERM_OPTION_TO_OWN',        'Only to own');
    define('LANG_PERM_OPTION_TO_ALL',        'To all');
    define('LANG_PERM_OPTION_OWN_TO_OWN',    'Own to own');
    define('LANG_PERM_OPTION_OWN_TO_OTHER',  'Own to others');
    define('LANG_PERM_OPTION_OWN_TO_ALL',    'Own to all');
    define('LANG_PERM_OPTION_OTHER_TO_OWN',  'Others to own');
    define('LANG_PERM_OPTION_OTHER_TO_OTHER','Others to others');
    define('LANG_PERM_OPTION_OTHER_TO_ALL',  'Others to all');
    define('LANG_PERM_OPTION_ALL_TO_OWN',    'All to own');
    define('LANG_PERM_OPTION_ALL_TO_OTHER',  'All to others');
    define('LANG_PERM_OPTION_ALL_TO_ALL',    'All to all');
    define('LANG_SHOW_TO_COUNTRIES',         'Show for countries');
    define('LANG_HIDE_TO_COUNTRIES',         'Do not show for countries');
    define('LANG_ACCESS_DENIED',             'Access is denied');
    define('LANG_ACCESS_GROUP_HINT',         'The groups you belong to are access denied to this page');
    define('LANG_ACCESS_COUNTRY_HINT',       'This page is not viewable in your country');

    //AUTHORIZATION
    define('LANG_AUTH_LOGIN',			 'Login');
    define('LANG_AUTH_PASSWORD',		 'Password');

    //PASSWORD RESTORE
    define('LANG_FORGOT_PASS',               'Forgot password?');

    //SYSTEM ERRORS
    define('LANG_ERROR',					 'Error');
    define('LANG_REQUEST_PARAMS_ERROR',		 'Error in parameters: %s');
    define('LANG_FORM_ERRORS',				 'Errors in form');
    define('LANG_TRACE_STACK',				 'Recent calls');
    define('ERR_COMPONENT_NOT_FOUND',		 'Component not found');
    define('ERR_MODEL_NOT_FOUND',			 'Model not found or cannot be read');
    define('ERR_TEMPLATE_NOT_FOUND', 		 'Template not found or cannot be read');
    define('ERR_LIBRARY_NOT_FOUND', 		 'Library not found or cannot be read');
    define('ERR_FILE_NOT_FOUND',             'File not found');
    define('ERR_CLASS_NOT_FOUND', 		 	 'Class not found or cannot be read');
    define('ERR_CLASS_NOT_DEFINED', 		 'In the %s file class <b>%s</b> not defined');
    define('ERR_MODULE_NOT_FOUND', 		 	 'Module not found');
    define('ERR_DATABASE_QUERY', 		 	 '<b>DB query error</b>: <p>%s</p>');
    define('ERR_PAGE_NOT_FOUND', 		 	 'Page not found');
    define('ERR_FORBIDDEN', 		 	     'Forbidden');
    define('ERR_SITE_OFFLINE',               'Site is offline');
    define('ERR_SITE_OFFLINE_FULL',          'Site is offline. <a href="%s">Enable</a>');
    define('ERR_SEARCH_TITLE',               'Search');
    define('ERR_SEARCH_QUERY_INPUT',         'What?');
    define('ERR_USER_NOT_FOUND',             'User does not exist');

    //UPLOAD ERRORS
    define('LANG_UPLOAD_ERR_OK',             'File was successfully uploaded');
    define('LANG_UPLOAD_ERR_INI_SIZE', 		 'File size exceeds the limit allowed: %s');
    define('LANG_UPLOAD_ERR_FORM_SIZE',      'File size exceeds the limit allowed');
    define('LANG_UPLOAD_ERR_PARTIAL', 		 'File was uploaded partially');
    define('LANG_UPLOAD_ERR_NO_FILE', 		 'File upload failed');
    define('LANG_UPLOAD_ERR_NO_TMP_DIR',     'Folder for temporary files not found on the server');
    define('LANG_UPLOAD_ERR_CANT_WRITE', 'Failed to write file to disk');
    define('LANG_UPLOAD_ERR_EXTENSION', 	 'File upload was cancelled');
    define('LANG_UPLOAD_ERR_MIME',           'File has wrong format');

    //MONEY
    define('LANG_CURRENCY',                  '$');

    //VALIDATION ERRORS
    define('ERR_VALIDATE_REQUIRED',          'Field is required');
    define('ERR_VALIDATE_MIN',               'Too small value (minimum: %s)');
    define('ERR_VALIDATE_MAX',               'Too large value (maximum: %s)');
    define('ERR_VALIDATE_MIN_LENGTH',        'Too short value (min. length: %s)');
    define('ERR_VALIDATE_MAX_LENGTH',        'Too long value (max. length: %s)');
    define('ERR_VALIDATE_EMAIL',             'Wrong e-mail format');
    define('ERR_VALIDATE_REGEXP',            'Wrong format');
    define('ERR_VALIDATE_ALPHANUMERIC',      'Only letters and numbers');
    define('ERR_VALIDATE_SYSNAME',           'Only letters (lowercase), numbers and break characters');
    define('ERR_VALIDATE_SLUG',              'Only letters (lowercase), numbers, hyphen and vertical bar');
    define('ERR_VALIDATE_DIGITS',            'Only numbers');
    define('ERR_VALIDATE_NUMBER',            'Enter a number');
    define('ERR_VALIDATE_UNIQUE',            'This value is already used');
    define('ERR_VALIDATE_INVALID',           'Invalid value');

    define('LANG_VALIDATE_REQUIRED',         'Field is required');
    define('LANG_VALIDATE_DIGITS',           'Only counting numbers');
    define('LANG_VALIDATE_NUMBER',           'Only numbers');
    define('LANG_VALIDATE_ALPHANUMERIC',     'Only Latin letters and numbers');
    define('LANG_VALIDATE_EMAIL',            'E-mail address');
    define('LANG_VALIDATE_UNIQUE',           'Unique value');

    define('ERR_REQ_EMAIL', 		 	 	 'E-mail is required!');
    define('ERR_EMPTY_FIELDS', 			 	 'All fields are required!');
    define('ERR_NICKNAME_EXISTS', 			 'Nickname &laquo;%s&raquo; is already used');
    define('ERR_WRONG_OLD_PASS', 		 	 'Password change error: Old password is incorrect');
    define('ERR_NEW_PASS_MISMATCH', 		 'Password change error: Passwords do not match');
    define('ERR_NEW_PASS_REQUIRED', 		 'Enter your new password twice!');

    //CAPTCHA
    define('LANG_CAPTCHA_CODE', 		 	 'Spam protection');
    define('LANG_CAPTCHA_ERROR', 		 	 'Spam protection code is incorrect');

    //LISTS
    define('LANG_NO_ITEMS', 		 		 'No elements to display');

    //ACTIONS
    define('LANG_ADD_CATEGORY',              'Add Category');
    define('LANG_ADD_CATEGORY_QUICK',        'or create a category inside the selected');
    define('LANG_EDIT_CATEGORY',             'Edit Category');
    define('LANG_DELETE_CATEGORY',           'Delete Category');
    define('LANG_DELETE_CATEGORY_CONFIRM',   'Are you sure you want to delete the category?\nIts contents will be deleted too!');
    define('LANG_ADD_FOLDER_QUICK',          'or add a new folder');
    define('LANG_EDIT_FOLDER',               'Edit Folder');
    define('LANG_DELETE_FOLDER',             'Delete Folder');
    define('LANG_DELETE_FOLDER_CONFIRM',     'Are you sure you want to delete the folder?\nIts contents will be deleted too!');

    define('LANG_BY_DEFAULT',                'Default');
    define('LANG_BASIC_OPTIONS',             'Basic');
    define('LANG_YES',                       'Yes');
    define('LANG_NO',                        'No');
    define('LANG_LIST_LIMIT',                'Entries in list');
    define('LANG_LIST_ALL',					 'Show all');
    define('LANG_LIST_EMPTY',                'No items to display');
    define('LANG_TARGET_LIST_EMPTY',         'No %s to display');
    define('LANG_LIST_NONE_SELECTED',        'Nothing selected');
    define('LANG_DOWNLOAD',                  'Download');
    define('LANG_UPLOAD',                    'Upload');
    define('LANG_SELECT_UPLOAD',             'Select and upload');
    define('LANG_DROP_TO_UPLOAD',            'Drag an drop files here to upload');
    define('LANG_CREATE',                    'Create');
    define('LANG_APPLY',                     'Apply');
    define('LANG_ACCEPT',                    'Accept');
    define('LANG_DECLINE',                   'Decline');
    define('LANG_CONFIRM',                   'Confirm');
    define('LANG_INVITE',                    'Invite');
    define('LANG_ADD', 						 'New');
    define('LANG_ADD_CONTENT',				 'New Page');
    define('LANG_ADD_USER',                  'New User');
    define('LANG_ADD_NEWS',					 'Add news');
    define('LANG_ADD_MENU',				 	 'New Menu');
    define('LANG_ADD_MENUITEM',				 'New Menu Item');
    define('LANG_MENU_MORE',                 'More');
    define('LANG_VIEW', 					 'View');
    define('LANG_EDIT', 					 'Edit');
    define('LANG_EDIT_SELECTED',			 'Edit selected');
    define('LANG_SHOW', 					 'Show');
    define('LANG_SHOW_ALL',                  'Show all');
    define('LANG_SHOW_SELECTED',			 'Show selected');
    define('LANG_ADMIN_SELECTED', 			 'Assign selected as administrators');
    define('LANG_UNADMIN_SELECTED',			 'Deprive selected administrator rights');
    define('LANG_HIDE', 					 'Hide');
    define('LANG_HIDE_SELECTED',			 'Hide selected');
    define('LANG_CONFIG', 					 'Settings');
    define('LANG_RESTORE', 					 'Restore');
    define('LANG_BASKET_TITLE', 			 'Items trash');
    define('LANG_BASKET_DELETE', 			 'Move to trash');
    define('LANG_BASKET_DELETE_SUCCESS', 	 'Item successfully deleted to trash');
    define('LANG_BASKET_DELETE_LEFT_TIME', 	 'The material will be %s in the trash and then permanently deleted');
    define('LANG_ITEM_RESTORE_SUCCESS', 	 'Item successfully restored');
    define('LANG_DELETE', 					 'Delete');
    define('LANG_DELETE_SUCCESS', 	         'Item successfully deleted');
    define('LANG_DELETE_SELECTED',			 'Delete selected');
    define('LANG_DELETE_SELECTED_CONFIRM',   'Delete selected elements?');
    define('LANG_TRASH_DELETE_SELECTED_CONFIRM', 'Are you sure you want to delete the selected items in the trash?');
    define('LANG_MOVE',                      'Move');
    define('LANG_MOVE_TO_CATEGORY',          'Move to category');
    define('LANG_ON',	 					 'On');
    define('LANG_OFF', 						 'Off');
    define('LANG_SAVE',						 'Save');
    define('LANG_PUBLISH',					 'Publish');
    define('LANG_SAVE_CHANGES',              'Save changes');
    define('LANG_SAVE_ORDER',                'Save order');
    define('LANG_SAVING',                    'Saving...');
    define('LANG_PREVIEW',                   'Preview');
    define('LANG_SEND',						 'Send');
    define('LANG_INSTALL',					 'Install');
    define('LANG_INSERT',					 'Insert');
    define('LANG_CANCEL',					 'Cancel');
    define('LANG_BACK',					 	 'Back');
    define('LANG_IN_QUEUE',					 'Items in queue');
    define('LANG_SELECT',                    'Select');
    define('LANG_SELECT_MULTIPLE',           'Select multiple');
    define('LANG_SELECT_ALL',				 'Select all');
    define('LANG_DESELECT_ALL',				 'Deselect all');
    define('LANG_INVERT_ALL',				 'Invert');
    define('LANG_CLOSE',                     'Close');
    define('LANG_CONTINUE',                  'Continue');
    define('LANG_OPTIONS',                   'Options');
    define('LANG_REPLY',                     'Reply');
    define('LANG_REPLY_SPELLCOUNT',          'reply|replies|replies');
    define('LANG_FROM',                      'from');
    define('LANG_TO',                        'to');
    define('LANG_IS_ENABLED',                'Enabled');
    define('LANG_HELP',                      'Help');
    define('LANG_HELP_URL',                  'http://docs.instantcms.ru/en');
    define('LANG_IN',                        'in');

    //NAVIGATION
    define('LANG_HOME',                      'Home');
    define('LANG_BACK_TO_HOME',              'Back to homepage');
    define('LANG_PAGE_NEXT', 				 'Next');
    define('LANG_PAGE_PREV',                 'Previous');
    define('LANG_PAGE_FIRST', 				 'First');
    define('LANG_PAGE_LAST',                 'Last');
    define('LANG_PAGES', 					 'Pages');
    define('LANG_PAGE', 					 'Page');
    define('LANG_PAGE_ADD',                  'NewPage');
    define('LANG_PAGE_DELETE',               'Delete page');
    define('LANG_PAGE_CURRENT_DELETE',       'Delete current page');
    define('LANG_PAGES_SHOWN',               'Items %d-%d of %d');
    define('LANG_PAGES_SHOW_PERPAGE',        'Show');
    define('LANG_SHOW_MORE',                 'Show more');
    define('LANG_RETURN_TO_FIRST',           'Back to top');

    //FORMS
    define('LANG_SUBMIT', 					 'Submit');
    define('LANG_SUBMIT_NOT_SAVE',			 'Do you want to leave this page? Changes have not been saved.');

    //LAYOUT
    define('LANG_PAGE_BODY',                 'Page body');
    define('LANG_PAGE_MENU',                 'Page menu');
    define('LANG_PAGE_HEADER',               'Page header');
    define('LANG_PAGE_FOOTER',               'Page footer');
    define('LANG_PAGE_LOGO',                 'Logo');
    define('LANG_MENU',                      'Menu');
    define('LANG_TITLE', 					 'Title');
    define('LANG_SHOW_TITLE',                'Show title');
    define('LANG_SYSTEM_NAME',               'System name');
    define('LANG_SYSTEM_EDIT_NOTICE',	     '<b>Attention:</b> if you change the system name field will be re-created and all current data will be lost!');
    define('LANG_DESCRIPTION',               'Description');
    define('LANG_INFORMATION',               'Information');
    define('LANG_CONTENT', 					 'Contents');
    define('LANG_CATEGORY',                  'Category');
    define('LANG_CATEGORY_TITLE',            'Category title');
    define('LANG_CATEGORY_DESCRIPTION',      'Category description');
    define('LANG_FOLDER',                    'Folder');
    define('LANG_ROOT_NODE',                 'Root node');
    define('LANG_ROOT_CATEGORY',             'Root category');
    define('LANG_PARENT_CATEGORY',           'Parent category');
    define('LANG_ADDITIONAL_CATEGORIES',	 'Additional categories');
    define('LANG_MESSAGE', 					 'Message text');
    define('LANG_DATE', 					 'Date');
    define('LANG_DATE_PUB',                  'Publication date');
    define('LANG_PUBLICATION',				 'Publication');
    define('LANG_SLUG',                      'URL');
    define('LANG_PRIVACY',                   'Privacy');
    define('LANG_PRIVACY_PUBLIC',            'For everyone');
    define('LANG_PRIVACY_HINT',              'This is private item');
    define('LANG_PRIVACY_PRIVATE',           'Show only to friends');
    define('LANG_PRIVACY_PRIVATE_HINT',      'This is a private item. Only author\'s friends can view it.');
    define('LANG_ON_FRONT',				 	 'On the home page');
    define('LANG_SHOWED',					 'Shown');
    define('LANG_ORDER',					 'Order');
    define('LANG_ORDER_DOWN',				 'Move down');
    define('LANG_ORDER_UP',					 'Move up');
    define('LANG_HITS_SPELL',                'views|views|views');
    define('LANG_HITS',                      'Views');
    define('LANG_GUEST',                     'Guest');

    //SEO
    define('LANG_SEO',                       'SEO');
    define('LANG_ROOT_SEO',                  'Component main page SEO');
    define('LANG_SEO_TITLE',                 'Page title');
    define('LANG_SEO_KEYS',                  'Keywords');
    define('LANG_SEO_KEYS_HINT',             'Page keywords separated by commas');
    define('LANG_SEO_DESC',                  'Description');
    define('LANG_SEO_DESC_HINT',             'Short page description for search engines');
    define('LANG_TAGS',                      'Tags');
    define('LANG_TAGS_HINT',                 'Keywords separated by commas');

    //FILES
    define('LANG_B',               'byte');
    define('LANG_KB',              'Kb');
    define('LANG_MB',              'Mb');
    define('LANG_GB',              'Gb');
    define('LANG_TB',              'Tb');
    define('LANG_PB',              'Pb');

    //UNITS
    define('LANG_UNIT1',                     'unit');
    define('LANG_UNIT2',                     'units');
    define('LANG_UNIT10',                    'units');
    define('LANG_CH1',                       'character');
    define('LANG_CH2',                       'characters');
    define('LANG_CH10',                      'characters');
    define('LANG_TIME1',                     'time');
    define('LANG_TIME2',                     'times');
    define('LANG_TIME10',                    'times');
    define('LANG_SUBSCRIBERS_SPELL',         'subscriber |subscriber|subscribers');
    define('LANG_DOWNLOAD_SPELL',            'download|download|downloads');

    define('LANG_ISLEFT',                    'left');

    //DATES
    define('LANG_ALL',                       'All');
    define('LANG_JUST_NOW',                  'Just now');
    define('LANG_SECONDS_AGO',               'Less than a minute');
    define('LANG_YESTERDAY',                 'Yesterday');
    define('LANG_TODAY',                     'Today');
    define('LANG_TOMORROW',                  'Tomorrow');
    define('LANG_WEEK',                      'Week');
    define('LANG_WEEK1',                     'week');
    define('LANG_WEEK2',                     'weeks');
    define('LANG_WEEK10',                    'weeks');
    define('LANG_THIS_WEEK',                 'This week');
    define('LANG_THIS_MONTH',                'This month');
    define('LANG_EVENTS_THIS_WEEK',          'This week events');
    define('LANG_CALENDAR',                  'Calendar');
    define('LANG_TIME_ZONE',                 'Time zone');
    define('LANG_YEAR',                      'Year');
    define('LANG_YEARS',                     'Years');
    define('LANG_YEAR1',                     'year');
    define('LANG_YEAR2',                     'years');
    define('LANG_YEAR10',                    'years');
    define('LANG_MONTHS',                    'Months');
    define('LANG_MONTH',				     'Month');
    define('LANG_MONTH1',                    'month');
    define('LANG_MONTH2',                    'months');
    define('LANG_MONTH10',                   'months');
    define('LANG_DAYS',                      'Days');
    define('LANG_DAY1',                      'day');
    define('LANG_DAY2',                      'days');
    define('LANG_DAY10',                     'days');
    define('LANG_HOURS',                     'Hours');
    define('LANG_HOUR1',                     'hour');
    define('LANG_HOUR2',                     'hours');
    define('LANG_HOUR10',                    'hours');
    define('LANG_MINUTES',                   'Minutes');
    define('LANG_MINUTE1',                   'minute');
    define('LANG_MINUTE2',                   'minutes');
    define('LANG_MINUTE10',                  'minutes');
    define('LANG_SECONDS',                   'Seconds');
    define('LANG_SECOND1',                   'second');
    define('LANG_SECOND2',                   'seconds');
    define('LANG_SECOND10',                  'seconds');
    define('LANG_DATE_AGO',                  '%s ago');
    define('LANG_AUTO',                      'Auto');

    //MAIL
    define('LANG_MAIL_DEFAULT_ALT',          'Please view this e-mail with a client that supports HTML');

    define('LANG_POWERED_BY_INSTANTCMS',     'Powered by <a href="http://instantcms.ru/">InstantCMS</a>');
    define('LANG_ICONS_BY_FATCOW',           'Icons by <a href="https://icons8.com/">Icons8</a>');
    define('LANG_SUCCESS_MSG',               'Successfully saved');

    define('LANG_DEBUG_QUERY_TIME',          'Runtime');
    define('LANG_DEBUG',                     'Debugging');
    define('LANG_DEBUG_TAB_DB',              'SQL');
    define('LANG_DEBUG_TAB_CACHE',           'Cache');
    define('LANG_DEBUG_TAB_EVENTS',          'Events');
    define('LANG_DEBUG_TAB_WIDGETS',         'Widgets');
    define('LANG_DEBUG_TAB_INCLUDES',        'Included files');
