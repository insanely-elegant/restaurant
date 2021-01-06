<?php
error_reporting(0);
session_start();
include('includes/config.php');
// if(strlen($_SESSION['alogin'])==0)
// 	{	
// header('location:index.php');
// }
// else{
date_default_timezone_set('America/Los_Angeles'); // change according timezone
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
                                                <li class="breadcrumb-item active" aria-current="page">Backup & Restore</li>
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
                                        <h3 class="section-title">Backup & Restore</h3>
                                        <p>You can backup & restore data here.</p>
                                    </div>
                                    <?php if (isset($_POST['submit'])) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
                                        </div>
                                    <?php } ?>


                                    <?php if (isset($_GET['del'])) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="alert alert-info" role="alert">
                                                Tip! : Hover on [ ? ] to see info about the feature
                                            </div>
                                            <div class="module-body table">
                                                <h3 class="section-title">Backup & Restore</h3>

                                                <div class="card-body border-top">
                                                    <h4>Process & Download Full Database Backup<a data-toggle="tooltip" title="" data-original-title="Click the button below to download a copy of the latest of all the data as a backup file."> [ ? ]</a> <br></h4>
                                                    <div>
                                                        <button class="btn btn-outline-primary" onclick="window.location.href = 'download-backup.php';">Process & Download Full Database Backup</button>
                                                    </div>
                                                </div>
                                                <div class="card-body border-top">
                                                    <h4>Upload Backup to server<a data-toggle="tooltip" title="" data-original-title="Click the button below to upload and store your copy of backup file in server."> [ ? ]</a> <br></h4>
                                                    <div>
                                                        <button class="btn btn-outline-dark" onclick="window.location.href = 'continous-backup.php';">Upload Backup to server</button>
                                                    </div>
                                                </div>
                                                <div class="card-body border-top">
                                                    <h4>Show Backup files<a data-toggle="tooltip" title="" data-original-title="Click here to see all the backup files in server."> [ ? ]</a> <br></h4>
                                                    <div>
                                                        <button class="btn btn-outline-success" onclick="window.location.href = 'show-files.php';">Show & Download Backup files</button>
                                                    </div>
                                                </div>
                                                <div class="card-body border-top">
                                                    <h4>Restore Full Database Backup<a data-toggle="tooltip" title="" data-original-title="Click here to upload & restore to a previous backup"> [ ? ]</a> <br></h4>
                                                    <div>
                                                        <button class="btn btn-outline-light" onclick="window.location.href = 'upload-backup.php';">Upload & Restore Full Database Backup</button>
                                                    </div>
                                                </div>
                                                <div class="card-body border-top">
                                                    <h4>DELETE ALL DATA<a data-toggle="tooltip" title="" data-original-title="Click here to upload & restore to a previous backup"> [ ? ]</a> <br></h4>
                                                    <div>
                                                        <button class="btn btn-outline-danger" onclick="window.location.href = 'delete-all-data.php';">DELETE ALL DATA</button>
                                                    </div>
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