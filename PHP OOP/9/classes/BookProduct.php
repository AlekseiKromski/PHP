 <?php

class BookProduct extends product {
    
    public $numPages;
    
    public function __construct($name,$price,$numPages) {
        parent::__construct($name, $price); //Обратились к родительскому классу
        $this->numPages = $numPages;
    }

    public function getProduct() { // Переопределеям продукт
        $out = parent::getProduct();
        $out .= "Коль-во страниц : {$this->numPages}<br>";
        $out .= "Цена без скидки : {$this->price}<br>";
        return $out;
    }

    public function getNumPages(){
        return $this->numPages;
    }
    
}
