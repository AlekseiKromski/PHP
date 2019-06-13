<?php
require_once 'classes/product.php';
error_reporting(-1); //включаем ошибки

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new product('Ведьмак', '20',null,"1000");
$notebook = new product('Dell', '100','Intel',null);

debug($book);
debug($notebook);

echo $book->getProduct($type = 'book');
echo $notebook->getProduct();