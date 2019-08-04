<?php


namespace php;

/*
 *
 * */
class App
{

    public static $app; //Свойство класса, в котором будут храниться какие-то параметры приложения

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING']);
        session_start();
        self::$app = Registry::instance(); //Теперь свойство $app хранит в себе объект реестра
        $this->getParamas(); //Вызываем метод, который перенесет массив значений из файла конфиг. в свойсвто $params в классе Registry
    }

    protected function getParamas()
    {
       $params = require_once CONF . '/params.php';
       if(!empty($params)){
           foreach($params as $k => $v){
               self::$app->setProperty($k, $v);
           }
       }
    }
}