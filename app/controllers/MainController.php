<?php


namespace app\controllers;

use php\App;

class MainController extends AppController
{
    public function indexAction(){
        $this->setMeta(App::$app->getProperties('shop_name'), 'testDesc', 'testKey');
        $this->set(['name' => 'Andery', 'age' => '30']);
    }
}