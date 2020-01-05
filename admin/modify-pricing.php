<?php
error_reporting(0);
session_start();
include('includes/config.php');
// if(strlen($_SESSION['alogin'])==0)
// 	{
// header('location:index.php');
// }
// else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
$id=intval($_GET['id']);

if(isset($_POST['submit']))
{
    $mprice=$_POST['mprice'];
    $mpercent=$_POST['mpercent'];
    $mvalue=$_POST['mvalue'];
    $mtotals=$_POST['mtotals'];
$sql=mysqli_query($con,"update pricingmodels set mealprice='$mprice',mealtaxpercent='$mpercent',mealtaxvalue='$mvalue',mealtotalprice='$mtotals', datemodified='$currentTime' where dinerid='$id'");
$_SESSION['msg']="Meal Prices modified !!";


}


if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from pricingmodels where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Price Info Deleted!!";
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
    <?php $query=mysqli_query($con,"select * from admins");
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
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Hello,  <?php echo $row['firstname']; ?>  </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Manage Pricing</li>
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
                                    <h3 class="section-title">Modify Pricing Models</h3>
                                    <p>You can modify pricing models here.</p>
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

                                              <div class="alert alert-info" role="alert">
                                               Note: If you change the pricing here, it'll reflect from new reservations only. This doesn't affect the pricing that was created earlier and charged for.
                                                </br> This will only affect the data from here onwards.                                               
                                             </div>
                                 <form method="post">
                                            <?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select dinertype.dinerid as dineid, upper(dinertype.dinername) as dinename,pricingmodels.id as did,
pricingmodels.dinerid as dinersid,pricingmodels.mealprice as mprice, pricingmodels.mealtaxpercent as mpercent,
pricingmodels.mealtaxvalue as mvalue,pricingmodels.mealtotalprice as mtotals, pricingmodels.datemodified as date
 from pricingmodels join dinertype on pricingmodels.dinerid = dinertype.dinerid where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>


<div class="module-body table"> <h3 class="section-title">Diner Pricing Model</h3> <br>
<div class="form-group">
<div class="card">
<div class="card-body"><h4><?php echo  htmlentities($row['dinename']);?> Pricing</h4>
<label class="col-form-label" for="inputText3">Meal Price for <?php echo  htmlentities($row['dinename']);?> </label>
<div class="input-group mb-3">
<div class="input-group-prepend"><span class="input-group-text">$</span></div>
<input onkeyup="calculate_tax()" id="mprice" name="mprice" type="text" class="form-control" value="<?php echo  htmlentities($row['mprice']);?>" min="0" >
</div>
<label class="col-form-label" for="inputText3">Meal Tax Percent</label>
<div class="input-group mb-3">
<input onkeyup="calculate_tax()"  id="mpercent" name="mpercent" type="text" class="form-control" value="<?php echo  htmlentities($row['mpercent']);?>" min="0">
<div class="input-group-append"><span class="input-group-text">%</span></div>
</div>
<label class="col-form-label" for="inputText3">Meal Tax Value</label>
<div class="input-group mb-3">
<input  id="mvalue" name="mvalue" type="text" class="form-control" value="<?php echo  htmlentities($row['mvalue']);?>" readonly>
<div class="input-group-append"><span class="input-group-text"></span></div>
</div>
<label class="col-form-label" for="inputText3">Total Meal Price(incl. Tax)</label>
<div class="input-group mb-3">
<input id="mtotals" name="mtotals" type="text" class="form-control" value="<?php echo  htmlentities($row['mtotals']);?>" readonly>
<div class="input-group-append"><span class="input-group-text">%</span></div>
</div>
<script type="text/javascript">
  //To dynamically change the tax as input is entered
  function calculate_tax() {
    mealprice= document.getElementById('mprice').value;
    mealtaxpercent = document.getElementById('mpercent').value;
    mealtaxvalue = mealprice*(mealtaxpercent/100);
    mealtotalprice = parseFloat(mealprice )+ parseFloat(mealtaxpercent);
    document.getElementById('mvalue').value = parseFloat(mealtaxvalue).toFixed(2);
    document.getElementById('mtotals').value = parseFloat(mealtotalprice).toFixed(2);
  }
</script>
</div>
</div>
</div>
<button type="submit" name="submit" class="btn btn-outline-dark">Submit</a>
</form>	<?php } ?>
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
		} );
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
