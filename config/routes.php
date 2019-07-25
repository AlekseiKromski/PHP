<?php

use php\Router;

//

// default routes
Router::add('^admin$', ["controller => 'Main', 'action' => 'index','prefix' => 'admin'"]); // от начала и до конца строки
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']); // от начала и до конца строки

Router::add('^$', ["controller => 'Main', 'action' => 'index'"]); // от начала и до конца строки
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

/*
 * Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
*/