<?php
require_once 'classes/product.php';
require_once 'classes/I3D.php';
//require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';
error_reporting(-1); //включаем ошибки

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}
$book = new BookProduct('Ведьмак', '20','1000');
debug($book);
echo $book->getProduct();
echo '<hr>';
//$book ->addProduct('Test', '10');
$book ->test();