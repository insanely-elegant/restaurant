<?php
include('includes/config.php');
if (!empty($_POST["dishname"])) {
  $id = $_POST['dishname'];
  $query = mysqli_query($con, "select dishdescription from dish where dishname='$id'");
?>
<option value="">Review Dish Discription</option>
  <?php
  while ($row = mysqli_fetch_array($query)) {
  ?>
  
    <option value="<?php echo htmlentities($row['dishdescription']); ?>"><?php echo htmlentities($row['dishdescription']); ?></option>
  <?php
  }
}
  ?>