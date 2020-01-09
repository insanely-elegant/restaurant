<?php
session_start();
error_reporting(1);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{
header('location:index.php');
}
else{
date_default_timezone_set('America/Los_Angeles');
$currentTime = date( 'm-d-Y h:i:s A', time () );
 $query=mysqli_query($con,"select * from room");
while($row=mysqli_fetch_array($query))
{
	$rooms .="<option value=".$row['id'].">".$row['roomname']."</option>";
	$layouts .= "if(x==".$row['id']."){
		roomlayout.innerHTML='<img style=\"width:100%;\" src=\"./admin/productimages/'+x+'/".$row['productimage1']."\"/>';
	}";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php $query=mysqli_query($con,"select * from users where unitno='".$_SESSION['login']."'");
while($row=mysqli_fetch_array($query))
{?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							
							<div class="cell">
								Full Name
							</div>
							
							<div class="cell">
								Unit No
							</div>
							<div class="cell">
								Table
							</div>
							<div class="cell">
								Date
							</div>
							<div class="cell">
								Time
							</div>
						</div>

<?php $query=mysqli_query($con,"select * from reservation");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
						<div class="row">
							
							<div class="cell" data-title="Full Name">
							<?php echo htmlentities($row['firstname']);?>
							</div>
							
							<div class="cell" data-title="Unit No">
							<?php echo htmlentities($row['condono']);?>
							</div>
							<div class="cell" data-title="Table">
							<?php echo htmlentities($row['tablename']);?>
							</div>
							<div class="cell" data-title="Date">
							<?php echo htmlentities($row['diningdate']);?>
							</div>
							<div class="cell" data-title="Time">
							<?php echo htmlentities($row['diningtime']);?>
							</div>		
						</div><?php $cnt=$cnt+1; } ?>
					</div>
				
			</div>	
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php }} ?>