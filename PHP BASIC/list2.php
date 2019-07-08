<?php
	$array = array(array(12,9,5,8),array('example',1,3),array('example0','example1','example2',));

	echo $array[0][2];

	for($i = 0; $i <= count($array); $i++){
		for($z = 0; $z <= count($array[$i]); $z++){
			echo $array[$i][$z] . "<br>";
		}
	}
?>