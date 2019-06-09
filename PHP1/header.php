<?php
	header('Content-Type: text/html; charset=utf-8');
	//header('Location: index.php ');
	//header('refresh: 5; url=index.php');
	//header('HTTP/1.0 404 Not Found')
	header('Content-Type: text/plain');
	header('Content-Disposition: attachment; filename="down.txt"');
	readfile('text.txt')
?>
sd