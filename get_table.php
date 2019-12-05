<?php
include('includes/config.php');
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
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename1']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename2']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename3']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename4']); ?></option>
  <?php
 }
}
?>