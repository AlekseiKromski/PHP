<?php
require_once 'classes/car.php';


function debug($data){
	echo "<pre>" . print_r($data,1) . "</pre>";
}

$car1 = new car();

//debug($car1);

//Обращение к свойству объекта
$car1 -> color = "Черный"; 
$car1 -> brand = 'Volvo';
$car1 -> year = '2018';
//debug($car1);


$car2 = new car();

$car2 -> color = "Белый"; 
$car2 -> brand = 'BMW';
$car2 -> year = '2019';

//debug($car2);

echo "<h1>Мое авто:<h1>
Марка: {$car1->brand}<br>
Цвет: {$car1->color} <br>
Скорость: {$car1->speed} <br>
Год: {$car1->year} <br>
Коль-во колес: {$car1->wheels} ";