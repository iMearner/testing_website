
<html>
	<head><title>welcome </title></head>
	
	<body>
		<h1>welcome <?php echo $_POST["name"]; ?></h1>
		<h2><a href="logout.php">logout</a></h2>
		<?php
		// connecting with mysql
		include('config.php');
		if(isset($_POST['first_name'])){
			$first_name = $_post['first_name'] ;
		}
		if(isset($_POST['last_name'])){
			$last_name = $_post['last_name'] ;	
		}
		$query = "INSERT INTO mytable(first_name,last_name) VALUES('$first_name','$last_name');";
		if($conn,$query){
			echo "data updated . . " ;
		}else{
			echo "error occured" .mysqli_error() ;
		}
		
		?>
	</body>
</html>
