<?php


namespace php;


class Router
{

    protected static $routes =[]; // Хранение всех таблиц маршрутов
    protected static $route =[]; // Хранение данного машрута

    // Записывает правила в таблицу маршрутов
    public static function add($regexp, $route = []){
        self::$routes[$regexp] = $route;
    }


    public static function getRoutes(){
        return self::$routes;
    }
    public static function getRoute(){
        return self::$route;
    }

    public static function dispath($url){
        if(self::matchRoute($url)){
            echo 'ok';
        }else{
            echo 'no';
        }
    }

    public static function matchRoute($url){
        return true;
    }

}