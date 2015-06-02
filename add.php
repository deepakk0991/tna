<?php 
	require 'connect.php';
	if(!$con)
	{
		die(mysqli_connect_error());
	}
?>
<html>
	<body>
	    <?php require 'header.php'; ?>
		<div class='page'>
		<a href='admin.php'>Home</a>
		<form action='' method='POST'>
			<ul>
				<li><input type='text' name='name' placeholder='Name'></li>
				<li><input type='text' name='email' placeholder='Email'></li>
				<li><input type='text' name='phone' placeholder='phone'></li>
				<li><input type='text' name='profile' placeholder='Profile'></li>
				<li><input type='date' name='date_of_birth' placeholder='Date of Birth'></li>
				<li><input type='text' name='pass' placeholder='Password'></li>
				<li><input type='submit' name='submit' Value='Create'><input type='reset' name='cancel' Value='Cancel'></li>
			</ul>
		</form>
		</div>
	</body>
</html>
<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name=mysqli_real_escape_string($con, $_POST['name']);
		$pass=mysqli_real_escape_string($con, $_POST['pass']);
		$email=mysqli_real_escape_string($con, $_POST['email']);
		$phone=mysqli_real_escape_string($con, $_POST['phone']);
		$profile=mysqli_real_escape_string($con, $_POST['profile']);
		$date_of_birth=mysqli_real_escape_string($con, $_POST['date_of_birth']);
		
		$query = "INSERT INTO users (users_id,name,pass,email,phone,profile,date_of_birth) VALUES ('','$name','$pass','$email',$phone,'$profile','$date_of_birth')";
		if(mysqli_query($con, $query))
		{
			echo "Succesfull";
		}
		else
		{
			echo "Error: " . $query . "<br>" . mysqli_error($con);
		}
		
	}
?>  