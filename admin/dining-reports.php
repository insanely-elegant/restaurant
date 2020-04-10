<?php

session_start();
include('includes/config.php');
// if(strlen($_SESSION['alogin'])==0)
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
                                                <li class="breadcrumb-item active" aria-current="page">Dining Reports</li>
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
                                        <h3 class="section-title">Dining Reports</h3>
                                        <p>You can generate reports here.</p>
                                    </div>
                                    <script>
                                        $(document).ready(function() {

                                            // assuming the controls you want to attach the plugin to
                                            // have the "datepicker" class set
                                            $('input.datepicker').Zebra_DatePicker();

                                        });
                                    </script>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="panel-body">

                                                <form role="form" method="post" action="dining-reports-detailed.php">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">
                                                            From Date: *
                                                        </label>
                                                        <div class="form-group">
                                                            <input placeholder="YYYY-MM-DD" id="fromdate" name="fromdate" type="text" class="form-control" required="true">
                                                        </div>


                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">
                                                            To Date: *
                                                        </label>
                                                        <div class="form-group">
                                                            <input placeholder="YYYY-MM-DD" id="todate" name="todate" type="text" class="form-control" required="true">
                                                        </div>



                                                    </div>
                                                    <button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
                                                        Submit
                                                    </button>
                                                </form>
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
<?php
// }
?>