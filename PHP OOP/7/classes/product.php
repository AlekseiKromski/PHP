<?php
class product{
    public $name;
    public $price;

    
    public function __construct($name,$price) {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function getCup(){
        return $this->cpu;
    }
    
    public function getProduct(){
        return $out = "<hr><p>О товаре</p><br>
                Название : {$this->name}<br>
                Цена : {$this->price}<br>";    
    }
    public function getPrice(){
        return $this->price;
    }
     
    public function getName(){
        return $this->name;
    }
}