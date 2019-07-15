<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$car1 = new Car(); //создаем экземпляр класса
$car2 = new Car(); 

$car1->color = 'Black'; // получаем доступ к свойству
$car1->brand = 'Audi';
$car1->speed = 200;
$car1->year = 2003; // Создание свойства, которое не было заранее записанно в класс

$car2->color = 'Red'; // получаем доступ к свойству
$car2->brand = 'Volvo';
$car2->speed = 350;
$car2->year = 2008; // Создание свойства, которое не было заранее записанно в класс

//debug($car1);
//debug($car2);

//Обращение к методу
echo $car1->getCarInfo();
echo $car2->getCarInfo();