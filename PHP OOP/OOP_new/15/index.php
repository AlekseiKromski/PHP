<?php
error_reporting(-1);


/*
 * Когда класс не подключени, PHP ищет зарегестрированные автозагрузки и 
 * пытаеться подключить нехватающий класс
 */

use app\{book, notebook};
use core\interfaces\IGadget;

require_once __DIR__ . "/vendor/autoload.php";
/*
function autoloader($class){
    $class = str_replace("\\", "/", $class);
    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)){//Проверка файла на его существование
        require_once $file;
    }
}
spl_autoload_register('autoloader'); // Регестрируем функцию
 */
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
//debug($book);
//debug($notebook);
//$mail = new PHPMailer\PHPMailer\PHPMailer();
//debug($mail);

$a = new \app\A();
$b = new \app\B();

$a->getTest();
$b->getTest();
$b->getTest2();

$book->doAction1()->doAction2();

debug($book);