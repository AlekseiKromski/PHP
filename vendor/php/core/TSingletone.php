<?php


namespace php;


//Трейт нужен для того, чтобы наисать часть кода один раз и в дальнейшем использовать его под копирку
trait TSingletone
{

    //Свойство для хранения объекта
    private static $instance;


    //Если свойство пустое, то в свойство $instance создается объект
    public static function instance()
    {
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}