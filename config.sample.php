<?php
define('DB_HOSTNAME', 'localhost'); // MySQL Server
define('DB_USERNAME', ''); //MySQL Username
define('DB_PASSWORD', ''); //MySQL Password
define('DB_NAME', ''); // Database Name
define('DB_VERSION', '4');// Database Version
define('DB_PREFIX', 'shorturl_'); // Database table prefix
define('SITE_URL', 'https://demo.domain.org'); // Your short url, don't use "/"
define('SITE_TITLE', 'ShortUrl'); // Title
define('ADMIN_USERNAME', 'admin'); // Admin username for control panel
define('ADMIN_PASSWORD', 'password'); // Password for admin
define('URL_PROTOCOLS', 'http|https|ftp|ftps|mailto|news|mms|rtmp|rtmpt|ed2k'); // Protocol accept to short
define('SHORTURL_VERSION', '1.0.4');
define('SHORTURL_NUMERICVERSION', '104');
define('INDIRECTLYGO','0'); // Wait before jump go "1 = active"
define('GOTIME','10');	// This second for wait
error_reporting(E_ALL); // Just report for you if got error
$_ERROR = array();
