<?php

class NotebookProduct extends product {
    
    public $cpu;
    
    public function __construct($name,$price,$cpu) {
        parent::__construct($name, $price); //Обратились к родительскому классу
        $this->cpu = $cpu;
    }

    public function getProduct() { // Переопределеям продукт
        $out = parent::getProduct();
        $out .= "Процессор {$this->cpu}<br>";
        return $out;
    }

    public function getCpu(){
        return $this->cpu;
    }
    
}
