<?php
class Car {
    
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;
    
    //Модификатор доступа + определение свойства
    //var устаревший способ написания ООП кода 
    
    //создание метода класса
    //Модификатор доступа объявлять у метода, НЕ ОБЯЗАТЕЛЬНО (но рекомендуеться)
    //Чтобы обратиться к СВОЙСТВУ в МЕТОДЕ, нужно писать не объект ,а $THIS
    //РАСШИФРОВКА: покажи мне свойство BRAND объекта данного класса
    public function getCarInfo(){
        return "<h3> О моем авто </h3>
        Brand: {$this->brand}<br> 
        Color: {$this->color}<br> 
        Wheels: {$this->wheels}<br> 
        Year: {$this->year}<br> 
        Speed: {$this->speed}<br> ";
    }
}
