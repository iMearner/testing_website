<?php
	include("cofig.php");
	session_start();

	if(_SERVER["REQUEST_METHOD"] == "POST"){
		//USERNAME AND PASSWORD SENT FROM FORM
		$myusername = mysql_real_escape_string($db,$_POST['username']) ;
		$mypassword = mysql_real_escape_string($db,$_POST['password']) ;

		$sql = "SELECT id FROM admin WHERE username='$myusername' and passcode = '$password'" ;
		$result = mysqli_query($db,$sql) ;
		$row = mysql_fetch_array($result,MYSQLI_ASSOC) ;
		$active = $row['active'] ;

		$count = mysqli_num_rows($result);

		// if input matches with table content then it must show user id 

		if($count == 1 ){
			session_register("myusername") ;
			$_SESSION['login_user'] = $myusername ;
			header("location:welcome.php") ;
		}else{
			$error = "your login name or password are invalid " ;
		}

	}
?>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<b>login page</b>
	<form acrion="" method="post">
		<label>username : </label><input type="text" name="username"/><br><br>
		<label>password : </label><input type="password" name="password"/><br>
		<input type="submit" value="submit"/>
	</form>
	<div><?php echo $error; ?></div>
</body>
</html>
