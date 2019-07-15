<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app;

/**
 * Description of A
 *
 * @author ShinSais
 */
class A {
    protected const TEST = "Class a";
    
    public function getTest(){
        var_dump(self::TEST); //self - Работает с классом, где переменная объявлена
    }
    public function getTest2(){
        var_dump(static::TEST); // static - указывает на тот класс, в котором сейчас рабоатем 
    }
}
