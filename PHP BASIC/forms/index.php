<?php
	if(isset($_POST['send'])){
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";		
			echo "<br>";
		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<form method="post" action="">
		<p>
			<input type="text" name="name">
			<br>
			<br>
			<textarea name="text"></textarea>
		</p>
		<p>
			<button type="submit" name="send">send</button>
		</p>
	</form>
	<hr>
	<?php
		if(isset($_POST['name'])){
			if($_POST['name'] == false){
				echo 'Введенное имя: не куказано' ;
			}else{
				echo 'Введенное имя: ' . $_POST['name'];
			}
			
		}else{
			echo "Форма не отправлена";
		}
		echo '<br>';
		echo nl2br($_POST['text']);// перевод строк 
	?>

</body>
</html>