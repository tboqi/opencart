<?php
// HTTP
define('HTTP_SERVER', 'http://opencart.local:10080/');

// HTTPS
define('HTTPS_SERVER', 'http://opencart.local:10080/');

// DIR
define('DIR_APPLICATION', '/work/d/code/opencart/upload/catalog/');
define('DIR_SYSTEM', '/work/d/code/opencart/upload/system/');
define('DIR_IMAGE', '/work/d/code/opencart/upload/image/');
define('DIR_STORAGE', '/work/d/code/opencart/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '10.0.75.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'opencart3020');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');