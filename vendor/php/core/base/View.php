<?php


namespace php\base;


use mysql_xdevapi\Exception;

class View
{
    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $layout;
    public $meta = []; //только мета данные
    public $data = []; // данные для вида

    public function __construct($route, $layout = '', $view = '', $meta)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if($layout === false){
            $this->layout = false;
        }else{
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data){
        debug($data);
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if(is_file($viewFile)){
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        }else{
            throw new \Exception('Was not find view', 404);
        }
        if(false != $this->layout){
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($layoutFile)){
                require_once $layoutFile;
            }else{
                throw new \Exception('Was not find layout', 404);
            }
        }

    }

    public function getMeta()
    {
        echo $meta = "
        <title>{$this->meta['title']}</title>
        <meta name=\"description\" content=\"{$this->meta['desc']}\">
        <meta name=\"Keywords\" content=\"{$this->meta['keywords']}\"> 
        ";
    }


}