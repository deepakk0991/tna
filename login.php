<?php
	require('connect.php');
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$email=mysqli_real_escape_string($con, $_POST['email']);
		$password=mysqli_real_escape_string($con, $_POST['password']);		
		$sql="SELECT users_id FROM users WHERE email='$email' and pass='$password'";
		$result  =  mysqli_query($con,$sql);
		$row     =  mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count   =  mysqli_num_rows($result);
		if($count==1)
		{
			//session_register("usernames");
			$_SESSION['login_user']=$email;
			if($email=='mail@atorse.com'){
				header("location:admin.php"); 
			}else{
				header("location:home.php"); 
			}
		}
		else{
			echo "bye";
			$error='Invalid login id or paassword';
		}
	}
?>
<body>
	<?php require 'header.php'; ?>
	<div class='page'>
		<h1>Hii Folks! Fill up your details.</h1>
		<div class='login-form'>
			<form action='' method="post" >
				<input placeholder="Email" type='text' name='email' />        <br />
				<input placeholder="Password" type='password' name='password' />   <br/>
				<input type='submit' value='submit' />
			</form>
		</div>
	</div>
</body>