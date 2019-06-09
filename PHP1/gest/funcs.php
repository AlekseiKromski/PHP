<?php
function save_mess(){
	$str = $_POST['name'] . '|' . $_POST['text'] . '|' . date('Y-m-d H:i:s') . "\n***\n";
	file_put_contents('gb.txt', $str, FILE_APPEND);
}
function get_mess(){
	return file_get_contents("gb.txt");
}
function array_mess($mess){
	$mess = explode("\n***\n", $mess);
	array_pop($mess);
	return array_reverse($mess);
}
function print_arr($arr){
	echo "<pre>" . print_r($arr, true). "</pre>";
}
function get_format_massege($mess){
	return explode('|', $mess);
}