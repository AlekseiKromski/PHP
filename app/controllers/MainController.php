<?php


namespace app\controllers;


use php\App;

class MainController extends AppController
{

    public function indexAction(){
        $this->setMeta(App::$app->getProperty('Shop_name'),'lelele','ererer rere ere');
        $name = 'Jon';
        $age = 30;
        $this->set(compact('name','age'));
    }

}