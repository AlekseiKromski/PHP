<?php


namespace app\controllers;
use php\App;
use php\Cache;
class MainController extends AppController
{

    //public $layout = 'test'; - Подключение другуго шаблона

    public function indexAction(){
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

    }

}