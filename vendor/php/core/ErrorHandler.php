<?php


namespace php;


class ErrorHandler
{
        /*
         * Проверяет состояние константы DEBUG в файле init.php
         * 1 - True
         * 0 - False
         * -----------------------------------------------------
         * Устанавливаеться функция обработки ошибок
         * */
        public function __construct()
        {
            if(DEBUG){
                error_reporting(-1);
            }else {
                error_reporting(0);
            }
            //Устанавливаеться функция обработки ошибок
            set_exception_handler([$this, 'exceptionHandler']);
        }

        //Обработка перехваченных исключений
        public function exceptionHandler($e){
            //Записываем ошибку в log файл
            $this->logError($e->getMessage(),$e->getFile(),$e->getLine());
            $this->displayError('Исключение',$e->getMessage(),$e->getFile(),$e->getLine(),$e->getCode());

        }

        /*
         * Функция , которая запиывает в файл лога ошибки
         * */
        protected function logError($message="",$file="",$line=""){
            error_log("[" . date('Y-m-d H:i:s') . "] Текст: {$message} | Файл: {$file} | Строка: {$line}\n-----------------------------\n",3, ROOT . "/tmp/error.log");
        }

        /*
         * Подключает правельный вид ошибок
         * */
        protected function displayError($error_id,$error_str,$error_file,$error_line, $responce = 404){
            http_response_code($responce);//Отправляем заголовок
            //Если 404 код ошибки и выключена отладка
            /*
             * Можно использовать не только 404 ошибку, но и прописать другие 
             * */
            if($responce == 404 && !DEBUG){
                require_once WWW . "/errors/404.php";
                die;
            }
            //Если режим отладки включен
            if(DEBUG){
                require_once WWW . "/errors/dev.php";

            }else{
                require_once WWW . "/errors/prod.php";
            }
            die;
        }
}