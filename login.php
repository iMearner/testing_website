<html>
	<style type="text/css">
		body{
			background-color: #508D6C;
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
			background-color: #508D6C ;
		}
		.b : hover{
			background-color: white ;
		}
		.top-navigation {
			background-color: #333 ;
			overflow: hidden;
		}

		.top-navigation a {
		    float: left;
		    display: block;
		    color: #f2f2f2;
		    text-align: center;
		    padding: 14px 26px;
		    text-decoration: none;
		    font-size: 17px;
		}
		
		.top-navigation a:hover {
		    background-color: #ddd;
		    color: black;
		}

		.top-navigation a.active {
		    background-color: #4CAF50;
		    color: white;
		}
	</style>

	
	<body>
		<img src="header.png" style="width:100%; height:150px;	">
		<div class="top-navigation" id="navigation">
			<a href="#home">Home</a>
			<a href="#contact">Contact</a>
			<a href="#bblog">Blog</a>
		</div>
		<!-- creating a drop down menu using java script and little bit of css	 -->
		
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

		 <script>
		// 	function myFunction(){
		// 		document.getElementById('content').classList.toggle("show") ;
		// 	}
		// 	window.onclick = function(event) {
		// 		if(!event.target.matches('.dropdownbtn')){
		// 		var temp = document.getElementById('content')
		// 		temp.className = "dropdown-content";
		// 	}
		// 	}
			

		// </script>

	</body>
</html>
