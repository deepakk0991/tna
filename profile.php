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
	 <div class='page'>
		 <?php
			$email = $_SESSION['login_user'];
			$query = "SELECT * FROM users WHERE email='$email'" ;
			
			$result = mysqli_query($con, $query);
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					echo $row["name"]."<br>". $row["phone"]."<br>". $row["profile"]."<br>". $row["date_of_birth"]."<br>";
				}
			} else {
				echo "0 results";
			}
		?>
	</div>
</body>
