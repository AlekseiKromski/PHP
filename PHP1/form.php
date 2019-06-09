<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form name="test" method="get"> <!--пустая строка обозначает, что форма будет обрабатываться на это страничке-->
		<label>Имя: </label><br>
		<input type="text" name="name" placeholder="Name"><br>
		<label>E-mail: </label><br>
		<input type="text" name="email" placeholder="E-mail"><br>
		<label>Сообщение: </label><br>
		<textarea name="massage" cols="40" rows="10"></textarea><br>
		<input type="submit" name="Отправить">
	</form>
	<?php
		print_r($_GET);

	?>
</body>
</html>