<?php
namespace app;
use core\interfaces\I3D;
use core\Product;
class book extends Product implements I3D{
    public $num_pages;
    const TEST = 20;
    public $action1;
    public $action2;
    
    public function test(){

    }
    
    public function __construct($name, $price, $num_pages = null) {
        parent::__construct($name, $price);
        $this->num_pages = $num_pages;
        
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
    public function doAction1() {
        echo $this->action1 = '<p>Выполнили действие 1</p>';
        return $this;
        
    }
    public function doAction2() {
        echo $this->action2 = '<p>Выполнили действие 2</p>';
        return $this;
    }
    /*

     * Когда мы работаем с объектом, как со строкой, маг. метод
     * __toString выдает нужные строки
     *     
     *  */
    public function __toString(){ 
        return $this->getProduct();
    }
    
    public function __get($name) { //При образении к неопредленномк свойству
        var_dump($name);
    }
    public function __set($name,$value) {
        var_dump($name,$value);
    }
    
    
    
}