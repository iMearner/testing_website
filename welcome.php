<?php
	include('session.php') ;
?>

<html>
	<head><title>welcome </title></head>
	<body>
		<h1>welcome <?php echo $login_sessio; ?></h1>
		<h2><a href="logout.php">logout</a></h2>
	</body>
</html>
