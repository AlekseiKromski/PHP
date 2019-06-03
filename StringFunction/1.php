<?php
	/*header('Content-Type: text/html; charset=utf-8');
	$str = 'Иванов Иван Ивановичь';
	$data = explode(' ',$str);
	print_r($data);
	echo "<br>";
	echo $data[''];

	$data = array('Иванов','Иван','Ивановичь');
	$str = implode(',',$data );
	echo $str;

	$str = "\n<p>Hellow</p>\n";
	$str .= "\n<p>world</p>\n"; // .= дописывается строка в переменной 
	echo trim($str);
	
	$str = '..... test,';
	echo $str;
	echo '<br>';
	echo trim($str, ',');
	
	$str = 'CHERNOBLY';
	echo $str;
	echo '<br>';
	echo md5($str);
	*/
	$str = "hello\nworld\n";
	echo nl2br($str);
?>