<?php

session_start();
if(!isset($_SESSION['username'])) {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="signupcss.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>

	<div class="container">

	<a class="float-right" href="logout.php">LOGOUT</a>

	<h1> Welcome <?php echo $_SESSION['username'] ; ?></h1>

</div>
</body>
</html>