<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($connection);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>The index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>