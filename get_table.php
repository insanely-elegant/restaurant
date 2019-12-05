<?php
include('include/config.php');
if(!empty($_POST["room_id"])) 
{
$id=intval($_POST['room_id']);
$query=mysqli_query($con,"select * from tablelayout where roomid=$id");
?>
<option value="">Select Table</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename']); ?></option>
  <?php
 }
}
?>