# ShortUrl
萌娘短网址的（官方 (の´ｖ｀の)）开源程序
# 什么是ShortUrl
ShortUrl 是一个极简短网址程序，包含后台管理界面和清晰的配置文本。
# Demo
[Demo Web](http://gurl.ga)
# 安装方式
将“shorturl.sql”导入数据库，并编辑“config.php”
```java  
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
```
# For .htaccess or config nginx
Apache
```java  
   RewriteEngine on
   RewriteOptions MaxRedirects=1
   RewriteBase /
   RewriteCond %{REQUEST_FILENAME} !-f
   RewriteCond %{REQUEST_FILENAME} !-d
   RewriteCond %{REQUEST_FILENAME} !-l
   RewriteRule ^([a-zA-Z0-9_-]+)$ redirect.php?alias=$1 [L]
```
Nginx
```java  
if (!-f $request_filename){
	set $rule_0 1$rule_0;
}
if (!-d $request_filename){
	set $rule_0 2$rule_0;
}
if ($request_filename !~ "-l"){
	set $rule_0 3$rule_0;
}
if ($rule_0 = "321"){
	rewrite ^/([a-zA-Z0-9_-]+)$ /redirect.php?alias=$1 last;
}
```
# Note
Nginx环境下访问后台需要在admin后面加上“/”才能登录。
如果无需SSL，请按以下程序操作：
 1. 编辑“index.php”, 注释第108行并取消注释第107行。
 2. 编辑“.htaccess”, 注释第9-10行。
