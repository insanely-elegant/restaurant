
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<title>Silver Glen - Book a Table</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />	
	<link type="text/css" rel="stylesheet" href="css/style.css" />

<?php $query=mysqli_query($con,"select * from users");
while($row=mysqli_fetch_array($query))
{?>
<?php include("includes/nav-menu.php") ?>
</head>

<body style="font-size: 18px;"> </br></br>
<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
        
<p style="font-size: x-large; text-align: center; color: #f14634">Hello, <?php echo $row['firstname']; ?> </p>  </br></br>

<p style="text-align: center;">Here's the guest list for: <b>October 20th</b></p> </br>
<div class="table-responsive">
  <table class="table">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Unit Number</th>
      <th scope="col">Table Number</th>
      <th scope="col">Seat Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>E302A</td>
      <td>1</td>
      <td>2</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>E303B</td>
      <td>2</td>
      <td>2</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>E305A</td>
      <td>3</td>
      <td>1</td>
    </tr>
  </tbody>
</table>
</div>
<div class="w3-container">
  <h2>Table Layout</h2>
  <p>Click on the image for full screen:</p>

  <img src="table.jpg" style="width:100%;cursor:zoom-in"
  onclick="document.getElementById('modal01').style.display='block'">

  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="table.jpg" style="width:100%">
    </div>
  </div>
</div>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="confirmation.php">
							<div class="row no-margin">
							<p style="text-align: center;">Fill in the details to confirm your reservation</p>
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
							<div class="row no-margin">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Select table number</span>
										<select class="form-control" id="tableno">
											<option class="form-control" value="Table 1">Table 1</option>
											<option class="form-control" value="Table 2">Table 2</option>
											<option class="form-control" value="Table 3">Table 3</option>
											<option class="form-control" value="Table 4">Table 4</option>
											<option class="form-control" value="Table 5">Table 5</option>
											<option class="form-control" value="Table 6">Table 6</option>
											<option class="form-control" value="Table 3">Table 7</option>
											<option class="form-control" value="Table 4">Table 8</option>
										</select>
									</div>
								</div>
										<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Select seat number</span>
										<select class="form-control" id="tableno">
											<option class="form-control" value="Table 1"> 1</option>
											<option class="form-control" value="Table 2"> 2</option>
											<option class="form-control" value="Table 3"> 3</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Select seat number</span>
										<select class="form-control" id="seatno">
											<option class="form-control" value="05:10 PM">05:10 PM</option>
											<option class="form-control" value="05:15 PM">05:15 PM</option>
											<option class="form-control" value="05:20 PM">05:20 PM</option>
											<option class="form-control" value="05:25 PM">05:25 PM</option>
											<option class="form-control" value="05:30 PM">05:30 PM</option>
											<option class="form-control" value="05:35 PM">05:35 PM</option>
											<option class="form-control" value="05:40 PM">05:40 PM</option>
										</select>
										
									</div>
								</div>

							</div>
							
						
								
						
						
							<div class="form-btn">
								<button type="submit" class="submit-btn" >View Reservation Summary</button>
							</div></br>
						</form>
						
					</div>
				</div>
			</div><span class="form-label" style="text-align:center;">Confirmation in the next page</span>
		</div>
	</div>
	  


        </main>
</body>
<?php } ?>
</html>
<?php
}
?>