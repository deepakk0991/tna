<?php

define('DB_HOST','localhost');
define('DB_USER','login');
define('DB_PASS','pass');
define('DB_DATABASE','login');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE) or die(mysqli_error());

?>