<?php
include('includes/config.php');
if(!empty($_POST["diningdate"])) 
{
 $id=$_POST['diningdate'];
 
$query=mysqli_query($con,"select * from pickupweeklymenu where pickupdate='$id'");
?>
<option value="">Select a time</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['pickuptime']); ?>"><?php echo htmlentities($row['pickuptime']); ?></option>
  <?php

}
}
?>