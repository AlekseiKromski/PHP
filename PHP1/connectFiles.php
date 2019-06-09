<?php
	//Команды для подключения файлов
	require "Example.php"; // выдает ошибку, если не найден файл
	include "Example.php"; // не выдает ошибку, если нету файла
	require_once "Example.php"; // импортирует файл один раз
	include_once "Example.php"; // импортирует файл один раз
?>