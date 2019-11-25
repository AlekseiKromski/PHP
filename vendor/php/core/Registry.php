<?php


namespace php;


class Registry
{
    use TSingletone;

    protected static $properties = [];

    public static function getProperties($name)
    {
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    public static function setProperties($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getPropertiesAll(){
        return self::$properties;
    }



}