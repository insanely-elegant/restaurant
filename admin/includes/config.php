<?php
define('DB_SERVER','localhost');
define('DB_USER','u306375126_susr');
define('DB_PASS' ,'silverpassword');
define('DB_NAME', 'u306375126_silverglen');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
