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
	<title>Silver Glen - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


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

function changeLayout(x) {
	roomlayout = document.getElementById('roomlayout');
	<?php
	echo $layouts;
	 ?>
}
function getTable() {
	diningdate = document.getElementById('diningdate').value;
	roomid = document.getElementById('roomid').value;
	changeLayout(roomid);
	$.ajax({
	type: "GET",
	url: "get_table.php",
	data:'room_id='+roomid+'&diningdate='+diningdate,
	success: function(data){
		$("#tablename").html(data);
	}
	});
}
function getSeat(x) {
	seat = document.getElementById('seat');
	options ='';
	for (var i = x; i > 0; i--) {
		options +='<option>'+ i +'</option>'
	}
	seat.innerHTML = options;
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
	getTable();
}

$(document).ready(function(){
    $('#tablename').on('change',function(){
        var tableName = $("#tablename option:selected").text();
        document.getElementById('tablename_h').value = tableName;
    });
});

$(document).ready(function(){
    $('#diningtime').on('change',function(){
        var diningTime = $("#diningtime option:selected").text();
        document.getElementById('diningtime_h').value = diningTime;
    });
});

$(document).ready(function(){
    $('#roomid').on('change',function(){
        var roomName = $("#roomid option:selected").text();
        document.getElementById('roomname_h').value = roomName;
    });
});

</script>



</head>
<body>
	<?php $query=mysqli_query($con,"select * from users where unitno='".$_SESSION['login']."'");
while($row=mysqli_fetch_array($query))
{?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
			<p style="font-size: x-large; text-align: center; color: #f14634">Hello, <?php echo $_SESSION['firstname'];?></p>
			
			<form method="POST" action="review.php" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Reserve Your Table
					</span>

					<!-- Begin Unit No -->
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="condono" value="<?php echo "Your Unit No: ". $row['unitno'];?>" disabled>
						<span class="focus-input100"></span>
					</div>
					<!-- End Unit No -->

<!-- Begin Dining Date Selection -->
<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">	
<select id="diningdate" name="diningdate" class="form-control" onChange="getDiningtime(this.value);"  required>
<option value="">Select Dining Date</option>
<?php $query=mysqli_query($con,"SELECT DISTINCT diningdate FROM weeklymenu WHERE diningdate >= CURDATE() + INTERVAL 1 DAY");
while($row=mysqli_fetch_array($query))
{?>

<option id="usrdate" value="<?php echo $row['diningdate'];?>"><?php echo $row['diningdate'];?></option>
<?php } ?>
</select>
<span class="focus-input100"></span>
</div>
<!-- End Dining Date Selection -->

					<!-- Begin Dining Time -->
					<div class="wrap-input100 validate-input m-b-16">
						<select name="diningtime" id="diningtime" class="form-control" onChange="getFood(this.value);"  required>
						</select>
						<span class="focus-input100"></span>
					</div>
					
					<input type="hidden" name="diningtime_h" id="diningtime_h"> <!-- passing all selected values to hidden inputs for review.php -->
					<!-- End Dining Time -->

					

					<!-- Begin Dish Name -->
					<div class="wrap-input100 validate-input m-b-16">
						<select name="dishname"  id="dishname1" class="form-control" onChange="getFood2(this.value);" required>
						</select>
						<span class="focus-input100"></span>
					</div>
					<!-- End Dish Name  -->

					<!-- Begin Room No -->
					<div class="wrap-input100 validate-input m-b-16">
						<select id="roomid" class="form-control" name="room" onChange="getTable();"  >
										<option value="">Select Dining Room</option>
										<?php
										echo $rooms;
										?>
						</select>
						<span class="focus-input100"></span>
					</div>
					<input type="hidden" name="roomname_h" id="roomname_h"> <!-- passing all selected values to hidden inputs for review.php -->
					<!-- End Room No -->

					<!-- Begin Table No -->
					<div class="wrap-input100 validate-input m-b-16">
						<select onchange="getSeat(this.value)" class="form-control" name="tablename" id="tablename" >
						</select>
						<span class="focus-input100"></span>
					</div>

					<input type="hidden" name="tablename_h" id="tablename_h"> <!-- passing all selected values to hidden inputs for review.php -->
					<!-- End Table No -->

					<!-- Begin Number of seats -->
					<div class="wrap-input100 validate-input m-b-16">
						<select class="form-control" name="seats" id="seat">
						</select>
						<span class="focus-input100"></span>
					</div>
					<!-- End Number of seats -->
					
					

					<div class="container-login100-form-btn m-t-17">
					<button id="submit" type="submit" name="submit2" class="login100-form-btn" style="background-color: #0c5460">
						Review Your Booking
					</button>
					</div>
					<div style="margin-top:10px;" id="roomlayout"></div> <!-- Shows Image of the Table -->
					</form>
				

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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
</html><?php }} ?>