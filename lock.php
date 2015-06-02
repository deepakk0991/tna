<!DOCTYPE html>
<head>
    <?php
        include('login.php');
        $user_check=$_SESSION['login_user'];
        $ses_sql=mysqli_query($con,"select username from admin where username='$user_check'");
        while($row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC)){
             $login_session=$row['username'];
        }
        if(isset($login_session))
        {
            header('Location:login.php');
        }       
    ?>
    <title>Lock Page</title>
</head>
<body>
    
</body>
