<?php
class write{
    public $file_name = '1.txt';
    public $some_text;
    public $open; 


    public function __construct() {
        if(!$this->open = fopen($this->file_name, 'w')){
            echo 'Файл не может быть открыт';
        }
        
    }
    public function write_text(){
        if(fwrite($this->open, $this->some_text) == false){
            echo 'файл не был записан';
        }else{
            echo 'файл был записан';
        }
         
    }
    public function __destruct() {
        if(fclose($this->open) == false){
            echo '<br>';
            echo 'файл не закрылся';
        }else{
            echo '<br>';
            echo 'файл закрылся';
        }
    }
    
    
    
    
}