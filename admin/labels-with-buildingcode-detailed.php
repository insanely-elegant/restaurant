<?php
error_reporting(0);
session_start();
include('includes/config.php');
// if(strlen($_SESSION['login'])==0)
// 	{	
// header('location:index.php');
// }
// else{
date_default_timezone_set('Asia/Kolkata'); // change according timezone
$currentTime = date('d-m-Y h:i:s A', time());

?>
<!doctype html>
<html lang="en">

<head>
  <?php
  include('header.php');
  ?>
</head>

<body>
  <?php $query = mysqli_query($con, "select * from admins");
  while ($row = mysqli_fetch_array($query)) { ?>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
      <!-- ============================================================== -->
      <!-- navbar -->
      <!-- ============================================================== -->
      <?php
      include('navbar.php');
      ?>
      <!-- ============================================================== -->
      <!-- end left sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- wrapper  -->
      <!-- ============================================================== -->
      <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <?php
            date_default_timezone_set('America/Los_Angeles');
            $Hour = date('G'); {
              if ($Hour >= 5 && $Hour <= 11) {
                $message = "Good Morning";
              } else if ($Hour >= 12 && $Hour <= 18) {
                $message = "Good Afternoon";
              } else if ($Hour >= 19 || $Hour <= 4) {
                $message = "Good Evening";
              }
            ?>
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="page-header">
                    <h2 class="pageheader-title"><?php echo ($message); ?>, <?php echo $row['firstname']; ?> </h2> <?php } ?>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Print Takeout Labels</li>
                      </ol>
                    </nav>
                  </div>
                  </div>
                </div>
              </div>
              <!-- ============================================================== -->
              <!-- end pageheader  -->
              <!-- ============================================================== -->
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="section-block" id="basicform">
                    <h3 class="section-title">Print Takeout Labels </h3>
                    <p>You can print takeout labels here</p>
                  </div>
                  <?php if (isset($_GET['checkin'])) { ?>
                    <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
                    </div>

                  <?php } ?>

                  <?php if (isset($_GET['noshow'])) { ?>
                    <div class="alert alert-danger" role="alert">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
                    </div>
                  <?php } ?>
                  <?php
                  $fdate = $_POST['fromdate'];
                  $tdate = $_POST['todate'];
                  $unitno = $_POST['unitno'];
                  ?>
                  <div class="card">
                    <div class="card-body" style="background: #0e0c28; position: center;">
                      <h1 style="color: white;">Takeout Labels from <span style="color:red"><?php echo $fdate ?></span> to <span style="color:red"><?php echo $tdate ?></span> of Units Matching : <span style="color: GREEN"><?php echo $unitno ?> </span></h1>
                    </div>
                  </div>
                  <style>
                    .table-condensed {
                      font-weight: bolder;
                      font-size: x-large;
                      color: black;
                    }
                  </style>
                  <div class="module-body table">
                    <div class="table-responsive-xl">
                      <table id="example" class="table table-striped table-bordered second table-condensed" style="width:100%">
                        <thead>

                          <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Unit No</th>
                            <th>Meal Choice</th>
                            <th>Check</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          $query = mysqli_query($con, "select firstname,lastname,dishname,condono from pickups WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' AND condono LIKE '$unitno%' ORDER BY condono ASC");
                          $cnt = 1;
                          while ($row = mysqli_fetch_array($query)) {
                          ?>
                            <tr>
                              <td><?php echo htmlentities($cnt); ?></td>
                              <td><?php echo htmlentities($row['firstname']); ?></td>
                              <td><?php echo htmlentities($row['lastname']); ?></td>
                              <td style="text-transform: uppercase;"><?php echo $row['condono']; ?></td>
                              <td style="text-transform: uppercase;"><?php echo htmlentities($row['dishname']); ?></td>
                              <td></td>
                            </tr>
                          <?php $cnt = $cnt + 1;
                          } ?>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php
        include('footer.php');

        ?>
        <script>
          $(document).ready(function() {
            $('.datatable-1').dataTable();
            $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
          });
        </script>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- end wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

</body>

<?php } ?>

</html>