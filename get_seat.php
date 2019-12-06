<?php
include('includes/config.php');
if(!empty($_POST["table_id"])) 
{
$id=intval($_POST['table_id']);
$status = '';
$query=mysqli_query($con,"select * from seatlayout where tableid=$id and s1!='$status' or s1 is NULL and s2!='$status' or s2 is NULL and s3!='$status' or s3 is NULL and s4!='$status' or s4 is NULL and s5!='$status' or s5 is NULL and s6!='$status' or s6 is NULL and s7!='$status' or s7 is NULL and s8!='$status' or s8 is NULL and s9!='$status' or s9 is NULL and s10!='$status' or s10 is NULL and s11!='$status' or s11 is NULL and s12!='$status' or s12 is NULL and s13!='$status' or s13 is NULL and s14!='$status' or s14 is NULL and s15!='$status' or s15 is NULL and s16!='$status' or s16 is NULL and s17!='$status' or s17 is NULL and s18!='$status' or s18 is NULL and s19!='$status' or s19 is NULL and s20!='$status' or s20 is NULL");
?>
<option value="">Select Seat</option>
<?php
 while($row=mysqli_fetch_array($query) )
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s1']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s2']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s3']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s4']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s5']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s6']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s7']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s8']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s9']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s10']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s11']); ?></option> 
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s12']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s13']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s14']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s15']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s16']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s17']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s18']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s19']); ?></option>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['s20']); ?></option>
  <?php
 }
}
?>