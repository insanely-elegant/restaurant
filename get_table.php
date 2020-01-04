<?php
include('includes/config.php');
if(!empty($_POST["room_id"])) 
{
$id=intval($_POST['room_id']);
$query=mysqli_query($con,"select tablename from tablelayout where roomid=$id and totalseats != 0");
?>
<option value="">Select Table</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['tablename']); ?>"><?php echo htmlentities($row['tablename']); ?></option>
  <?php
 }
}
?>