<?php
class book extends Product implements I3D{
    public $num_pages;
    const TEST = 20;

    public function test(){
        var_dump(self::TEST2);
    }
    
    public function __construct($name, $price, $num_pages = null) {
        parent::__construct($name, $price);
        $this->num_pages = $num_pages;
        var_dump(self::TEST);
        
    }   
    public function getProduct(){
        $out = parent::getProduct();
        $out .= "Цена без скидки $this->price <br>";
        $out .= "Кол-во страниц: $this->num_pages <br>";
        $out .= "Cкидка: {$this->getDiscount()}%<br>";
        return $out;   
    }
    public function getNum_pages() {
        $this->num_pages;
    }
    public function addProduct($name, $price,$num_pages) {
        var_dump($name);
        var_dump($price);
        var_dump($num_pages);
    }
    
}