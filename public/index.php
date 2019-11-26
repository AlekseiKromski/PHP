<?php
namespace php;
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
$App = new App();
throw new \Exception('Page was not found', 404);
