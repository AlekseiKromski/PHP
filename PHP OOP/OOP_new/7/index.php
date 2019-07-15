<?php
error_reporting(-1);

require_once 'classes/Product.php';

function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
$book = new Product('Witcher', 20,null,1000);
$notebook = new Product('Acer',500,'Intel i5');

debug($book);
debug($notebook);

echo $book->getProduct($type='book');
echo $notebook->getProduct();
