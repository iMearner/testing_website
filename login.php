
<html>

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
		<br>
		<p>to check database connection click <a href="config.php">here</a>.</p>
	</body>
</html>
