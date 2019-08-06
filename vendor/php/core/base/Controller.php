<?php


namespace php\base;


abstract class controller
{

    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $data = []; //Обычные данные
    public $meta = ['title' => '','desc' => '','keywords' => '']; //Мета данные
    public $layout;

    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
    }

    public function set($data){
        $this->data = $data;
    }

    public function setMeta($title = '', $desc = '', $keywords = ''){
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }

    public function getView(){
        $viewObject = new View($this->route,$this->layout,$this->view,$this->meta);
        $viewObject->render($this->data);
    }

}