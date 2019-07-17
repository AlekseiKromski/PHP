<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ishop;

/**
 * Description of ErrorHandler
 *
 * @author ShinSais
 */
class ErrorHandler {
    public function __construct() {
        if(DEBUG){
            error_reporting(-1);
        }else{
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);// Задает пользовательский обработчик исключений
    }
    
    public function exceptionHandler($e){
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(),$e->getCode() );
    }
    protected function logErrors($message = '',$file = '', $line = ''){
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки:"
                . " $message | Файл: $file | Строка: $line \n--------------\n", 3,ROOT . '/tmp/errors.log' );
        
    }
    protected function displayError($errno , $errstr, $file, $line, $responce = '404' ){
        http_response_code($responce);
        if($responce == 404 && !DEBUG){
            require WWW . '/errors/404.php' ;
            die;
        }
        if(DEBUG){
            require WWW . '/errors/dev.php' ;
        }else{
            require WWW . '/errors/prod.php' ;
        }
        
        
    }
}
