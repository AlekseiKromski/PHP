<?php
//Задание:
/*
 *Написать класс, который будет взаимодействовать с файлом
 * Он будет записывать что-то в файл 
 * Материал - fwrite();
 *  */
class Car { //Не называть методы по имени класса
    public $nameFile;
    public $file;
    public function __construct($nameFile) {
        $this->nameFile = $nameFile;
        if($this->file = fopen("$this->nameFile","c+")){
            echo 'файл ('. $this->nameFile .') успешно открыт' . '<br>'; 
        }else{
            echo 'файл ('. $this->nameFile .') не удалось открыть' . '<br>';
            exit();
        }
    }
    public function writeToDoc($string){
        if(fwrite($this->file, $string)){
            echo 'файл ('. $this->nameFile .') успешно изменен' . '<br>';
        }else{
            echo 'файл ('. $this->nameFile .') не был успешно изменен' . '<br>';
        }
    }
    public function __destruct() {
        if(fclose($this->file)){
           echo 'файл ('. $this->nameFile .') успешно закрыт' . '<br>'; 
        }else{
            echo 'файл ('. $this->nameFile .') не удалось закрыт' . '<br>';
            exit();
        }
    }

    
    
    
}
