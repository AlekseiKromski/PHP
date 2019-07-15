<?php
class Product{
    public $name;
    protected $price;
    //3 Разным моидификатора доступа
    //public $public = 'public';
    //private $private = 'private'; // Доступны только в классе 
    //protected  $protected = 'protected'; // Доступны только в классе и его расширениях
    
    private      $discount = 10;
    

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
}