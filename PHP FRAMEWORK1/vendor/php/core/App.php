<?php


namespace php;


class App
{

    public static $app;

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/'); // Обризает концевой слеш
        session_start();

        //Обращается в TSingleton и создаеться объект
        self::$app = Registry::instance();
        $this->getParams();
        new ErrorHandler();
        Router::dispatch($query);
    }

    //Функция из определенного получает массив, который проверяеться на то, пустой ли он
    //и через цикл с помощью метода заполняеться в классе Registry
    protected function getParams(){
        $params = require_once CONF . '/params.php';
        if(!empty($params)){
            foreach ($params as $k => $v){
                self::$app->setProperty($k, $v);
            }
        }
    }
}