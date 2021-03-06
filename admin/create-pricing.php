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
<h2 class="pageheader-title"><?php echo($message); ?>,  <?php echo $row['firstname']; ?>  </h2> <?php } ?>
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
                                    <h3 class="section-title">Manage Pricing Models</h3>
                                    <p>You can manage pricing models here.</p>
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
                                               Tip! : You can manage pricing structure and tax models for 3 types of users: Diners, Guests and Free Diners. </br>
                                               Free Diners is set to default price of $0 and total tax charged as $0, so its not visible here.
                                               </br>Note: If you change the pricing here, it'll reflect from new reservations only. </br>This doesn't affect the pricing that was created earlier and charged for.
                                                </br> This will only affect the data from here onwards.                                               
                                             </div>
                                 <div class="module-body table"> <h3 class="section-title">Diner Pricing Model</h3> <br>
                            
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Diner Type</th>
											<th>Diner Meal Price</th>
											<th>Diner Tax Percent</th>
											<th>Diner Tax Value</th>
											<th>Diner Total Price</th>
											<th>Date Last Modified</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select dinertype.dinerid as dineid, upper(dinertype.dinername) as dinename,pricingmodels.id as did,
pricingmodels.dinerid as dinersid,pricingmodels.mealprice as mprice, pricingmodels.mealtaxpercent as mpercent,
pricingmodels.mealtaxvalue as mvalue,pricingmodels.mealtotalprice as mtotals, pricingmodels.datemodified as date
 from pricingmodels join dinertype on pricingmodels.dinerid = dinertype.dinerid and dinertype.dinername!='freediner'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['dinename']);?></td>
											<td><?php echo htmlentities($row['mprice']);?></td>
											<td><?php echo htmlentities($row['mpercent']);?></td>
											<td><?php echo htmlentities($row['mvalue']);?></td>
											<td><?php echo htmlentities($row['mtotals']);?></td>
											<td><?php echo htmlentities($row['date']);?></td>
											<td>
                                           <a href="modify-pricing.php?id=<?php echo $row['dineid']?>" class="btn btn-sm btn-outline-light">MODIFY PRICING</button> 
                                            </button>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
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