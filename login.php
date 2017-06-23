<html>
	<style type="text/css">
		body{
			background-color: #50074C;
		}
		.dropdown-content{
			display: none ;
		}
		.show{
			display: block;
		}
		.b{
			display: inline-block;
			float: left;
			color: black;
			text-decoration: none;
			background-color: #50004C ;
		}
		.b : hover{
			background-color: white ;
		}
		
	</style>

	<head>login page</head>
	<body>
		<!-- creating a drop down menu using java script and little bit of css	 -->
		<div style="float:right;">
			<button onclick="myFunction()" class="dropdownbtn"  >menu</button>
			<div class="dropdown-content" id="content">
				<a class="b" href="#home">home</a>
				<br>
				<a class="b" href="#contact">contact</a>
				<br>
				<a class="b" href="#bblog">blog</a>
			</div>
		</div>
		<h1>this form is to insert data in database </h1>
		<form action="retrive.php" method = "post" >
			first name : <input type="text" name="first_name">
			last name : <input type="text" name = "last_name">
			<input type="submit" value = "submit" name="insert_name">
		
		<br>
		<br>
		<h1>this form is to check whether inserted name exist or not</h1>
				check name : <input type="text" name="check_name">
			<input type="submit" value = "submit_check" name="check_name_submit">
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
