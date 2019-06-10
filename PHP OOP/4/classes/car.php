<?php
class car
{	
	//обласи видимости свойства класса ( модификаторы доступа )	
	// public
	// protected
	// private

	//свойства

	public $color;
	public $wheels = 4;
	public $speed = 120;
	public $brand;
	
	//$this - обращение к свойству класса в методе 

	public function getCarInfo(){
		return "<h3>Мое авто:</h3>
			Марка: {$this->brand}<br>
			Цвет: {$this->color} <br>
			Скорость: {$this->speed} <br>
			Год: {$this->year} <br>
			Коль-во колес: {$this->wheels} ";		
	}

	public function __construct($color,$wheels,$speed,$brand){
		$this -> color = $color;
		$this -> wheels = $wheels;
		$this -> speed = $speed;
		$this -> brand = $brand;

	}
}