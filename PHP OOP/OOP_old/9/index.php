<?php
require_once 'classes/product.php';
//require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';
error_reporting(-1); //включаем ошибки

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct('Ведьмак', '20','1000');
//$notebook = new NotebookProduct('Dell', '100','Intel');
//$notebook2 = new NotebookProduct('Acer', '156','AMD RX 3770x');

debug($book);
//debug($notebook);

echo $book->getProduct();
//var_dump($book -> public);
//var_dump($book -> protected);
//var_dump($book -> private);
