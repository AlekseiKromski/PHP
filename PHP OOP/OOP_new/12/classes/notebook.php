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
namespace classes;
use classes\interfaces\IGadget;
class notebook extends Product implements IGadget {//extends - расширять (нужен для наследственности)
    
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
    public function addProduct($name, $price,$num_pages) {
        var_dump($name);
        var_dump($price);
        var_dump($num_pages);
    }
    public function getCase(){
        
    }
}
