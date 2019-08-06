<?php


namespace php\base;


class View
{

    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $data = []; //Обычные данные
    public $meta = []; //Мета данные
    public $layout;

    public function __construct($route,$layout = '', $view = '', $meta)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if($layout === false){
            $this->layout = false;
        }else{
            $this->layout = $layout ?: LAYOUT;
        }
    }

}