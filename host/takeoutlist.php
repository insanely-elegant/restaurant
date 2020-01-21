<?php
error_reporting(0);
session_start();
include('includes/config.php');
// if(strlen($_SESSION['login'])==0)
// 	{	
// header('location:index.php');
// }
// else{
date_default_timezone_set('America/Los_Angeles'); // change according timezone
$currentTime = date('m-d-Y h:i:s A', time());

if (isset($_GET['noshow'])) {
    mysqli_query($con, "update pickups set isPickedup= 0 where id = '" . $_GET['id'] . "'");
    $_SESSION['delmsg'] = "User marked as No Show !!";
}

if (isset($_GET['pickedup'])) {
    mysqli_query($con, "update pickups set isPickedup= 1, timestamp = '$currentTime' where id = '" . $_GET['id'] . "'");
    $_SESSION['msg'] = "User sucessfully marked as Picked up!!";
}

?>
<!doctype html>
<html lang="en">

<head>
    <?php
    include('header.php');
    ?>
</head>

<body>
    <?php $query = mysqli_query($con, "select * from host");
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
                                        <h2 class="pageheader-title"><?php echo ($message); ?>, <?php echo $row['hostname']; ?> </h2> <?php } ?>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">View Order Takeout Lists</li>
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
                                        <h3 class="section-title">View Takeout Lists </h3>
                                        <p>You can view the list of order takeouts here</p>
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




                                    <div class="module-body table">
                                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Action</th>
                                                    <th>Date of Pickup</th>
                                                    <th>Time of Pickup</th>
                                                    <th>Condo No</th>
                                                    <th>Selected Dish</th>
                                                    <th>Order Pickup Status </th>
                                                    <th>Time Log of Status Change</th>
                                                    <th>View Invoice</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $query = mysqli_query($con, "select * from pickups");
                                                $cnt = 1;
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo htmlentities($cnt); ?></td>
                                                        <td><?php echo htmlentities($row['firstname']); ?></td>
                                                        <td><?php echo htmlentities($row['lastname']); ?></td>
                                                        <td>
                                                            <a href="takeoutlist.php?id=<?php echo $row['id'] ?>&pickedup=pickedup" class="btn btn-sm btn-success">Pickedup</a>
                                                            <br><br>
                                                            <a href="takeoutlist.php?id=<?php echo $row['id'] ?>&noshow=noshow" onClick="return confirm('Are you sure you want to mark no show?')" class="btn btn-sm btn-danger">
                                                                No Show
                                                            </a></td>
                                                        <td><?php echo htmlentities($row['diningdate']); ?></td>
                                                        <td><?php echo htmlentities($row['diningtime']); ?></td>
                                                        <td><?php echo htmlentities($row['condono']); ?></td>
                                                        <td><?php echo htmlentities($row['dishname']); ?></td>
                                                        <td><?php echo htmlentities($row['isPickedup'] ? 'Yes' : 'No'); ?></td>
                                                        <td><?php echo htmlentities($row['timestamp']); ?></td>
                                                        <td> <a href="pickup-receipt.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-outline-light">View Invoice</button></td>
                                                    </tr>
                                                <?php $cnt = $cnt + 1;
                                                } ?>

                                        </table>

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