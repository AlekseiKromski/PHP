<?php


namespace php;


class App
{

    public static $app; //контейнер для приложения (разные параметры можно вложить)

    public function __construct()
    {
        session_start();
        echo $query = trim($_SERVER['QUERY_STRING'], '/');
        self::$app = Registry::instance(); //Хранение всех необхадимых параметров
        $this->getParams(); //заполняем контейнер данными

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