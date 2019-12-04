<?php
 session_start();
// error_reporting(0);
include('includes/config.php');

// Code for User login
if(isset($_POST['login']))
{
   $unitno=$_POST['unitno'];
  $password=$_POST['password'];
 $query=mysqli_query($con,"SELECT * FROM users WHERE unitno='$unitno' and password='$password'");
 $num=mysqli_fetch_array($query);
 if($num>0)
 {
 $extra="booking.php";
 $_SESSION['login']=$_POST['unitno'];
$_SESSION['id']=$num['id'];
 $_SESSION['unitno']=$num['unitno'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
 $log=mysqli_query($con,"insert into userlog(unitno,userip,status) values('".$_SESSION['login']."','$uip','$status')");
 $host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
 exit();
 }
// else
// {
// $extra="index.php";
// $unitno=$_POST['unitno'];
// $uip=$_SERVER['REMOTE_ADDR'];
// $status=0;
// $log=mysqli_query($con,"insert into userlog(unitno,userip,status) values('$unitno','$uip','$status')");
// $host  = $_SERVER['HTTP_HOST'];
// $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
// header("location:http://$host$uri/$extra");
// $_SESSION['errmsg']="Invalid Unit no or Password";
// exit();
// }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Silver Glen - Book a Table</title>

	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">


	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


	<link type="text/css" rel="stylesheet" href="css/style.css" />


</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post">
						<span style="color:red;">
							<?php echo htmlentities($_SESSION['errmsg']); 	?>
							<?php echo htmlentities($_SESSION['errmsg']=""); ?>
						</span>
							<p style="font-size:xx-large; text-align: center;">Silver Glen - Login</p></br>
							<div class="form-group">
								<span class="form-label">Unit Number</span>
								<input class="form-control" name="unitno" type="text" placeholder="Your Residence Number" required>
							</div>
							<div class="form-group">
								<span class="form-label">Password</span>
								<input class="form-control" name="password" type="password" placeholder="Enter your password" required>
							</div>
							<div class="form-btn">
								<button type="submit" class="submit-btn" name="login" value="login">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
