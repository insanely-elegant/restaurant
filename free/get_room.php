<?php
include('includes/config.php');
if(!empty($_POST["diningdate"])) 
{
 $dd=$_POST['diningdate'];
$query=mysqli_query($con,"select DISTINCT room.id as rid, room.roomname as rname from room join weeklymenu on room.id = weeklymenu.roomid where diningdate='$dd'");
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