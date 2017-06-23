<?php

	

		// connecting with mysql
		include('config.php');
		if(isset($_POST['insert_name'])){
			if(isset($_POST['first_name'])){
			$first_name = $_POST['first_name'] ;
			}
			if(isset($_POST['last_name'])){
				$last_name = $_POST['last_name'] ;	
			}
			$query = "INSERT INTO mytable(first_name,last_name) VALUES('$first_name','$last_name');";
			if(mysqli_query($conn,$query)){
				echo "data updated . . " ;
			}else{
				echo "error occured" .mysqli_error() ;
			}	
		}
		
		

	if (isset($_POST['check_name_submit'])) {
		if (isset($_POST['check_name'])) {
			$firstname = $_POST['check_name'];
			echo " " .$firstname ;
			$query = "SELECT first_name,last_name FROM mytable WHERE first_name='$check_name'  ;" ;
		}else{
			echo "error" . mysqli_error() ;
		}
		

		

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
	}
	

?>
