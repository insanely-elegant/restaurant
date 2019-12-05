<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body style="font-size: 18px;">
<?php $query=mysqli_query($con,"select * from users where unitno='".$_SESSION['login']."'");
while($row=mysqli_fetch_array($query))
{?>
<?php include("includes/nav-menu.php") ?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="select_meal.php" method="post" enctype="multipart/form-data">
							<p style="font-size: x-large; text-align: center; color: #f14634">Hello, <?php echo $row['firstname']; ?> </p>
							<p style="font-size:xx-large; text-align: center;">Select a date</p><br>
							<div class="row no-margin">
							

									<div class="form-group">
								<div class="form-group">
								<span class="form-label">Your Unit Number</span>

								<input class="form-control" type="text" value="<?php echo $row['unitno'];?>" disabled>
								
								</div>
								
										<select class="form-control" id="options">
										
										<option class="form-control" value="">Select a date</option>
										<?php $query=mysqli_query($con,"select * from weeklymenu");
										while($row=mysqli_fetch_array($query))
										{
										?>
										<option class="form-control" value="<?php echo $row['id'];?>"><?php echo $row['diningdatetime'];?></option>
										
										
										</select>
							</div>
							<div class="form-btn">
								<a href="select_meal.php?id=<?php echo $row['id'];?>" type="submit" class="submit-btn" >PICK YOUR FOOD NEXT</button>
								<?php } ?>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
		<?php }} ?>
</html>

