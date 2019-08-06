<?php


namespace app\controllers;


class MainController extends AppController
{

    //public $layout = 'test'; - Подключение другуго шаблона

    public function indexAction(){
        $this->setMeta('Ничего','adasdasd','adsadadad');
    }

}