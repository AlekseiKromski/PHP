<?php

// Константа нужна для класса обработчика ошибок
define('DEBUG' , 1);
//Корневой путь
define('ROOT' , dirname(__DIR__));
//Путь к папке public
define('WWW' , ROOT . '/public');
//Путь к папке app
define('APP' , ROOT . '/app');
//Путь к папке core
define('CORE' , ROOT . '/vendor/php/core');
//Путь к папке libs
define('LIBS' , ROOT . '/vendor/php/core/libs');
//Путь к папке кеша
define('CACHE' , ROOT . '/tmp/cache');
//Путь к папке конфига
define('CONF' , ROOT . '/config');
//Хранение расоположения шаблона сайта по умолчанию
define('LAYOUT' , 'default');
define('ERRORS_STYLES', ROOT . '/public/Errors/404/css');

//http://php/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://php/public/
$app_path = preg_replace('#[^/]+$#','',$app_path);
//http://php
$app_path = str_replace('/public/','',$app_path);

//Константа, которая хранит путь к index файлу
define('PATH', $app_path);
//Путь к папке администратора
define('ADMIN', PATH . '/admin');

require_once ROOT . "/vendor/autoload.php";