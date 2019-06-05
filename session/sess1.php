<?php
/*
session_start();
$_SESSION['name'] = 'ANDREY';
echo $_SESSION['name'];
session_destroy();
*/
define('ADMIN','admin');
if(!empty($_POST['login'])){
	if($_POST['login'] === 'admin'){
		$_SESSION['admin'] = 'admin';
		header("Location: sess1.php");
		die;
	}else{
		echo "Вы не успешно авторизовались";
	}
}
?>
<ul>
	<li><a href="sess1.php">s1</a></li>
	<li><a href="sess2.php">s2</a></li>
	<li><a href="secret.php">sec</a></li>
</ul>

<form method="post" action="">
	<input type="text" name="login">
	<input type="submit" name="submit">
</form>