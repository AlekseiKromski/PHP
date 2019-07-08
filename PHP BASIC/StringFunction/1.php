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
	
	$str = "hello\nworld\n";
	echo nl2br($str);
	
	
	$str = '[i]Привет[/i], мое имя [b]Гриша из Растова[/b]';
	echo $str;
	echo "<br>";
	//$str = str_replace('[b]', '<b>', $str);
	//$str = str_replace('[/b]', '</b>', $str);
	$search = ['[i]','[/i]','[b]','[/b]'];
	$replace = ['<i>','</i>','<b>','</b>'];
	//$str = str_replace($search, $replace, $str); // с учетом регистра 
	$str = str_ireplace($search, $replace, $str); // без учета регистра
	echo $str;

	$str = '<i>Привет</i>, мое имя <b>Гриша из Растова</b><script>alert("xss")</script>';	
	echo strip_tags($str);
	//echo $str;

	$str = 'hellow';
	$str = 'Привет';
	echo mb_strlen($str);
	
	$str = 'Привет';
	echo mb_strpos($str, 'П');
	
	$str = 'Привет';
	$str2 = 'ПРИВЕТ';
	echo mb_strtoupper($str);
	echo "<br>";
	echo mb_strtolower($str2);
	
	$str = 'Привет!';
	echo mb_substr($str, 0, -1);
	*/
	$str = '<i>Привет</i>, мое имя <b>Гриша из Растова</b><script>';
	echo htmlspecialchars($str);
	//нужно для безопасности


