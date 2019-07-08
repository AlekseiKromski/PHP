<?php
	//цикл foreach нужен для того, чтобы переберать значения из массива

	//дз
	/*
	echo '<select>';

	for($i = 1980; $i <= 2016;$i++){
		echo '<option>'. $i .'</option>';
	}

	echo '</select>';
	*/
	/*
	$arr = array('Ivanov','Petrov','Sidorov' );
	foreach ($arr as $item ) {
		echo $item . "<br>";
	}
	*/
	$arr = array('Ivanov' => '1','Petrov'=> '1','Sidorov'=> '1' );
	foreach ($arr as $key => $name) {
			echo $name . "<br>";
			echo $key . "<br>";
		}	







?>