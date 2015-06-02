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
		<div class='attend-result'>
			<form>
				<ul>
					<li>
						<label>From</label>
						<input type='date' name='adate_from'>
					</li>
					<li>
						<label>To</label>
						<input type='date' name='adate_to'>
					</li>
					<li>
						<input type='button' value='SUBMIT'>
						<input type='reset' value='Reset'>
					</li>
				</ul>
			</form>
		</div>
	</div>
</body>