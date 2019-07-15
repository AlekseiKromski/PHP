<?php
error_reporting(-1);

require_once 'classes/Product.php';
require_once 'classes/book.php';

function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
$book = new book('Witcher', 20,1000);

debug($book);

echo $book->getProduct();

//var_dump($book->public);
//var_dump($book->private);
//var_dump($book->protected);