<?php
include('includes/config.php');
if(!empty($_POST["diningid"])) 
{
 $id=$_POST['diningid'];
 $status = "enabled";
$query=mysqli_query($con,"select * from diningdates where diningdate='$id' and status = '$status'");
?>
<option value="">Select a time</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['diningtime']); ?>"><?php echo htmlentities($row['diningtime']); ?></option>
  <?php

}
}
?>