<?php
session_start();
error_reporting(1);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
	header('location:index.php');
} else {
	date_default_timezone_set('America/Los_Angeles');
	$currentTime = date('m-d-Y h:i:s A', time());
	$query = mysqli_query($con, "select * from room");
	while ($row = mysqli_fetch_array($query)) {
		$rooms .= "<option value=" . $row['id'] . ">" . $row['roomname'] . "</option>";
		$layouts .= "if(x==" . $row['id'] . "){
		roomlayout.innerHTML='<img style=\"width:100%;\" src=\"./admin/productimages/'+x+'/" . $row['productimage1'] . "\"/>';
	}";
	}
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Make a Selection - Silver Glen</title>
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
		<?php $query = mysqli_query($con, "select * from users where unitno='" . $_SESSION['login'] . "'");
		while ($row = mysqli_fetch_array($query)) { ?>
			<div class="limiter">
				<?php

				date_default_timezone_set('America/Los_Angeles');
				$Hour = date('G'); {
					if ($Hour >= 5 && $Hour <= 11) {
						$message = "Good Morning";
					} else if ($Hour >= 12 && $Hour <= 18) {
						$message = "Good Afternoon";
					} else if ($Hour >= 19 || $Hour <= 4) {
						$message = "Good Evening";
					}

				?>
					<div class="container-login100">
						<div class="wrap-login100 p-t-50 p-b-90">
							<p style="font-size: x-large; text-align: center; color: black"> <?php echo ($message); ?> , <?php echo $_SESSION['firstname']; ?></p>
						<?php } ?>
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #99B898; color: black;" onClick="booking();">
								Make a New Reservation
							</button>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #FECEA8; color: black" onClick="bookingguest();">
								Make a New Guest Reservation
							</button>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #FF847C; color: black;" onClick="takeout();">
								Order a Takeout
							</button>
						</div>
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #E84A5F; color: black;" onClick="menuthisweek();">
								See this week's menu
							</button>
						</div>
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #2A363B; color: white;" onClick="reservation();">
								View Reservations by other members
							</button>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #582841; color: white;" onClick="history();">
								View Your Reservation History
							</button>
						</div>
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #DDA5B6; color: black;" onClick="cancel();">
								Cancel Your Upcoming Reservation
							</button>
						</div>
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #F2CC8C; color: black;" onClick="cancelorder();">
								Cancel Your Order Takeout
							</button>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #F1E6C1; color: black;" onClick="pickuphistory();">
								View Your Order Takeout History
							</button>
						</div>
						<!-- <div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #E8455F; color: magenta;" onClick="menu();">
								See menu from any date
							</button>
						</div> -->
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #99B898; color: black;" onClick="updatePassword();">
								Update Password
							</button>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="background-color: #3F6A8A; color: black;" onClick="logout();">
								Log out
							</button>
						</div>


						<script>
							function booking() {
								location.href = "booking.php";
							}

							function bookingguest() {
								location.href = "booking-guest.php";
							}

							function takeout() {
								location.href = "pickup.php"
							}

							function menuthisweek() {
								location.href = "current-takeout-menu-detailed.php"
							}

							function menu() {
								location.href = "weekly-menu.php"
							}

							function reservation() {
								location.href = "reserved/index.php"
							}

							function history() {
								location.href = "booking-history.php"
							}

							function cancel() {
								location.href = "cancel-booking.php"
							}
							function updatePassword() {
								location.href = "update-password.php"
							}
							function cancelorder() {
								location.href = "cancel-takeout.php";
							}



							function pickuphistory() {
								location.href = "pickup-history.php"
							}

							function logout() {
								location.href = "logout.php"
							}
						</script>
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

	</html><?php }
	} ?>