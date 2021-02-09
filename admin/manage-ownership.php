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


if(isset($_POST['submit']))
{
	$condono_old=mysqli_real_escape_string($con,$_POST['condono_old']);
	$condono_new=mysqli_real_escape_string($con,$_POST['condono_new']);
	$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
	$lastname=mysqli_real_escape_string($con,$_POST['lastname']);
$sql=mysqli_query($con,"update
                            pickups
                        set 
                            condono='$condono_new'
                        where condono='$condono_old' AND firstname='$firstname' AND lastname='$lastname'");
$sql2=mysqli_query($con,"update
                            users
                        set 
                            unitno='$condono_new'
                        where unitno='$condono_old' AND firstname='$firstname' AND lastname='$lastname'");
$sql3=mysqli_query($con,"update
                            reservation
                        set 
                            condono='$condono_new'
                        where condono='$condono_old' AND firstname='$firstname' AND lastname='$lastname'");
$sql4=mysqli_query($con,"update
                        staff
                        set 
                        unitno='$condono_new'
                        where unitno='$condono_old' AND firstname='$firstname' AND lastname='$lastname'");
$_SESSION['msg']="Previous Member Data Updated !!";
// echo "<meta http-equiv='refresh' content='1;url=create-user.php'/>"; Need to remove this later.
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
                                                <li class="breadcrumb-item active" aria-current="page">Manage Ownership</li>
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
                                        <h3 class="section-title">Manage Ownership</h3>
                                        <p>You can update previous member data here.</p>
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
                                     <div class="alert alert-danger" role="alert">
                                                Warning! : Please ensure you have taken full backups from <a href="backup-restore.php">here</a>. <br>
                                                Once you change the data, it'll reflect everywhere permanently. This process cannot be reversed.

                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                Please note! : The Previous Resident's Unit Number, First Name and Last Name <br> has to match as per records for it to replace it with the new "Unit Number with identifier" on all old records. <br><br>
                                               An Ideal Identifier is Unit Number followed by an identifier for previous resident (PR) followed by the YEAR they moved out. <br>
                                                For example: 
                                                <br>
                                                E411 <br> becomes <br>
                                                E411 PR-2019
                                            </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <form method="post">
                                               
                                                <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Enter Old Unit Number *</label><a href="#" data-toggle="tooltip" title="" data-html="true"  style="color:red;"  data-original-title="UnitNumber For.e.g if the previous resident's Unit Number is E311 then enter: <br>E311"> [ ? ]</a>
                                                    <div class="input-group" id="condono_old" data-target-input="nearest">
                                                        <input type="text" id="condono_old" name="condono_old" class="form-control">
                                                       
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Enter First name of the individual whose unit number you wish to change*</label>
                                                    <div class="input-group" id="firstname" data-target-input="nearest">
                                                        <input type="text" id="firstname" name="firstname" class="form-control">
                                                       
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Enter Last Name of the individual whose unit number you wish to change*</label>
                                                    <div class="input-group" id="lastname" data-target-input="nearest">
                                                        <input type="text" id="lastname" name="lastname" class="form-control">
                                                       
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Enter New Identifier for Old Unit Number*</label><a href="#" data-toggle="tooltip" title="" data-html="true"  style="color:red;"  data-original-title="UnitNumber PR-YEAR For.e.g if the previous resident's Unit Number is E311, and they moved out in 2019, then it becomes, <br> E311 PR-2019"> [ ? ]</a>
                                                    <div class="input-group" id="condono_new" data-target-input="nearest">
                                                        <input type="text" id="condono_new" name="condono_new" class="form-control">
                                                       
                                                    </div>
                                                </div>
                                                </br>
                                                <button type="submit" name="submit" class="btn btn-outline-dark">Update all the old records</a>
                                                </button>
                                            </form>
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