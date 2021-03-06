<?php


namespace php;


class App
{

    public static $app; //контейнер для приложения (разные параметры можно вложить)

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance(); //Хранение всех необхадимых параметров
        $this->getParams(); //заполняем контейнер данными
        new ErrorHandler(); //Включаемобработчик ошибок
        Router::dispatch($query); //Передаем запрос
    }

    protected function getParams(){
        $params = require_once CONF . '/params.php';
        if(!empty($params)){
            foreach ($params as $k => $v){
                self::$app->setProperties($k,$v);
            }
        }
    }

}