<?php
//define(__DIR__)
define("DEBUG",0);
define("ROOT",dirname(__DIR__));
define("WWW",ROOT . '/public');
define("APP",ROOT . '/app');
define("APP",ROOT . '/app');
define("CORE",ROOT . '/vendor/ishop/core');
define("LIBS",ROOT . '/vendor/ishop/core/libs');
define("CACHE",ROOT . '/tmp/cache');
define("CONF",ROOT . '/config');
define("LAYOUT",ROOT . 'default');
define("CSS_ERROR_PATH",'/errors/css/style.css');


//http://php/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

//http://php/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);

//http://php
$app_path = str_replace("/public/", '', $app_path);

define("PATH", $app_path); //Крневой путь сайта
define("ADMIN", PATH . '/admin'); //админка

require_once ROOT . '/vendor/autoload.php' ;


