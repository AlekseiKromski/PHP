<?php
class car
{	
	//обласи видимости свойства класса ( модификаторы доступа )	
	// public
	// protected
	// private

	//свойства

	public $color;
	public $wheels;
	public $speed;
	public $brand;
	
	//$this - обращение к свойству класса в методе 
        
        public function __construct($color,$wheels,$speed,$brand) { //Функция, которая описана в классе  
            //echo __METHOD__ . '<br>'; //Выводин информацию метода
            //$color - значение, которое получила функция
            $this->color = $color; //получаем доступ к свойству объекта
            $this->wheels = $wheels;
            $this->speed = $speed;
            $this->brand = $brand;
        }


        public function getCarInfo(){
		return "<h3>Мое авто:</h3>
			Марка: {$this->brand}<br>
			Цвет: {$this->color} <br>
			Скорость: {$this->speed} <br>
			Год: {$this->year} <br>
			Коль-во колес: {$this->wheels} ";		
	}
        
        public function __destruct(){ 
            var_dump($this);
        }
        
}