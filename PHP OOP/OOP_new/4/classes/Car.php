<?php
//Задание:
/*
 *Написать класс, который будет взаимодействовать с файлом
 * Он будет записывать что-то в файл 
 * Материал - fwrite();
 *  */
class Car { //Не называть методы по имени класса
    
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;
    public $year;

    
    //метод construct
    //Это метод, который запускаеться автоматически при создании объекта
    public function __construct($color, $wheels, $speed, $brand, $year) { //аргменты
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand; 
        $this->year = $year; 
    }

    
    //Модификатор доступа + определение свойства
    //var устаревший способ написания ООП кода 
    
    //создание метода класса
    //Модификатор доступа объявлять у метода, НЕ ОБЯЗАТЕЛЬНО (но рекомендуеться)
    //Чтобы обратиться к СВОЙСТВУ в МЕТОДЕ, нужно писать не объект ,а $THIS
    // покажи мне свойство BRAND объекта данного класса
    public function getCarInfo(){
        return "<h3> О моем авто </h3>
        Brand: {$this->brand}<br> 
        Color: {$this->color}<br> 
        Wheels: {$this->wheels}<br> 
        Year: {$this->year}<br> 
        Speed: {$this->speed}<br> ";
    }
    public function getLorem(){ //Разрывать тело класса для HTML МОЖНО!
        ?>
        <div>Hello, world!</div>
        <?php
    }
    
    //Этот метод срабатывает после удаления объекта из памяти
    public function __destruct() {
        var_dump($this);
    }
}
