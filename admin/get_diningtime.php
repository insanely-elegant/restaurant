<?php
include('includes/config.php');
if(!empty($_POST["diningdate"])) 
{
 $id=intval($_POST['diningdate']);
$query=mysqli_query($con,"SELECT diningtime FROM diningdates WHERE id='$id';");
?>
<option value="">Select a time</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['diningtime']); ?></option>
  <?php
 }
}
?>