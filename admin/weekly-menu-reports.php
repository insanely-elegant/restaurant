<?php

session_start();
include('includes/config.php');
// if(strlen($_SESSION['alogin'])==0)
// 	{	
// header('location:index.php');
// }
// else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );



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
                                            <li class="breadcrumb-item active" aria-current="page">Weekly Menu</li>
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
                                    <h3 class="section-title">Weekly Menu</h3>
                                     <p>You can Print Weekly Menu from here.</p>
                                </div>
                               
                                <div class="card">
                                    <div class="card-body">
                                        <div class="panel-body">
									
													<form role="form" method="post" action="weekly-menu-reports-detailed.php">
														<div class="form-group">
															<label for="exampleInputPassword1">
																 From Date:
															</label>
					<input type="date" class="form-control" name="fromdate" id="fromdate" value="" required='true'>
														</div>
		
													<div class="form-group">
															<label for="exampleInputPassword1">
																 To Date::
															</label>
					 <input type="date" class="form-control" name="todate" id="todate" value="" required='true'>

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