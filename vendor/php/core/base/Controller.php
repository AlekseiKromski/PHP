<?php


namespace php\base;


abstract class Controller
{
    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $meta = []; //только мета данные
    public $data = []; // данные для вида
    public $layout;

    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $route['action']; // соответсвует файлу вида
        $this->prefix = $route['prefix'];
        $this->model = $route['controller'];
    }

    public function setMeta($title = '', $desc = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }

    public function set($data)
    {
        $this->data = $data;
    }

    public function getView(){
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
        $viewObject->render($this->data);
    }


}