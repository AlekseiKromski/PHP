<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ishop;

/**
 * Description of Registry
 *
 * @author ShinSais
 */
class Registry {
    
    use TSingleton;
    
    protected static $properties = []; // Список для складывания всех свойст объекта
    
    public function setProperty($name, $value){
        self::$properties[$name] = $value;
    }
    
    public function getProperty($name){ // Возвращает массив свойств, если они существуют
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }
    
    public function getProperties(){ //Возвращяет список всех возможных свойств
        return self::$properties;
    }
    
    
}
