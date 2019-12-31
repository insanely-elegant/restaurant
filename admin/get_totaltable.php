<?php
include('includes/config.php');
if(!empty($_POST["roomid"])) 
{
 $id=$_POST['roomid'];
 
$query=mysqli_query($con,"select * from room where id='$id'");
?>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option selected="true" disabled="disabled" value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['totaltables']); ?></option>
  <?php

}
}
?>