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
                                                <li class="breadcrumb-item active" aria-current="page">Upload Backup File</li>
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
                                        <h3 class="section-title">Upload Backup file to cloud</h3>
                                        <p>You can backup your file here.</p>
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
                                            <div class="alert alert-warning" role="alert">
                                                Important Note! : This is a upload and restore form. First upload the backup using the backup form here. </br>
                                                Then after the upload is successful, please click on the "Restore to uploaded backup" button to restore the site to the data that you just uploaded.
                                            </div>
                                            <div class="alert alert-danger" role="alert">
                                                Warning! : If you click on "Restore to uploaded backup" button WITHOUT first uploading the backup file, it'll restore to the last time you uploaded the backup file in this form.
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <div class="card">
                                                        <h5 class="card-header">Backup Form</h5>
                                                        <div class="card-body">
                                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                                <h4>Select .sql file to upload: </h4> 
                                                                <input class="btn btn-outline-brand" type="file" name="fileToUpload" id="fileToUpload" required> </br></br>
                                                                <input class="btn btn-outline-brand" type="submit" value="Upload to server" name="submit">
                                                            </form>
                                                        </div>

                                                    </div>
                                                    <div class="card">
                                                        <h5 class="card-header">Restore Form</h5>
                                                        <div class="card-body border-top">

                                                            <div>
                                                                <button class="btn btn-outline-dark" onclick="window.location.href = 'restore-backup.php';">Restore to uploaded backup</button>
                                                            </div>
                                                        </div>

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