<?php 
	include('config.php');

	$firstname = $_POST['first_name'];
	

	$query = "SELECT first_name,last_name FROM mytable WHERE first_name='$firstname'  ;" ;

	$retval = mysqli_query($conn,$query);
	if(!$retval){
		die("could not get data" . mysql_error() );
	}
	if (mysqli_num_rows($retval) == 0) {
		echo "<br> no data found <br>" ;
	}
	else{
		while($row = mysqli_fetch_assoc($retval)){
		echo " <br>Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
		}
	}

?>
