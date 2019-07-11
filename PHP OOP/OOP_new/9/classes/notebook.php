<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of notebook
 *
 * @author ShinSais
 */
class notebook extends Product {//extends - расширять (нужен для наследственности)
    
    public $cpu;
    
    public function __construct($name, $price, $cpu = null ) {
        parent::__construct($name, $price); //Обратились к родительскому классу
        $this->cpu = $cpu;
    }
    
    public function getCpu() {
        return $this->cpu;
    }
    
    public function getProduct(){
        $out = parent::getProduct();
        $out .= "Процессор: $this->cpu";
        return $out;
    }
}
