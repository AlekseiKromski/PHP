<?php
class File{


	public $fp; // указатель на открытый файл
	public $file; // путь к файлу 

	public function __construct($file){
		$this -> file = $file;
		if (!is_writable($file)){
			echo "Файл $file не доступен для записи";
		}
		$this -> fp = fopen($file,'a');
	}

	public function __destruct(){
		fclose($this->fp);
	}

	public function write($text){
		if(fwrite($this->fp, $text) === flase){
			echo "Не могу произвести запись файла";
			exit;
		}
	}


}