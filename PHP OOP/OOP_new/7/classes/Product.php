<?php
class Product{
    public $name;
    public $price;
    
    public $cpu;
    public $num_pages;
    
    public function __construct($name, $price, $cpu = null, $num_pages = null) {
        $this->name = $name;
        $this->price = $price;
        $this->cpu = $cpu;
        $this->num_pages = $num_pages;
    }
    
    public function getCpu(){
        return $this->cpu;
    }
    
    public function getNum_pages(){
        return $this->num_pages;
    }
    
    public function getProduct($type = 'notebook'){
        $out = "<hr><b>О товаре: </b><br>"
                . "Нименование: $this->name <br>"
                . "Цена: $this->price <br>";
        if($type == 'notebook'){
            $out .= "Процессор $this->cpu <br>";
        }else{
            $out .= "Количество страниц: $this->num_pages <br>";
        }
        return $out;
    }
}