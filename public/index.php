<?php
namespace php;
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
$App = new App();
debug($App::$app->getPropertiesAll());
