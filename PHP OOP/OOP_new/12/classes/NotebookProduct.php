<?php

namespace classes;

use classes\interfaces\IGadget;

class NotebookProduct extends Product implements IGadget
{

    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getCase()
    {
        // TODO: Implement getCase() method.
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function addProduct($name, $price, $numPages = 0)
    {
        // TODO: Implement addProduct() method.
        var_dump($name);
        var_dump($price);
        var_dump($numPages);
    }

}