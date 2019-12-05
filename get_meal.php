<?php
include('include/config.php');
if(!empty($_POST["aid"])) 
{
$id=intval($_POST["aid"]);
$query=mysqli_query($con,"select dishname from weeklymenu where id=$id");
?>
<option value="">Select your meal</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['dishname']); ?></option>

  <?php }} ?>