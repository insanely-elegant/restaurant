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
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename5']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename6']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename7']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename8']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename9']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename10']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename11']); ?></option> 
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename12']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename13']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename14']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename15']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename16']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename17']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename18']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename19']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename20']); ?></option>
  <?php
 }
}
?>