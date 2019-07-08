<?php
	//Функции для работы с массивами
/*
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
	$mas = array_keys($goods[0]); // Создаем список, в котором храниться все категории
	for($i = 0;$i <= count($goods); $i++){
		for($z=0;$z <= count($mas); $z++){
			echo $goods[$i][$mas[$z]] . '<br>';
		}
	}

*/
//Добовление нового значения в массив
//$mas[] = 'asd';



/*
//функции
//1 - count (подсчитывает количество элементов массива)
echo count($mas);
//подсчет всех значений в многомерном массиве
echo count($goods, 1);
*/

/*
//2 - array_diff - записывает элемент массива ,которого нету в других
//Сравнивает два массива и записывает в новый те элементы,  которых нету в одном из массивов
$a = array('red','blur','yellow','green', );
$b = array('blur','yellow','green', );
$result_a_b = array_diff($a,$b);
echo "<pre>";
print_r($result_a_b);
echo "</pre>";
*/

/*
//3 - array_intersect - противоложная функция array_diff
$a = array('red','blur','yellow','green', );
$b = array('blur','yellow','green', );
$result_a_b = array_intersect($a, $b);
echo "<pre>";
print_r($result_a_b);
echo "</pre>";
*/

/*
//4 - array_key_exists (проверяет наличе ключа или индекса)
$a = array('red','blur','yellow','green', );

if(array_key_exists(3,$a)){
	echo "yes";
	echo "<br>";
	echo "IS - " . " $a[3] ";
}else{
	echo "no";
}

*/
/*
//5 - array_keys ( Создаеться новый список с сущ. масиввами )

$result = array_keys($goods[0]);
echo "<pre>";
print_r($result);
echo "</pre>";
*/


//6 - array_values ( создаем список, в которой будет добавляться значения массива )

/*
//7 - array_merge ( объеденяет массивы в один )

$a = array('red1','red2','red3','color' => 'yellow',1,2);
$b = array('blue1','blue2','blue3','color' => 'red',2);
$result = array_merge($a, $b);
echo "<pre>";
print_r($result);
echo "</pre>";
*/

/*
//8 - array_rand ( Получает ранжлмный ключь массива )
$a = array('red1','red2','red3','color' => 'yellow',1,2);
$result = array_rand($a, 2); //выберает два рандомных ключа( при это создаеться массив )
print_r($result);
*/
/*
//9 - array_reverse ( возвращает массив в обратном порядке )
$a = array('red1','red2','red3','color' => 'yellow',1,2);
$result = array_reverse($a);
print_r($result);
*/

//10 - compact ( создает массив из перменных )

$state = 'Ida-Virumaa';
$city = 'KJ';
$event = 'war'; 

$result = compact('state','city','event');
echo "<pre>";
print_r($result);
echo "</pre>";



?>
