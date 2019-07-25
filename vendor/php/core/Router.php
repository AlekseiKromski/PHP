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
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            //Проверка на существование класса
            if(class_exists($controller)){
                //Создаем объект и передаем в него параметр $route
                $controllerObject = new $controller(self::$route);
                //Пример: indexAction
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                //Проверка на существование метода
                if(method_exists($controllerObject, $action)){
                    //Вызывает action у объекта $controllerObject
                    $controllerObject->$action();
                }else{
                    throw new \Exception("Метод $controller::$action не найден", 404);
                }
            }else{
                throw new \Exception("Контроллер $controller не найден", 404);
            }

        }else{
            throw new \Exception("Странница не найдена", 404);
        }
    }

    //Принемает url адресс, будет искать соответствие в массиве маршрутов
    public static function matchRoute($url){
        foreach (self::$routes as $pattern => $route){ //Сравнивает правило и текущий маршрут
            if(preg_match("#{$pattern}#", $url, $matches)){
                //Берет массив matches и проверяет его на то, чтобы ключь являлся строкой
                foreach ($matches as $k => $v){
                    if(is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                //Action по умолчанию = index
                if(empty($route['action'])){
                    $route['action'] = 'index';
                }
                if(!isset($route['prefix'])){
                    $route['prefix'] = '';
                }else{
                    $route['prefix'] .= '\\';
                }
                //Обрабатываем имя контроллера
                $route['controller'] = self::upperCamelCase($route['controller']);
                //Добавляем в глобальный $route, значение локального $route
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    //CamelCase
    protected static function upperCamelCase($name){
        //Ищем дефиз и удаляем его
        $name = str_replace('-',' ',$name);
        //Делаем каждую первую букву большой
        $name = ucwords($name);
        //Ищем пробел и удаляем его
        $name = str_replace(' ','',$name);
        return $name;
    }

    //camelCase
    protected static function lowerCamelCase($name){
        return lcfirst(self::upperCamelCase($name));

    }
}