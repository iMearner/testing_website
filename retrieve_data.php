<?php 
	include('config.php');

	$query = 'SELECT first_name,last_name FROM mytable ;' ;

	$retval = mysqli_query($conn,$query);
	if(!$retval){
		die("could not get data" . mysql_error() );
	}

	while($row = mysqli_fetch_assoc($retval)){
		echo " <br>Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
	}

	echo "fetch data successfully  .. ." ;

?>
