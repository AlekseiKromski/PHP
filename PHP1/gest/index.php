<?php
require_once 'funcs.php';
if(!empty($_POST)){
	save_mess();
	header('Location:index.php');
	die;
}
	
$mess = get_mess();
$mess = array_mess($mess);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Гостевая книга</title>
</head>
<body>
	<form action="" method="post">
		<p>
			<label for="name">Имя: </label><br>
			<input type="text" name="name" id="name">
		</p>
		<p>
			<label for="text">Текст: </label><br>
			<textarea name="text" id="text"></textarea>
		</p>
		<button type="submit">Написать</button>
	</form>

	<hr>

	<?php if(!empty($mess)): ?>
		<?php foreach($mess as $mess): ?>
			<?php $mess = get_format_massege($mess); ?>
			<p>
				Автор- <?php echo $mess[0]; ?> | Дата- <?php echo $mess[2]; ?>
			</p>
			<div>
				<p>
					<?php echo nl2br(htmlspecialchars($mess[1])); ?>
				</p>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>




</body>
</html>