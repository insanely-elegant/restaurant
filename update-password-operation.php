<?php
session_start();
error_reporting(1);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
}
$unit_number = $_POST['unit_number'];
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];

$sql = "SELECT * FROM users WHERE unitno = '$unit_number' AND password = '$old_password'";

$result = $con->query($sql);

if ($result->num_rows > 0) 
{

	$update_data = "UPDATE users SET password ='$new_password' WHERE unitno = '$unit_number'";
		if ($con->query($update_data) === TRUE) 
		{
			echo "1";
		} 
		else 
		{
		  echo "Error updating record: " . $conn->error;
		}
}
else
{
echo "0";

}

?>