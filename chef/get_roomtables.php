<?php
include('includes/config.php');
if(!empty($_POST["id"])) 
{
 $id=$_POST['id'];
$query=mysqli_query($con,"select * from tablelayout where roomid='$id'");
?>
<option value="">Select a Table</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['tablename']); ?></option>
  <?php

}
}
?>