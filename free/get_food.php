<?php
include('includes/config.php');
if(!empty($_POST["diningdate"])) 
{
 $id=$_POST['diningdate'];
$query=mysqli_query($con,"select DISTINCT dishname1, dishname2 from weeklymenu where diningdate='$id'");
?>
<option value="">Select one of 2 available Dishes</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
?>
  <option value="<?php echo htmlentities($row['dishname1']); ?>"><?php echo htmlentities($row['dishname1']); ?></option>
  <option value="<?php echo htmlentities($row['dishname2']); ?>"><?php echo htmlentities($row['dishname2']); ?></option>
  <?php
 }
}
?>