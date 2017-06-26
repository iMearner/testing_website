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
		.login-credintial {
			margin: 100px ;
			width: 300px;
		}
		.login-credintial input{
			margin: 10px;
			border-radius: 5px;
		}
	</style>

	
	<body>
		<img src="header.png" style="width:100%; height:150px;	">
		<div class="top-navigation" id="navigation">
			<a href="login.php">Home</a>
			<a href="#contact">Contact</a>
			<a href="#bblog">Blog</a>
		</div>
	 <!-- now create login page that check admin is available in database  -->

	 <div class="login-credintial">
	 	Username : <input type="text" name="uername"><br>
	 	Password : <input type="password" name="password"  style="margin-left:12px;"><br>
	 	<input type="submit" style="float:right; margin-right:50px;">
	 </div>

		
	


	</body>
</html>
