<?php
//site name
define('SITE_NAME', 'GroupMVC');

//App Root
define('APP_PATH', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '');
define('WEB_URL', $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]);

//DB Params
// define('DB_HOST', '127.0.0.0');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'GroupMVC');