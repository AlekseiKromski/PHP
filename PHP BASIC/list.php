<?php 

	//Массивы

	$array = array(1,2.5,'astring','false');//Первый элемент является нулевым
	//echo "$array[1]"; // 0 - индекс элемента
	$array[] = 'New Element'; //Добовляем новый элемент

	for ($i = 0; $i <= count($array); $i++ ){ //count - подсчитывает количество элементов массива
		echo $array[$i] . '<br>';
	}

	//ассоциативные массивы

	$list = array('age' => 12,'name' => 'alex','schoolBoy' => True ); // Ставим ключи к переменным
	$list['age'] = 13;

	echo getAvarge(array ('age' => 12,'name' => 13,'schoolBoy' => 16) );

	$summa = 0;
	function getAvarge ($massiv){
		foreach ($massiv as $key => $value){//Цикл только для ассоциативных массивов
			$summa += $value;
		}
		return $summa / count($massiv);
	}


?>