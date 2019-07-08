<?php
copy('test.txt', 'test/1.txt');
//проверка на сущесвование файла
if(file_exists('test/1.txt')) {
	echo "файл существует";
}else
{
	echo "Такого файла нету";
}
