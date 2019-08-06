<?php


namespace app\controllers;


class MainController extends AppController
{

    public function indexAction(){
        debug($this->route);
        $this->setMeta('Ничего','adasdasd','adsadadad');
    }

}