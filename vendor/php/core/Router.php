<?php


namespace php;


use mysql_xdevapi\Exception;

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
        $url = self::removeQueryString($url);
        if(self::matchRoute($url)){
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            if(class_exists($controller)){
                $controllerObject = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                if(method_exists($controllerObject, $action)){
                    $controllerObject->$action();
                    $controllerObject->getView();
                }else{
                    throw  new \Exception("Метод в $controller::$action не был найден",404);
                }
            }else{
                throw  new \Exception("Контроллер {$controller} не найден",404);
            }
        }else{
            throw  new \Exception('Страница не найдена',404);
        }
    }

    public static function matchRoute($url){
        foreach (self::$routes as $pattern => $route){
            if(preg_match("#{$pattern}#", $url, $matches)){
                foreach ($matches as $k => $v) {
                    if(is_string($k)){
                        $route[$k] = $v;
                    }
                }
                if(empty($route['action'])){
                    $route['action'] = 'index';
                }
                if(!isset($route['prefix'])){
                    $route['prefix'] = '';
                }else{
                    $route['prefix'] .= '\\';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }
    //CamelCase
    protected static function upperCamelCase($string){
        $string = str_replace('-', ' ', $string);
        $string = ucwords($string);
        $string = str_replace(' ', '', $string);
        return $string;
    }

    //camelCase
    protected static function lowerCamelCase($string){
        return lcfirst(self::upperCamelCase($string));
    }

    protected static function removeQueryString($url){
        if($url){
            $params = explode('&', $url, 2);
            if(false === strpos($params[0], '=')){
                return rtrim($params[0], '/');
            }else{
                return '';
            }
        }
    }

}