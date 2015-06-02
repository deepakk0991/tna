<?php 
	require 'connect.php';
	session_start(); 
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>

<body>
	<?php require 'header.php'; ?>
	<?php require 'sidebar.php'; ?>
	<a style="float:left;" href="add.php">Add new Employee.</a>
    <a style="float:right;" href="logout.php">Logout</a>
	<?php
		$email = $_SESSION['login_user'];
		mysqli_close($con);
	?>
</body>