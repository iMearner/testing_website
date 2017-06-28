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
	 <form  action="retrive.php" method="post">
	 	<div class="login-credintial">
		 	Username : <input type="text" name="username"><br>
		 	Password : <input type="password" name="password"  style="margin-left:12px;"><br>
		 	<input type="submit" style="float:right; margin-right:50px;" value="login" name="submit">
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

		 <div class="dropdown">
		 	<button class="dropbtn">level</button>
		 	<div class="dropdown-content">
		 		<a href="#">low</a>
		 		<a href="#">medium</a>
		 		<a href="#">high</a>
		 		</div>
		 	</div>
	 </form>

	</body>
</html>
