<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$car1 = new Car('Black',4,120,'Audi',2000); //создаем экземпляр класса
$car2 = new Car('Red',3,350,'Volvo',2003); 

echo $car1->getCarInfo();
echo $car2->getCarInfo();



echo $car1->getLorem();

//echo $car1::$countCar;
echo $car1::getCount();