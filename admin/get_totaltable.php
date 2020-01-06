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
   $result = $con->query("select count(*) from tablelayout where roomid='$id'")->fetch_assoc()['count(*)'];
   if($result==0){
     ?>
     <option selected="true" disabled="disabled" value="<?php echo htmlentities($row['totaltables']); ?>"><?php echo htmlentities($row['totaltables']); ?></option>
     <?php
   }else{
     ?>
     <script>alert("A Layout Exists For This Room")</script>
     <?php
   }

}
}
?>
