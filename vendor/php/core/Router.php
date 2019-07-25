<?php


namespace php;


class Router
{
    protected static $routes = []; //Будет храниться таблица маршрутов
    protected static $route = []; //Будет храниться текущий маршрут

    /*
     * Метод будет записывать правила в таблицу маршрутов
     * */
    public static function add($regexp, $route = []){
        //Записываем в таблицу маршрутов [регулярное выражение] => текущий маршрут
        self::$routes[$regexp] = $route;
    }

    //Возвращает массив правил
    public static function getRoutes(){
        return self::$routes;
    }
    //Возвращает ткущий маршрут
    public static function getRoute(){
        return self::$route;
    }

    //Принемает url адресс, будет вызывать метод matchRoute
    //И в зависимости от того, что вернет matchRoute, будет вызывать контроллер
    public static function dispatch($url){
        if(self::matchRoute($url)){
            echo 'ok';
        }else{
            echo 'no';
        }
    }

    //Принемает url адресс, будет искать соответствие в массиве маршрутов
    public static function matchRoute($url){
        return true;
    }
}