<?php 
	require 'connect.php';
	session_start();
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$to      = 'deepak@neatfolks.com';
		$subject = 'Application for leave';
		$message = $_POST['lreason'];
		$headers = 'From: mail@neatfolks.com' . "\r\n" .
			'Reply-To: mail@neatfolks.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
	}
?>
<body>
	<?php require 'header.php'; ?>
	<?php require 'sidebar.php'; ?>
	<div class='page'>
		<div class='leave-application'>
			<form action='' method='POST'>
				<ul>
					<li>
						<label>Enter Your Name</label>
						<input type='text' name='lname'>
					</li>
					<li>
						<label>Enter Your Email</label>
						<input type='text' name='lemail'>
					</li>
					<li>
						<label>Enter the reason for leave</label>
						<input type='textarea' name='lreason'>
					</li>
					<li>
						<input type='submit' value='SUBMIT'>
						<input type='reset' value='Reset'>
					</li>
				</ul>
			</form>
		</div>
	</div>
</body>
