<?php
include('includes/config.php');
if (!empty($_POST["dishname"])) {
  $id = $_POST['dishname'];
  $query = mysqli_query($con, "select dishdescription from dish where dishname='$id'");
?>
  <?php
  while ($row = mysqli_fetch_array($query)) {
  ?>
    <h5 class="card-title">About the dish: <?php echo htmlentities($row['dishdescription']); ?></h5>
  <?php
  }
}
  ?>