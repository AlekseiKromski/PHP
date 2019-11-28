<?php


namespace php;


class Router
{

    protected static $routes =  []; //все существующие маршруты
    protected static $route = []; //текущий маршрут

    //записывает все параметры в таблицу маршрутов
    public static function add($regexp, $route = []){
        self::$routes[$regexp] = $route;
    }


    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function dispatch($url){
        if(self::matchRoute($url)){
            echo 'Ok';
        }else{
            echo 'No';
        }
    }

    public static function matchRoute($url){
        return true;
    }
}