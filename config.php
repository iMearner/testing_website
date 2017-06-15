<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_NAME','mydatabase');
	//checking for connection 
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("connection failed");
	if($db){
		echo "connected.... !";
	}else{
		echo "error ";
	}
	// creating a rendom query
	$query = "INSERT INTO mytable(first_name,last_name) VALUES ('abc','sharma');"
	if(mysqli_query($db,$query)){
		echo "data updated successfully . ." ;
	}else{
		echo "there is a problem while insertion of data. "
	}
?>
