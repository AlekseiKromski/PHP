<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ishop;

/**
 * Description of App
 *
 * @author ShinSais
 */
class App {
    
    public static $app;
    
    
    public function __construct(){
        $query = trim($_SERVER['QUERY_STRING'], '/');  //обрезка концевого слеша
        session_start();
        self::$app = Registry::instance(); //App контейнер, в который записан объект рееастра
        $this->getParams();
        new ErrorHandler();
        
    }
    protected function getParams(){
        $params = require_once CONF . '/params.php';
        if(!empty($params)){
            foreach ($params as $k => $v){
                self::$app->setProperty($k,$v);
            }
        }
    }
}
