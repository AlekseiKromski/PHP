<?php
class product{
    public $name;
    public $price;
    
    public $cpu;
    public $numPages;
    
    public function __construct($name,$price,$cpu = null,$numPages = null) {
        $this->name = $name;
        $this->price = $price;
        $this->cpu = $cpu;
        $this->numPages = $numPages;
    }
    
    public function getCup(){
        return $this->cpu;
    }
    
    public function getProduct($type = 'notebook'){
        $out = "<hr><p>О товаре</p><br>
                Название : {$this->name}<br>
                Цена : {$this->price}<br>";
        if($type == 'notebook'){
            $out .= "CPU : {$this->cpu}<br>"; 
        }else{
            $out .= "Коль-во. строниц : {$this->numPages}<br>"; 
        }
        return $out;    
        
        
    }
}