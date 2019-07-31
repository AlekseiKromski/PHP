<?php


namespace app\controllers;


use php\App;
use php\Cache;

class MainController extends AppController
{

    public function indexAction(){
        $posts = \R::findAll('test');
        $post = \R::findOne('test','id = ?', [2]);
        $this->setMeta(App::$app->getProperty('Shop_name'),'lelele','ererer rere ere');
        $name = 'Jon';
        $age = 30;
        $names = ['JOhn','Angles', 'Mike'];
        $cache = Cache::instance();
        //$cache->set('test', $names);
        $data = $cache->get('test');
        $cache->delete('test');
        $this->set(compact('name','age','posts'));
    }

}