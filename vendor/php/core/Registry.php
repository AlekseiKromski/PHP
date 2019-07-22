<?php


namespace php;


class Registry
{
    use TSingleton;

    public static $properties = [];

    //Заполняет значениями массив
    public static function setProperty($name, $value){
        self::$properties[$name] = $value;
    }

    //
    public function getProperty($name){
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties(){
        return self::$properties;
    }

}