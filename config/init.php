<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/php/core');
define("LIBS", CORE . '/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", ROOT . 'default');

//Обработка константы PATH

//http://php/public/index.php
$path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

//http://php/public/
$path = preg_replace('#[^/]+$#', '', $path);

//http://php/
$path = str_replace('/public/', '', $path);

define("PATH", $path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';