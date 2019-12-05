<?php
include('includes/config.php');
if(!empty($_POST["id"])) 
{
 $id=intval($_POST['id']);
$query=mysqli_query($con,"SELECT dishname FROM weeklymenu WHERE id='$id';");
?>
<option value="">Select Dishname</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['dishname']); ?></option>
  <?php
 }
}
?>