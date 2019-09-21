<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController {

    public function indexAction(){
        $brands = \R::find('brand', 'LIMIT 3');
        debug($brands);
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $this->set(compact('brands'));
    }

}