<?php
require_once 'classes/product.php';
require_once 'classes/I3D.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';
require_once 'classes/Igadget.php';
error_reporting(-1); //включаем ошибки

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}
function offerCase($product){
    echo "<p>Чехол для гаджета " . $product->getName() . " </p>";
}

$book = new BookProduct('Ведьмак', '20','1000');
$notebook = new NotebookProduct('dell','100','intl');
var_dump($notebook instanceof NotebookProduct);



debug($book);
echo $book->getProduct();

class A{};
class B extends A{};
class C{};
    
$a = new A;
$b = new B;
$c = new C;

var_dump($a instanceof A);
var_dump($b instanceof B);
var_dump($c instanceof C);
echo '<hr>';
offerCase($notebook);
offerCase($book);