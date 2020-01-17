<?php
include('includes/config.php');
if(!empty($_POST["diningdate"])) 
{
 $id=$_POST['diningdate'];
$query=mysqli_query($con,"select diningtime from weeklymenu where diningdate='$id'");
?>
<option value="">Select Dining Time</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
?>
  <option value="<?php echo htmlentities($row['diningtime']); ?>"><?php echo htmlentities($row['diningtime']); ?></option>
  <?php
 }
}
?>