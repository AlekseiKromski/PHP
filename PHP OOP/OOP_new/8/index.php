<?php
error_reporting(-1);

require_once 'classes/Product.php';
require_once 'classes/book.php';
require_once 'classes/notebook.php';

function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
$book = new book('Witcher', 20,1000);
$notebook = new notebook('Acer',500,'i5-5000');
$notebook2 = new notebook('Hp',600,'i7-4772K');

debug($book);
debug($notebook);

echo $book->getProduct();
echo $notebook->getProduct();
echo $notebook2->getProduct();