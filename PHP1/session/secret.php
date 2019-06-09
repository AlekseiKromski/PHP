<?php
session_start();
if(!isset($_SESSION['admin'])) die('not autor');
else{
	echo "hello";
}


?>


<ul>
	<li><a href="sess1.php">s1</a></li>
	<li><a href="sess2.php">s2</a></li>
	<li><a href="secret.php">sec</a></li>
</ul>