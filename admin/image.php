<?php
error_reporting(0);
session_start();
include('includes/config.php');
$rid=intval($_GET['id']);
// if(strlen($_SESSION['alogin'])==0)
// 	{	
// header('location:index.php');
// }
// else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>
<html>
<img src="productimages/<?php echo htmlentities($rid);?>/<?php echo htmlentities($row['productimage1']);?>" width="200" height="100"></html>
