<?php
include('includes/config.php');
if(!empty($_POST["diningtime"])) 
{
 $id=$_POST['diningtime'];
$query=mysqli_query($con,"select * from weeklymenu where id='$id'");
?>
<option value="">Select one of 2 available Dishes</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
?>
  <option value="<?php echo htmlentities($row['dishname1']); ?>"><?php echo htmlentities("1. " .$row['dishname1']); ?></option>
  <option value="<?php echo htmlentities($row['dishname2']); ?>"><?php echo htmlentities("2. " .$row['dishname2']); ?></option>
  <?php
 }
}
?>