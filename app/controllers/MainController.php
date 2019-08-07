<?php


namespace app\controllers;
use php\App;

class MainController extends AppController
{

    //public $layout = 'test'; - Подключение другуго шаблона

    public function indexAction(){
        $this->setMeta(App::$app->getProperty('name'),'adasdasd','adsadadad asd asd asd');
        $posts = \R::findAll('test');
        $this->set(compact('posts'));
    }

}