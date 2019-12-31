<?php
session_start();
error_reporting(0);
include('includes/config.php');
{
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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>dataTables buttons and bootstrap 3</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script><script  src="script.js"></script>

</body>
</html> <?php } ?>