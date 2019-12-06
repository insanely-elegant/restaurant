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

   <script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_food.php",
	data:'id='+val,
	success: function(data){
		$("#dishname").html(data);
	}
	});
}
function getTable(val) {
	$.ajax({
	type: "POST",
	url: "get_table.php",
	data:'room_id='+val,
	success: function(data){
		$("#tablename").html(data);
	}
	});
}
function getSeat(val) {
	$.ajax({
	type: "POST",
	url: "get_seat.php",
	data:'table_id='+val,
	success: function(data){
		$("#seatname").html(data);
	}
	});
}

</script>

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
						<form method="post" action="seat-selection.php" name="insertproduct" enctype="multipart/form-data">
							<p style="font-size: x-large; text-align: center; color: #f14634">Hello, <?php echo $_SESSION['fname'];?></p>
							<p style="font-size:xx-large; text-align: center;">Select a date</p><br>
							<div class="row no-margin">


									<div class="form-group">
								<div class="form-group">
								<span class="form-label">Your Unit Number</span>

								<input class="form-control" type="text" value="<?php echo $row['unitno'];?>" disabled>

<div class="form-group">
<label class="form-label" for="basicinput">Dining Date & Time</label>
<div class="controls">
<select name="diningdatetime" class="form-control" onChange="getSubcat(this.value);"  required>
<option value="">Select Dining Date & Time</option>
<?php $query=mysqli_query($con,"select * from weeklymenu");
while($row=mysqli_fetch_array($query))
{?>

<option id="usrdate" name="ddt" value="<?php echo $row['id'];?>"><?php echo $row['diningdatetime'];?></option>
<?php } ?>
</select>
</div>
</div>


<div class="form-group">
<label class="form-label" for="basicinput">Dish Name</label>
<div class="controls">
<select name="dishname"  id="dishname" class="form-control" required>
</select>
</div>  
<div class="row no-margin">
							<div class="form-group">
										<span class="form-label">Select the Room</span>
										<select class="form-control" name="roomname" onChange="getTable(this.value);"  >
										<option value="">Select Dining Room</option>
										<?php $query=mysqli_query($con,"select * from room");
										while($row=mysqli_fetch_array($query))
										{?>
											<option value="<?php echo $row['id'];?>"><?php echo $row['roomname'];?></option>
										<?php } ?>
										</select>
										<span class="select-arrow"></span>
									</div>
							</div>
							<div class="row no-margin">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Select table number</span>
										<select class="form-control" id="tablename" onChange="getSeat(this.value);">
										</select>
									</div>
								</div>
										<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Select seat number</span>
										<select class="form-control" id="seatname">
										</select>
									</div>
								</div>

							</div>
<div class="form-btn">
                <button id="submit" type="submit" class="submit-btn" >CONFIRM RESERVATION</button>

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
