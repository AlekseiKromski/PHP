<?php


namespace php;


trait TSingleton
{

    private static $instance;

    //Если свойство пусто, то мы создаем на основе этого класса, объект и вернем его
    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self;

        }
        return self::$instance;
    }


}