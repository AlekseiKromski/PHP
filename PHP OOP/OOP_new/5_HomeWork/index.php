<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
$str = 'test_net_ip ';
$str2 = 'test_net_ip2 ';

$input = new Car('1.txt');
$input->writeToDoc($str);