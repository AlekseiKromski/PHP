<?php
use php\App;
use php\Router;
require_once dirname( __DIR__) . '/config/init.php';
require_once CORE . '/libs/function.php';
require_once CONF . '/routes.php';


new App();

//debug(Router::getRoutes());
