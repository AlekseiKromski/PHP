 <?php

class BookProduct extends product implements I3D {
    
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
    
    public function addProduct($name, $price, $numPages = 0) {
        var_dump($name);
        var_dump($price);
        var_dump($numPages);
    }
    
    public function test() {
        var_dump(self::TEST2);
    }
}
