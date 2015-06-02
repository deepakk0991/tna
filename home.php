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
	    <div class='punch-mach'>
			<?php
				$ipsec = $_SERVER['REMOTE_ADDR'];
				$ip_1 = '103.255.232.6';
				echo $_PHP_SELF;
				
				$count=0;
				if(isset($_GET['executepunchin'])) 
				{
					punch_in(); 
				}
				function punch_in()
				{
					global $con;
					$email = $_SESSION['login_user'];
					$query = "SELECT users_id FROM users WHERE email='$email'" ;
					$res = mysqli_query($con, $query);
					if(mysqli_num_rows($res) > 0){
						while($row1= mysqli_fetch_assoc($res)){
							$users_id = $row1["users_id"];
						}
					}
					$query = "INSERT INTO attendance (attendance_id,users_id,date,time_in) VALUES ('','$users_id',CURDATE(),CURTIME())";
					if(mysqli_query($con, $query))
					{
						echo "You have Succesfully Punched In";					
					}
					else
					{
						echo "Error: " . $query . "<br>" . mysqli_error($con);
					}
					global $count;
					$count = 1;
				}		
				echo "<a class='punch_button' href='welcome.php?executepunchin=true'>Punch In</a>";			
				echo $count;
				if($count>0)
				{
					if(isset($_GET['executepunchout'])) 
					{
						punch_out(); 
					}
					function punch_out()
					{
						global $con;
						
						$email = $_SESSION['login_user'];
						$query = "SELECT users_id FROM users WHERE email='$email'" ;
						$res = mysqli_query($con, $query);
						if(mysqli_num_rows($res) > 0){
							while($row1= mysqli_fetch_assoc($res)){
								$users_id = $row1["users_id"];
							}
						}
						$query = "UPDATE attendance SET time_out=CURTIME() WHERE users_id='$users_id'";
						if(mysqli_query($con, $query))
						{
							echo "You have Succesfully Punched Out";
						}
						else
						{
							echo "Error: " . $query . "<br>" . mysqli_error($con);
						}
					}
				}else{
					echo "You haven't punched in";
				}
			?>
			<a class='punch_button' href="welcome.php?executepunchout=true">Punch Out</a>	
		</div>
			
		
	</div>
</body>
<?php
	mysqli_close($con);
?>

    
      