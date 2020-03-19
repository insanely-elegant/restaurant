<?php 
require_once("includes/config.php");
if(!empty($_POST["unitno"])) {
    $unitno= $_POST["unitno"];
	
		$result =mysqli_query($con,"SELECT unitno FROM  users WHERE  unitno='$unitno'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Unitno already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Unitno available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
