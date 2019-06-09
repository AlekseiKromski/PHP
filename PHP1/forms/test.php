<?php
	/*
	if($_POST != false){
		print_r($_POST);
		echo "<br>";
		print_r($_GET);
		echo "<br>";	
	}
	
	if(!empty($_POST)){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";		
		echo "<br>";		
	}
	*/
	if(isset($_POST['send'])){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";		
		echo "<br>";
	}
?>
<a href="index.php">back</a>