<html>
	<style type="text/css">
		body{
			background-color: #508D6C;
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
			float: left;
		}
		.login-credintial input{
			margin: 10px;
			border-radius: 5px;
		}
		.dropdown{
			float: right;
			margin-top: 100px;
			margin-right: 150px;
			background-color: blue;
		}
		.dropbtn{
			padding: 10px;
			background-color: green;
			border: none;
			color: white;
		}
		.dropdown:hover .dropdown-content{
			display: block;
		}
		.dropdown-content{
			display: none;
		    position: absolute;
		    background-color: #f9f9f9;
		    color: black;
		    min-width: 80px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}
		.dropdown-content a {
			display: block;
			text-decoration: none;
			color: black;
		}
		.dropdown-content a:hover{
			background-color: #505050;
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
	 <form  method="post">
	 	<div class="login-credintial">
		 	Username : <input type="text" name="uername"><br>
		 	Password : <input type="password" name="password"  style="margin-left:12px;"><br>
		 	<input type="submit" style="float:right; margin-right:50px;">
		 </div>

		 <div class="dropdown">
		 	<button class="dropbtn">test menu</button>
		 	<div class="dropdown-content">
		 		<a href="#">test type 1</a>
		 		<a href="#">test type 2</a>
		 		<a href="#">test type 3</a>
		 		<a href="#">test type 4</a>
		 		<a href="#">test type 5</a>
		 		<a href="#">test type 6</a>
		 		<a href="#">test type 7</a>
		 	</div>
		 </div>
	 </form>
</body>
</html>
