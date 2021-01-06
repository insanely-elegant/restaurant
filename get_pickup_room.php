<?php
include('includes/config.php');
if(!empty($_POST["diningdate"])) 
{
 $dd=$_POST['diningdate'];
 $dt=$_POST['diningtime'];
$query=mysqli_query($con,"select DISTINCT room.id as rid, room.roomname as rname from room join pickupweeklymenu on room.id = pickupweeklymenu.roomid where pickupweeklymenu.pickupdate='$dd' and pickupweeklymenu.pickuptime='$dt'");
?>
<option value="">Select Room</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
?>
  <option value="<?php echo htmlentities($row['rid']); ?>"><?php echo htmlentities($row['rname']); ?></option>
  <?php
 }
}
?>