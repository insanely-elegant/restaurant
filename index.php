<?php
session_start();
error_reporting(0);
include('includes/config.php');

// Code for User login
if (isset($_POST['login'])) {
	$unitno = $_POST['unitno'];
	$password = $_POST['password'];
	$query = mysqli_query($con, "SELECT * FROM users WHERE unitno='$unitno' and password='$password'");
	$num = mysqli_fetch_array($query);
	if ($num > 0) {
		$extra = "menu.php";
		$_SESSION['login'] = $_POST['unitno'];
		$_SESSION['id'] = $num['id'];
		$_SESSION['firstname'] = $num['firstname'];
		$_SESSION['lastname'] = $num['lastname'];
		$_SESSION['email'] = $num['email'];
		$uip = $_SERVER['REMOTE_ADDR'];
		$status = 1;
		$log = mysqli_query($con, "insert into userlog(unitno,userip,status) values('" . $_SESSION['login'] . "','$uip','$status')");
		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		exit();
	} else {
		$_SESSION['errmsg'] = "Invalid username or password";
		$extra = "index.php";
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		exit();
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Silver Glen - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">

				<form method="post" class="login100-form validate-form flex-sb flex-w">

					<span class="login100-form-title p-b-51">
						Member : Login
					</span>
					<span style="color:red;">
						<?php echo htmlentities($_SESSION['errmsg']); 	?>
						<?php echo htmlentities($_SESSION['errmsg'] = ""); ?>
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Unit Number is required">
						<input class="input100" autofocus type="text" name="unitno" placeholder="Unit Number">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<!-- <a href="forgot.php" class="txt1">
								Forgot?
							</a> -->
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" name="login" value="login" class="login100-form-btn" style="background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #2a5298 100%);">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>