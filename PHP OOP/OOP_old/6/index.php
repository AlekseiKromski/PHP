<?php
require_once 'classes/car.php';


function debug($data){
	echo "<pre>" . print_r($data,1) . "</pre>";
}

echo 'Количество экземпляров объекта = ' . Car::$carCount;

$car1 = new car('Черный',"4","150",'BMW','2009');
$car2 = new car('Зеленый',"4","150",'BMW','2010');

echo $car1->getCarInfo();
echo $car2->getCarInfo();
// Вывод статического свойства класса
/*
 * ПАМЯТКА
 * Можно свызвать статическое свойство класса,
 * даже если нету экземпляра объекта
 *  - также можно обратиться к свойству класса или же к методу статического свойства
 * 
 */
echo "<br>";
echo "<br>";
//echo 'Количество экземпляров объекта = ' . Car::$carCount; // обращение к статическому свойству
echo 'Количество экземпляров объекта = ' . Car::getCount();// обращение к статическому методу 
echo "<br>";
echo "<br>";
//НЕ ЖИЛАТЕЛЬНО ДЛЯ ИСПОЛЬЗОВАНИЯ!!!
// $car1::test(); // вызов метода статическим способом, но метод не является статическим
echo "<br>";
echo "<br>";
echo $car1->GetProtoInfo();
echo "<br>";
echo "<br>";
echo Car::Test_car_speed;