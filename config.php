<?php
// HTTP
define('HTTP_SERVER', 'http://www.docestilomodas.com.br/');

// HTTPS
define('HTTPS_SERVER', 'http://www.docestilomodas.com.br/');

// DIR
define('DIR_APPLICATION', '/home1/docestil/public_html/catalog/');
define('DIR_SYSTEM', '/home1/docestil/public_html/system/');
define('DIR_IMAGE', '/home1/docestil/public_html/image/');
define('DIR_STORAGE', '/home1/docestil/storage/');
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
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'docestil_root');
define('DB_PASSWORD', 'docestil_root');
define('DB_DATABASE', 'docestil_opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');