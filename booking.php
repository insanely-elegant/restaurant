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

if(isset($_POST['submit']))
{
	
	$timestamp=$_POST['timestamp'];
	$room=$_POST['room'];
	$firstname= $_SESSION['firstname'];
	$lastname= $_SESSION['lastname'];
	$tablename=$_POST['tablename'];
	$condono=$_SESSION['condono'];
$sql=mysqli_query($con,	"insert into reservation(firstname,lastnameroom,tablename,timestamp,condono) values('$firstname','$lastname','$room','$tablename', '$timestamp', '$condono')");
$_SESSION['msg']="Reservation Confirmed !!";
}	
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
function getFood(val) {
	$.ajax({
	type: "POST",
	url: "get_food.php",
	data:'diningtime='+val,
	success: function(data){
		$("#dishname1").html(data);
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
		$("#seat").html(data);
	}
	});
}

function getDiningtime(val) {
	$.ajax({
	type: "POST",
	url: "get_diningtime.php",
	data:'diningdate='+val,
	success: function(data){
		$("#diningtime").html(data);
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

<script src='https://code.jquery.com/jquery-3.3.1.js'></script>
<script src='https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js'></script>

  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css'>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<style>
.exportExcel{
  padding: 5px;
  border: 1px solid grey;
  margin: 5px;
  cursor: pointer;
}
</style>

</br></br></br></br>


</br></br></br></br>

</br></br></br></br>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br> 	


<form method="post">
							<p style="font-size: x-large; text-align: center; color: #f14634">Hello, <?php echo $_SESSION['firstname'];?></p>
							<p style="font-size:xx-large; text-align: center;">Select a date</p><br>
							<div class="row no-margin">


									<div class="form-group">
								<div class="form-group">
								<span class="form-label">Your Unit Number</span>

								<input class="form-control" name="condono" type="text" value="<?php echo $row['unitno'];?>" disabled>

<div class="form-group">
<label class="form-label" for="basicinput">Dining Date</label>
<div class="controls">
<select name="timestamp" class="form-control" onChange="getDiningtime(this.value);"  required>
<option value="">Select Dining Date</option>
<?php $query=mysqli_query($con,"select DISTINCT diningdate from weeklymenu");
while($row=mysqli_fetch_array($query))
{?>

<option id="usrdate" value="<?php echo $row['diningdate'];?>"><?php echo $row['diningdate'];?></option>
<?php } ?>
</select>
</div>
</div>


<div class="form-group">
<label class="form-label" for="basicinput">Dining Time</label>
<div class="controls">
<select name="diningtime" id="diningtime" class="form-control" onChange="getFood(this.value);"  required>
</select>
</div>
</div>

<div class="form-group">
<label class="form-label" for="basicinput">Dish Name 1</label>
<div class="controls">
<select name="dishname"  id="dishname1" class="form-control" onChange="getFood2(this.value);" required>
</select>
</div>  

<!-- <div class="form-group">
<label class="form-label" for="basicinput">Dish Name 1</label>
<div class="controls">
<select name="dishname2"  id="dishname2" class="form-control" required>
</select>
</div>  -->

<div class="row no-margin">
							<div class="form-group">
										<span class="form-label">Select the Room</span>
										<select class="form-control" name="room" onChange="getTable(this.value);"  >
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
								
									<div class="form-group">
										<span class="form-label">Select table number</span>
										<select class="form-control" name="tablename" id="tablename" >
										</select>
									</div>
								
										<!-- <div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Select seat number</span>
										<select class="form-control" name="seat" id="seat">
										</select>
									</div>
								</div> -->
							</div>
<div class="form-btn">
                <button id="submit" type="submit" name="submit" class="submit-btn" >CONFIRM RESERVATION</button>
</br></br><p style="font-size:xx-large; text-align: center;">Guest List for the week</p><br>
<table id="example"  cellpadding="0" cellspacing="0" border="0" class="display datatable-1 table table-bordered table-striped" style="width:100%;">
    <thead>
      <tr>
	 	<th>ID</th>
	 	<th>First Name</th>
        <th>Last Name</th>
        <th>Unit No</th>
        <th>Room</th>
        <th>Table Name</th>
        <th>Total Seats</th>
        <th>Total Guests</th>
        <th>Date & Time</th>
		
      </tr>
    </thead>
   <tbody>

<?php $query=mysqli_query($con,"select * from reservation");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['firstname']);?></td>
											<td><?php echo htmlentities($row['lastname']);?></td>
											<td><?php echo htmlentities($row['condono']);?></td>
											<td><?php echo htmlentities($row['room']);?></td>
											<td><?php echo htmlentities($row['tablename']);?></td>
											<td><?php echo htmlentities($row['seat']);?></td>
											<td><?php echo htmlentities($row['guestno']);?></td>
											<td><?php echo htmlentities($row['timestamp']);?></td>
											
                                               
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
                                </table>

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
