<?php
use php\App;
require_once dirname( __DIR__) . '/config/init.php';
require_once CORE . '/libs/function.php';
new App();
App::$app->setProperty('Dugle', '132');
debug(App::$app->getProperties());


