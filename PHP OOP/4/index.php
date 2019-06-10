<?php
require_once 'classes/car.php';


function debug($data){
	echo "<pre>" . print_r($data,1) . "</pre>";
}

$car1 = new car("Черный",4,180,'BMW');

echo $car1->getCarInfo();