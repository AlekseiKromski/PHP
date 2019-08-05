<?php


namespace php;


class ErrorHandler
{

    public function __construct()
    {
        if(DEBUG){
            error_reporting(-1);
        }else{
            error_reporting(0);
        }
        // Назначяет для обработки исключений свою функцию
        set_exception_handler([$this, 'execeptionHendler']);
    }

    /*
     * Все исключения будут передаваться ввиде объекта $e
     * */
    public function execeptionHendler($e)
    {
        $this->logErrors($e->getMessage(),$e->getFile(),$e->getLine());
        $this->displayError('Исключение',$e->getMessage(),$e->getFile(),$e->getLine(), $e->getCode());
    }

    //Запись ошибок в лог файл
    protected function logErrors($message="", $file = "", $line = "")
    {
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл ошибки: {$file} | Строка ошибки: {$line} \n------------------------\n", 3,
            ROOT . '/tmp/Errors.log');
    }

    //Вывод ошибки
    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 404){
        http_response_code($responce);
        if($responce == 404 && !DEBUG){
            require WWW . '/errors/404/404.php';
            die;
        }
        if(DEBUG){
            require WWW . '/errors/dev/dev.php';
        }else{
            require WWW . '/errors/prod/prod.php';
        }
        die;
    }
}