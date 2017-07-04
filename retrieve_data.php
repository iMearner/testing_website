<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	
	<body>
		<img src="header.png" style="width:100%; height:150px;	">
		<div class="top-navigation" id="navigation">
			<a href="login.php">Home</a>
			<a href="#contact">Contact</a>
			<a href="#bblog">Blog</a>
		</div>
	 <!-- now create login page that check admin is available in database  -->

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
					echo "sorry!..no user found...! <br><h1>you have to login to go further....</h1>" ;
				 ?>
				<style> 
					.login-test-list{
						display: none ;

					}
				</style>
				<?php }else{
					echo "<br>welcome <h1>" . $row["first_name"] . "</h1> " ;	
				 }				
			}	
		}
?>		
	 
	 
	 <div class="login-test-list">
	 	<link rel="stylesheet" type="text/css" href="style.css">
	 	<h1>some tests are lested below practice and enjoy...! </h1>
	 	<link rel="stylesheet" type="text/css" href="style.css">
		 		<a href="test-cases/injection.php">Injection</a>
		 		<a href="test-cases/xss.php">Cross Site Scripting(XSS)</a>
		 		<a href="test-cases/authentication_issues.php">Authentication and Session issues</a>
		 		<a href="test-cases/file-access-test.php">Arbitrary file access</a>
		 		<a href="test-cases/http-parameter-pollution.php">Http parameter pollution</a>
		 		<a href="test-cases/parameter-tempering.php">Parameter tempering</a>
		 	</div>
	</body>
</html>

		
<!-- 
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
	 -->


