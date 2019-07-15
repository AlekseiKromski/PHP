<?php
error_reporting(-1);

require_once 'classes/Product.php';
require_once 'classes/book.php';
require_once 'classes/I3D.php';
function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
$book = new book('Witcher', 20,1000);

debug($book);

echo $book->getProduct();

$book->addProduct('test', 10, 1000);
$book->test();
