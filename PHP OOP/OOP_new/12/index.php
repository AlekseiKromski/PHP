<?php
error_reporting(-1);

/*
require_once 'classes/Product.php';
require_once 'classes/I3D.php';
require_once 'classes/IGadget.php';
require_once 'classes/book.php';
require_once 'classes/notebook.php';
*/
/*
 * Когда класс не подключени, PHP ищет зарегестрированные автозагрузки и 
 * пытаеться подключить нехватающий класс
 */

use classes\book;
use classes\notebook;
use classes\Product;
use classes\interfaces\I3D;
use classes\interfaces\IGadget;

function autoloader($class){
    $class = str_replace("\\", "/", $class);
    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)){//Проверка файла на его существование
        require_once $file;
    }
}
spl_autoload_register('autoloader'); // Регестрируем функцию
function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для {$product->getName()}</p>";
}
$book = new book('Witcher', 20,1000);
$notebook = new classes\notebook('Acer',500,'i5-5000');
var_dump($notebook instanceof IGadget);
debug($book);
debug($notebook);

echo $book->getProduct();

offerCase($notebook);
//offerCase($book);