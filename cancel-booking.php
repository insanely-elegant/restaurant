<?php
session_start();
error_reporting(1);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
	header('location:index.php');
} else {
	date_default_timezone_set('America/Los_Angeles');
	$currentTime = date('m-d-Y h:i:s A', time());


	if (isset($_GET['del'])) {
		mysqli_query($con, "delete from reservation where id = '" . $_GET['id'] . "'");
		$_SESSION['delmsg'] = "Reservation Cancelled & Deleted Permanently!!";
	}



	$user = $_SESSION['login'];





?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>SILVER GLEN - Cancel Booking</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			@import"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css";
			@import"https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700";
			@import"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js";

			body {
				font-family: 'Nunito', sans-serif;
				font-size: 18px
			}

			.backto {
				background: black;
				padding: 12px 0;
				color: #fff
			}

			.backto a {
				color: #FFF;
				text-decoration: none
			}

			.cards-row {
				padding-top: 40px;
				padding-bottom: 20px;
				background: #eee
			}



			.card {
				border-radius: 4px;
				background: #fff;
				box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
				transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
				padding: 14px 80px 18px 36px;
				cursor: pointer;
			}

			.card:hover {
				transform: scale(1.05);
				box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
			}

			.card h3 {
				font-weight: 600;
			}

			.card img {
				position: absolute;
				top: 20px;
				right: 15px;
				max-height: 120px;
			}


			@media(max-width: 990px) {
				.card {
					margin: 20px;
				}
			}
		</style>

	</head>

	<body>
		<!-- partial:index.partial.html -->
		<div class="backto">
			<div class="container">
				<h1>Cancel your reservation</h1></a>
			</div>
		</div>

		<div class="container-fluid cards-row"><button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="window.location.href = 'menu.php';">
				Go Back to Home Page
			</button>
			<div class="container"><?php if (isset($_POST['submit'])) { ?>
					<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
					</div>
				<?php } ?>


				<?php if (isset($_GET['del'])) { ?>
					<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
					</div>
				<?php } ?>
				<div class="row">
					<?php $query = mysqli_query($con, "select * from reservation where diningdate >= now() + INTERVAL 1 DAY AND  condono = '$user'");
					while ($row = mysqli_fetch_array($query)) {
						$diningdate = $row['diningdate'];
						$diningtime = $row['diningtime'];
						$id = $row['id'];
						$dishname = $row['dishname']; ?>


						<div class="col-sm-6 mb-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">
										<h4>Dining Date: </h4>
										<!-- <h2><?php echo  htmlentities($diningdate); ?></h1> -->
										<h2><?php echo  htmlentities($mydate = date("D j F Y", strtotime($diningdate))); ?></h1>
									</h5>
									<h5>Menu Item: </h5>
									<h3 class="card-text"><?php echo  htmlentities($dishname); ?></h3>
									<h5>Dining Time: </h5>
									<h3 class="card-text"><?php echo  htmlentities(strtoupper($mytime = date("h:i a", strtotime($diningtime)))); ?></h3>
									<a class="btn btn-primary btn-lg btn-danger" onClick="return confirm('Are you sure you want to cancel this reservation?')" href="cancel-booking.php?id=<?php echo  htmlentities($id); ?>&del=delete">Delete Reservation</a>
								</div>
							</div>
						</div>

					<?php } ?>
				</div>
			</div>
		</div>
		<!-- partial -->

	</body>

	</html>




<?php }
?>