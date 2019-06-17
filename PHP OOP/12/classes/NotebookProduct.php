<?php

class NotebookProduct extends product implements Igadget{
    
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
    public function addProduct($name, $price, $numPages = 0) {
        var_dump($name);
        var_dump($price);
        var_dump($numPages);
    }
    public function getName(){
        return $this->name;
    }
    public function getCase() {
        
    }
}
