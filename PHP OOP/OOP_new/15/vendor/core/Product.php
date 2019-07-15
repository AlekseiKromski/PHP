<?php
namespace core;
abstract class Product{
    public $name;
    protected $price;
    private $discount = 10;
    
    const TEST = 10;

    public function __construct($name, $price, $cpu = null, $num_pages = null) {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getPrice(){
        return $this->price - ($this->discount / 100 * $this->price);
    }
    
    public function getProduct(){
        return $out = "<hr><b>О товаре: </b><br>"
                . "Нименование: $this->name <br>"
                . "Цена со скидкой: {$this->getPrice()} <br>";
    }
    public function getDiscount(){
        return $this->discount;
    }
    public function setDiscount(){
        $this->discount = $discount;
    }
    // Абстрактные классы нужны для того, чтобы мы не могли создать от них экземпляра
    // *Класс должен быть абстрактным, если там есть хоть один абстрактный метод
    abstract protected function addProduct($name, $price,$num_pages);
}