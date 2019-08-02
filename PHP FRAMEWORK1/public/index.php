<?php
use php\App;
use php\Router;
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new App();
App::$app->setProperty('test', 'test');
//debug(App::$app->getProperties());
//throw new Exception('Страница не найдена',500); //Вызов искуственной ошибки
//debug(Router::getRoutes());
