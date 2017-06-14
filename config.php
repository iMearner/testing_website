<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die("connection failed");
?>
