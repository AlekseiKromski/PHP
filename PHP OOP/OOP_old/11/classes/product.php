<?php
abstract class product{
    public $name;
    protected $price;  
    private $discount = 0;
   
    public function __construct($name,$price) {
        $this->name = $name;
        $this->price = $price;
        $this->setDiscount(5);
    }
    
    public function getCup(){
        return $this->cpu;
    }
    
    public function getProduct(){
        return $out = "<hr><p>О товаре</p><br>
                Название : {$this->name}<br>
                Цена : {$this->getPrice()}<br>";    
    }
    public function getPrice(){
        return $this->price - ($this->discount / 100 * $this->price);
    }
     
    public function getName(){
        return $this->name;
    }
    
    public function setDiscount(int $discount){
        $this->discount = $discount;
    }
    
    abstract protected function addProduct($name, $price);
}