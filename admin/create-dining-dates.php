<?php
error_reporting(0);
session_start();
include('includes/config.php');
// if(strlen($_SESSION['alogin'])==0)
// 	{	
// header('location:index.php');
// }
// else{
date_default_timezone_set('America/Los_Angeles');
$currentTime = date('d-m-Y h:i:s A', time());

if (isset($_POST['submit'])) {
    $diningdate = $_POST['diningdate'];
    $status = "enabled";
    $newDate = date('Y-m-d', strtotime(str_replace('-', '/', $diningdate)));
    $sql = mysqli_query($con, "insert into diningdates(diningdate,status) values('$newDate','$status')");
    // $last_inserted_sqlid = mysqli_insert_id($con);
    // $sql2=mysqli_query($con,"insert into diningtimes(did, diningtime, status) values('$last_inserted_sqlid','$diningtime','$status')");
    $_SESSION['msg'] = "New Dining Date Added & Auto-Enabled !!";
}

if (isset($_GET['disable'])) {
    mysqli_query($con, "update diningdates set status= 'disabled' where id = '" . $_GET['id'] . "'");
    $_SESSION['delmsg'] = "Selected Date Disabled!";
}
if (isset($_GET['enable'])) {
    mysqli_query($con, "update diningdates set status= 'enabled' where id = '" . $_GET['id'] . "'");
    $_SESSION['delmsg'] = "Selected Date Re-Enabled!";
}
if (isset($_GET['del'])) {
    mysqli_query($con, "delete from diningdates where id = '" . $_GET['id'] . "'");
    $_SESSION['delmsg'] = "Selected Date Deleted!";
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
                                                <li class="breadcrumb-item active" aria-current="page">Create, Edit & Manage Dining Dates</li>
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
                                        <h3 class="section-title">Manage Dining Program Dates / Calender</h3>
                                        <div class="alert alert-primary" role="alert">
                                            <h4 class="alert-heading">Tip!</h4>
                                            <p>You can create the dining program date for the week here and enable them or disable them. <br> If you are finished
                                                with a date, please disable them from here to prevent further bookings from this date. <br> </p>
                                            <hr>
                                            <p class="mb-0">If you select the DESTROY button, the date will be permanently removed from only the records <br>made for the week on the system, that includes weekly menu</p>
                                        </div>

                                    </div>
                                    <?php if (isset($_POST['submit'])) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
                                        </div>
                                    <?php } ?>


                                    <?php if (isset($_GET['disable'])) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
                                        </div>
                                    <?php } ?>

                                    <?php if (isset($_GET['enable'])) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Well done!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
                                        </div>
                                    <?php } ?>

                                    <?php if (isset($_GET['delete'])) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <form method="post">
                                                <!-- <div class="form-group">
                                                    <label for="inputText3">Dining Date</label>
                                                    <input name="diningdate" type="date" class="form-control" placeholder="yyyy-mm-dd">
                                                </div>  -->
                                                <div class="form-group">
                                                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                                        <input type="text" id="diningdate" name="diningdate" class="form-control datetimepicker-input" data-target="#datetimepicker4">
                                                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                            <div class="input-group-text" name="diningdate"><i class="far fa-calendar-alt"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                               

                                                <button type="submit" name="submit" class="btn btn-outline-dark">Add into calendar</a>
                                            </form>
                                        </div>

                                    </div>
                                    <h2>Dining Program Calendar</h2>
                                    <div class="module-body table">
                                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Dining Date</th>
                                                    <th>Date Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $query = mysqli_query($con, "select * from diningdates WHERE diningdate ORDER BY diningdate DESC");
                                                $cnt = 1;
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo htmlentities($cnt); ?></td>
                                                        <td><?php echo htmlentities(date("D, j F Y", strtotime($row['diningdate']))); ?></td>
                                                        <td><?php echo htmlentities($row['status']); ?></td>
                                                        <td>
                                                            <!-- <a href="edit-dining-dates.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-outline-light">Edit</button> -->
                                                            <a href="create-dining-dates.php?id=<?php echo $row['id'] ?>&disable=disable" onClick="return confirm('Are you sure you want to disable this date & time?')" class="btn btn-sm btn-outline-light">Disable
                                                                <i class="fas fa-ban"></i>
                                                                <a href="create-dining-dates.php?id=<?php echo $row['id'] ?>&enable=enable" onClick="return confirm('Are you sure you want to re-enable this date & time?')" class="btn btn-sm btn-outline-light">Re-Enable
                                                                    <i class="fas fa-check-circle"></i>
                                                                    <a href="create-dining-dates.php?id=<?php echo $row['id'] ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-outline-light">
                                                                        <i class="far fa-trash-alt"></i>
                                                                        </button>
                                                    </tr>
                                                <?php $cnt = $cnt + 1;
                                                } ?>

                                        </table>


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