<?php

	

		// connecting with mysql
		include('config.php');
		
		if(isset($_POST['submit'])){
			if(isset($_POST['username'])){
			$username = $_POST['username'] ;
			}
			if(isset($_POST['password'])){
				$password = $_POST['password'] ;	
			}
			$query = "SELECT first_name FROM mytable WHERE first_name='$username' AND last_name='$password' ;";
			$retval = mysqli_query($conn,$query) ;
			if(!$retval){
				echo "no user exist....!" ;
			}			
			else{
				$row = mysqli_fetch_assoc($retval) ;
				if(count($row)==0){
					echo "sorry!..no user found...!" ;
				}
				else{
					echo "<br>welcome <h1>" . $row["first_name"] . "</h1> " ;	
				}				
			}	
		}
		
		

	// if (isset($_POST['check_name_submit'])) {
	// 	if (isset($_POST['check_name'])) {
	// 		$firstname = $_POST['check_name'];
	// 		echo " " .$firstname ;
	// 		$query = "SELECT first_name,last_name FROM mytable WHERE first_name='$firstname'  ;" ;
	// 	}else{
	// 		echo "error" . mysqli_error() ;
	// 	}
		

		

	// 	$retval = mysqli_query($conn,$query);
	// 	if(!$retval){
	// 		die("could not get data" . mysql_error() );
	// 	}
	// 	if (mysqli_num_rows($retval) == 0) {
	// 		echo "<br> no data found <br>" ;
	// 	}
	// 	else{
	// 		while($row = mysqli_fetch_assoc($retval)){
	// 		echo " <br>Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
				
	// 		}
	// 	}
	// }
	

?>
