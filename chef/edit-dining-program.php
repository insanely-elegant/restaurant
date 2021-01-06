<?php
error_reporting(1);
session_start();
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
	$diningdatetime=$_POST['diningdatetime'];
	$dishname=$_POST['dishname'];
    $id=intval($_GET['id']);
$sql=mysqli_query($con,"update weeklymenu set diningdatetime='$diningdatetime',dishname='$dishname' where id='$id'");
$_SESSION['msg']="Dining Program Updated !!";
echo "<meta http-equiv='refresh' content='1;url=create-dining-program.php'/>";
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
<?php $query=mysqli_query($con,"select * from chef where chefname='".$_SESSION['login']."'");
while($row=mysqli_fetch_array($query))
{?>
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
$Hour = date('G');
{
if ( $Hour >= 5 && $Hour <= 11 ) {
  $message = "Good Morning";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
   $message = "Good Afternoon";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
  $message = "Good Evening";
}
?>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
<h2 class="pageheader-title"><?php echo($message); ?>,  <?php echo $row['chefname']; ?>  </h2> <?php } ?>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Update User Profile & Account</li>
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
                                    <h3 class="section-title">Update User Profile & Account</h3>
                                     <p>You can edit the user account here</p><p>* marked as important</p>
                                </div>
                                <?php if(isset($_POST['submit']))
{?>
									 <div class="alert alert-success" role="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									 <div class="alert alert-danger" role="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" >
                                            <?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from weeklymenu where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>									
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Dining Date Time</label>
                                                <input name="diningdatetime" value="<?php echo  htmlentities($row['diningdatetime']);?>" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Dishname</label>
                                                <input name="dishname" value="<?php echo  htmlentities($row['dishname']);?>" type="text" class="form-control">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-outline-dark">Update Dining Program</a>
                                        </form>	<?php } ?>	
                                    </div>
                                
                                </div>
                                 <div class="module-body table">
								
                                
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

<?php }} ?>
</html>