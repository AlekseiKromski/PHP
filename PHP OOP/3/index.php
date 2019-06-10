<?php
require_once 'classes/car.php';


function debug($data){
	echo "<pre>" . print_r($data,1) . "</pre>";
}

$car1 = new car();

$car1 -> color = "Черный"; 
$car1 -> brand = 'Volvo';
$car1 -> year = '2018';

echo $car1->getCarInfo();