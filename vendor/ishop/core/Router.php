<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ishop;

/**
 * Description of Router
 *
 * @author ShinSais
 */
class Router {
    protected static $routes = []; //Таблица маршрутов
    protected static $route = []; 
    
    public static function add($regexp, $route = []){
        self::$routes[$regexp] = $route;
    }
    
    public static function getRoutes(){
        return self::$routes;
    }
    
    public static function getRoute(){
        return self::$route;
    }
    public static function dispatch($url){
        if(self::matchRoute($url)){
            echo 'OK';
        }else{
            echo 'NO';
        }
    }
    public static function matchRoute($url){
        return true;
    }
}
