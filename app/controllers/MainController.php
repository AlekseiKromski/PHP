<?php


namespace app\controllers;
use php\App;
use php\Cache;
class MainController extends AppController
{

    //public $layout = 'test'; - Подключение другуго шаблона

    public function indexAction(){
        $brands = \R::find('brand',"LIMIT 3");
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 8");
        $this->set(compact('brands', 'hits'));


    }

}