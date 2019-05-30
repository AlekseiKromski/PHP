<?php
	//Функции для работы с массивами
	$mas = array( 'title','price','description');
	$goods = [
		[
			'title' => 'Nokia',
			'price' => 100,
			'description' => 'Description'
		],
		[
			'title' => 'iPad',
			'price' => 200,
			'description' => 'Description'
		]
	];
/*
for($i = 0;$i <= count($goods); $i++){
	for($z=0;$z <= count($mas); $z++){
		echo $goods[$i][$mas[$z]] . '<br>';
	}
}


//Добовление нового значения в массив
$mas[] = 'asd';

*/

/*
//функции
//1 - count (подсчитывает количество элементов массива)
echo count($mas);
//подсчет всех значений в многомерном массиве
echo count($goods, 1);
*/

//2 - array_diff - записывает элемент массива ,которого нету в других
//Сравнивает два массива и записывает в новый те элементы,  которых нету в одном из массивов
$a = array('red','blur','yellow','green', );
$b = array('blur','yellow','green', );
$result_a_b = array_diff($a,$b);
echo "<pre>";
print_r($result_a_b);
echo "</pre>";

?>
