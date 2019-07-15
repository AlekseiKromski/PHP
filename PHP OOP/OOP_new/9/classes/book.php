<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of book
 *
 * @author ShinSais
 */
class book extends Product{
    public $num_pages;
    
    public $public = 'public';
    private $private = 'private'; // Доступны только в классе 
    protected  $protected = 'protected'; // Доступны только в классе и его расширениях
    
    public function __construct($name, $price, $num_pages = null) {
        parent::__construct($name, $price);
        $this->num_pages = $num_pages;
        
    }   
    public function getProduct(){
        $out = parent::getProduct();
        $out .= "Кол-во страниц: $this->num_pages <br>";
        $out .= "Цена без скидки $this->price";
        return $out;   
    }
    public function getNum_pages() {
        $this->num_pages;
    }
}