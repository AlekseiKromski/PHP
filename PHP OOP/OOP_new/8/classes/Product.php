<?php
class Product{
    public $name;
    public $price;
    
    public function __construct($name, $price, $cpu = null, $num_pages = null) {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function getProduct(){
        return $out = "<hr><b>О товаре: </b><br>"
                . "Нименование: $this->name <br>"
                . "Цена: $this->price <br>";
    }
}