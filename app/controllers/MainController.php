<?php


namespace app\controllers;


use php\App;

class MainController extends AppController
{

    public function indexAction(){
        $posts = \R::findAll('test');
        $post = \R::findOne('test','id = ?', [2]);
        $this->setMeta(App::$app->getProperty('Shop_name'),'lelele','ererer rere ere');
        $name = 'Jon';
        $age = 30;
        $this->set(compact('name','age','posts'));
    }

}