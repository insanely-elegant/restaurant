
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
{?>
<?php include("includes/nav-menu.php") ?>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="seat-selection.php">
							<p style="font-size: x-large; text-align: center; color: #f14634">Hello, <?php echo $row['firstname']; ?> </p>
							<p style="font-size:xx-large; text-align: center;">Select a date</p></br>
							<div class="row no-margin">
								
									<div class="form-group">
								<!-- <div class="form-group">
								<span class="form-label">Unit Number</span>
								
								<input class="form-control" type="text" value="<?php echo $row['unitno'];  ?>" disabled>
								</div>  -->
										<select class="form-control" id="options">
											<option class="form-control" value="Option 0">Select a date</option>
											<option class="form-control" value="Option 1">10/18/2019</option>
											<option class="form-control" value="Option 2">10/19/2019</option>
											<option class="form-control" value="Option 3">10/20/2019</option>
											<option class="form-control" value="Option 4">10/21/2019</option>
											<option class="form-control" value="Option 5">10/22/2019</option>
											<option class="form-control" value="Option 6">10/23/2019</option>
										</select>

<select class="form-control" id="choices"><span class="form-label">Choose a Preferred Meal</span>
  <option value="" disabled selected>Please select the date first</option>
</select>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
  // Map your choices to your option value
var lookup = {
   'Option 0': ['Please select a date'],
   'Option 1': ['Apple Pie','Clam Chowder'],
   'Option 2': ['The Hamburger','Apple Pie'],
   'Option 3': ['Bagel and Lox', 'Deep-Dish Pizza'],
   'Option 4': ['Drop Biscuits and Sausage Gravy', 'Texas Barbecue'],
   'Option 5': ['Apple Pie', 'Apple Pie'],
   'Option 6': ['Hominy Grits','Pancakes'],
};

// When an option is changed, search the above for matching choices
$('#options').on('change', function() {
   // Set selected option as variable
   var selectValue = $(this).val();

   // Empty the target field
   $('#choices').empty();
   
   // For each chocie in the selected option
   for (i = 0; i < lookup[selectValue].length; i++) {
      // Output choice in the target field
      $('#choices').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
   }
});
  </script>

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
<?php } ?>
</html>
<?php
}
?>