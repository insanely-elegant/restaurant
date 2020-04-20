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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILVER GLEN - Cancel Booking</title>
    
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
		

		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
<style>
.container {
    margin : 50px;
}


</style>

        
</head>

<body>
<h2>Cancel Your Reservations</h2>

<?php $query = mysqli_query($con, "select * from reservation where diningdate >= now() + INTERVAL 1 DAY AND  condono = '$user'");
                                                while ($row = mysqli_fetch_array($query)) {
                                                $diningdate = $row['diningdate'];
                                                $diningtime = $row['diningtime'];
                                                $id = $row['id'];
                                                $dishname = $row['dishname']; ?>
<div class="container">
<div class="card w-50">
  <div class="card-body">
    <h5 class="card-title"><?php echo  htmlentities($diningdate); ?></h5>
    <p class="card-text"><?php echo  htmlentities($diningtime); ?></p>
    <p class="card-text"><?php echo  htmlentities($dishname); ?></p>
    <a class="btn btn-danger"  onClick="return confirm('Are you sure you want to cancel & delete this reservation?')" href="cancel-booking.php?id=<?php echo  htmlentities($id); ?>&del=delete">Delete Reservation</a>
  </div>
</div>
</div>
<?php } ?>
			
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
</body>
</html>
<?php }
 ?>