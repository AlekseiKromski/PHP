<?php


namespace app\controllers;


use php\App;
use php\Cache;

class MainController extends AppController
{

    public function indexAction(){
        $this->setMeta(App::$app->getProperty('Shop_name'),'lelele','ererer rere ere');
    }

}