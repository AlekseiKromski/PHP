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
        public $year;
	public static $carCount = 0;
        
        const Test_car = 'Прототип';
        const Test_car_speed = 300;

        //$this - обращение к свойству класса в методе 
        
        public function __construct($color,$wheels,$speed,$brand,$year) { //Функция, которая описана в классе  
            //echo __METHOD__ . '<br>'; //Выводин информацию метода
            //$color - значение, которое получила функция
            // эти свойства пренадлежат объекту 
            $this->color = $color; //получаем доступ к свойству объекта
            $this->wheels = $wheels;
            $this->speed = $speed;
            $this->brand = $brand;
            $this->year= $year;
            // эти свойства принадлежат классу
            //КОП - классо ориентированное программирование 
            self::$carCount++;
        }


        public function getCarInfo(){
		return "<h3>Мое авто:</h3>
			Марка: {$this->brand}<br>
			Цвет: {$this->color} <br>
			Скорость: {$this->speed} <br>
			Год: {$this->year} <br>
			Коль-во колес: {$this->wheels} ";		
	}
        public static function getCount(){
           return self::$carCount;
           
        }
        public function test(){
            echo 'hellow';
            
        }
        public function GetProtoInfo(){
            return "<h3>Данные тестового авто: </h3>
			имя : " . self::Test_car . "<br>
                        Скорость : " . self::Test_car_speed . "<br>";
        }
}