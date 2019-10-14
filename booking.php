
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


</head>

<body style="font-size: 18px;"><?php $query=mysqli_query($con,"select * from users");
while($row=mysqli_fetch_array($query))
{?><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color: turquoise">Silver Glen</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Book a Table</a></li>
      <li><a href="#">See Booking History</a></li>
      <li><a href="#">Help</a></li>
    </ul>
  </div>
</nav>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form></br>
							<p style="font-size: x-large; text-align: center; color: #f14634">Hello, <?php echo $row['firstname']; ?> </p>
							<p style="font-size:xx-large; text-align: center;">Book a Table</p></br>
							<div class="row no-margin">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Select a date</span>
										<input type="date" class="form-control" id="date" required autocomplete="off">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Select a time</span>
										<select class="form-control" id="members">
											<option class="form-control" value="06:30 PM">06:30 PM</option>
											<option class="form-control" value="07:00 AM">07:00 AM</option>
											<option class="form-control" value="07:30 PM">07:30 PM</option>
											<option class="form-control" value="08:10 PM">08:10 PM</option>
											<option class="form-control" value="08:40 PM">08:40 PM</option>
											<option class="form-control" value="09:10 PM">09:10 PM</option>
										</select>
										
									</div>
								</div>

							</div>
							<div class="row no-margin">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Silver Glen Members</span>
										<select class="form-control" id="members">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								
								
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Guests ( Non-Members )</span>
										<select class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Select a Table</span>
								<select class="form-control" required>
									<option value="" selected hidden>Select table size</option>
									<option value="1">Small Table (1 to 2 People)</option>
									<option value="2">Medium Table (3 to 5 People)</option>
									<option value="3">Large Table (5 to 8 People)</option>
								</select>
								<span class="select-arrow"></span>
							</div>
								<div class="form-group">
								<span class="form-label">Choose a Preferred Meal</span>
								<select class="form-control" required>
									<option value="" selected hidden>Select one meal</option>
									<option value="1">FILET MIGNON with salad( 8 oz )</option>
									<option value="2">GRILLED SALMON with mashed potatoes( 8 oz )</option>
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="form-group">
								<span class="form-label">Unit Number</span>
								
								<input class="form-control" type="text" value="<?php echo $row['unitno']; ?>" disabled>
								</div> 
							<div class="form-group">
								<span class="form-label">Any special request? (leave blank if none)</span>
								<input class="form-control" type="text" placeholder="example: food allergies, wheelchair assistance">
							</div>
							<div class="form-btn">
								<button class="submit-btn">Confirm Reservation</button>
							</div>
						</form>
						<script type="text/javascript">
					window.findTotal = function() {
						num1 = document.getElementById("total").value;
						value = num1 / 2;{
						document.getElementById("cgst").value = value;
						document.getElementById("sgst").value = value;
					}
						}
						    </script>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php } ?>
</html>
<?php
}
?>