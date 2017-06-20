<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_NAME','mydatabase');
	//checking for connection 
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("connection failed");
	if($db){
		echo " " ;
	}else{
		echo "error ";
	}
?>
