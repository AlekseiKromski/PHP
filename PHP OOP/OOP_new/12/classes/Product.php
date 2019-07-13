<?php

namespace classes;

abstract class Product
{

    private $name;
    protected $price;

    private $discount = 0;

    const TEST = 10;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct()
    {
        return "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена со скидкой: {$this->getPrice()}<br>";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount(int $discount)
    {
        $this->discount = $discount;
    }

    abstract protected function addProduct($name, $price);

}