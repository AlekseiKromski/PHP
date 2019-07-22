<?php


namespace php;


class App
{

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/'); // Обризает концевой слеш
        session_start();
        self::$app = Registry::instance();
    }

}