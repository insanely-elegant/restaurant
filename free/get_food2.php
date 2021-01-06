<?php
include('includes/config.php');
if(!empty($_POST["diningid"])) 
{
 $id=$_POST['diningid'];
$query=mysqli_query($con,"select * from weeklymenu where id='$id'");
?>
<option value="">Select Dishname</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['dishname2']); ?></option>
  <?php
 }
}
?>