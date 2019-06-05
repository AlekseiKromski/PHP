<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="send">
</form>


<?php
	echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";
	move_uploaded_file($_FILES['file']['tmp_name'], 'tmp/' . $_FILES['file']['name']); // загрузка картинки
	
?>