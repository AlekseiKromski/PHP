<?php
error_reporting(-1);

require_once 'classes/Product.php';
require_once 'classes/I3D.php';
require_once 'classes/IGadget.php';
require_once 'classes/book.php';
require_once 'classes/notebook.php';
function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для {$product->getName()}</p>";
}
$book = new book('Witcher', 20,1000);
$notebook = new notebook('Acer',500,'i5-5000');
var_dump($notebook instanceof IGadget);
debug($book);
debug($notebook);

echo $book->getProduct();

class a{};
class b extends a{};
class c{};

$a = new a();
$b = new b();
$c = new c();

 // является ли а, объектом класса а
var_dump($b instanceof a);

offerCase($notebook);
//offerCase($book);