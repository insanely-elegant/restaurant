
<?php
session_start();
error_reporting(1);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
$dd=intval($_GET['id']);
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

<body style="font-size: 18px;"><?php $query=mysqli_query($con,"select * from users where unitno='".$_SESSION['login']."'");
while($row=mysqli_fetch_array($query))
{?>
<?php include("includes/nav-menu.php") ?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="seat-selection.php" method="post" enctype="multipart/form-data">
							<p style="font-size: x-large; text-align: center; color: #f14634">Hello, <?php echo $row['firstname']; ?> </p>
							<p style="font-size:xx-large; text-align: center;">Select a date</p><br>
							<div class="row no-margin">

									<div class="form-group">
								<div class="form-group">
								<span class="form-label">Your \?>" disabled>
								</div>
                                <?php 
                                
                                $query=mysqli_query($con,"select * from weeklymenu where id='$dd'");
                                $cnt=1;
                                while($row=mysqli_fetch_array($query))
                                {
								?>
                                        <input class="form-control" type="text" name="" id="" disabled value="<?php echo $row['diningdatetime'];  ?>">
										
                                        							

<select class="form-control" name="selectFood" id="selectFood"><span class="form-label">Choose a Preferred Meal</span>
<option value="" selected>Please select the food</option>
<option class="form-control" value="<?php echo $row['id'];  ?>"><?php echo $row['dishname'];  ?></option>
			
 

</select>


							</div>



							<div class="form-btn">
								<button type="submit" class="submit-btn" >PICK YOUR TABLE NEXT</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php }}}  ?>
</html>

