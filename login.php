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
		<!-- creating a drop down menu using java script and little bit of css	 -->
		<div style="float:right;">
			<button onclick="myFunction()" class="dropdownbtn" >menu</button>
			<div class="dropdown-content" id="content">
				<a href="#home">home</a>
				<a href="#contact">contact</a>
				<a href="#bblog">blog</a>
			</div>
		</div>
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
	
		
		<script>
			function myFunction(){
				document.getElementById('content').classList.toggle("show") ;
			}
			window.onclick = function(event) {
				if(!event.target.matches('.dropdownbtn')){
				var temp = document.getElementById('content')
				temp.className = "dropdown-content";
			}
			}
			

		</script>

	</body>
</html>
