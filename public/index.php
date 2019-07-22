<?php
use php\App;
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new App();
App::$app->setProperty('test', 'test');
debug(App::$app->getProperties());
