<?php


namespace php;


/*
 * Класс Реестру нужен для хранения основны и нетолько настроек для проекта
 * В любой момоент можно получить желаемый параметр из настроек
 * */
class Registry
{

    use TSingletone;

    //Свойство для складирования и хранения всех свойст
    public static $properties = [];

    //В этом методе мы обращаемся к свойству $properties и записываем туда значение по определенному ключу
    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    /*
     * Проверяем, существует ли значение по таком ключу, в случае удачи, возвращаем из массива значение по ключу $name
     * В случае того, что такого ключа нету, метод вернет null
     * */
    public function getProperty($name)
    {
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    //Возвращает все значения
    public function getProperties()
    {
        return self::$properties;
    }
}