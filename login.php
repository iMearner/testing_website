<html>
	<style type="text/css">
		.dropdown-content{
			display: none ;
		}
		.show{
			display: block;
		}
		.dropdown-content a{
			color: black;

		}
	</style>

	<head>login page</head>
	<body>
		<h1>this form is to insert data in database </h1>
		<form action="welcome.php" method = "post">
			first name : <input type="text" name="first_name">
			last name : <input type="text" name = "last_name">
			<input type="submit" value = "submit">
		</form>
		<br>
		<br>
		<h1>this form is to check whether inserted name exist or not</h1>
		<form action="retrive.php" method = "post">
			first name : <input type="text" name="first_name">
			<input type="submit" value = "submit">
		</form>
<?php 

?>

		<br>
	<!-- creating a drop down menu using java script and little bit of css	 -->
		<div>
			<button onclick="myFunction()" class="dropdownbtn" >menu</button>
			<div class="dropdown-content" id="content">
				<a href="#home">home</a>
				<a href="#contact">contact</a>
				<a href="#bblog">blog</a>
			</div>
		</div>
		
		<script>
			function myFunction(){
				document.getElementById('content').classList.toggle("show") ;
			}

		</script>

	</body>
</html>
