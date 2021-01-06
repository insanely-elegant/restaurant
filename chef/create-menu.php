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


if(isset($_POST['submit']))
{
    $dishname=mysqli_real_escape_string($con,$_POST['dishname']);
	$dishdescription=mysqli_real_escape_string($con,$_POST['dishdescription']);
$sql=mysqli_query($con,"insert into dish(dishname,dishdescription) values('$dishname','$dishdescription')");
$_SESSION['msg']="New Menu Item Created !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from dish where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Menu Item deleted !!";
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
    <?php $query=mysqli_query($con,"select * from chef");
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
                                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Create, Edit & Manage Menu Items</li>
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
                                    <h3 class="section-title">Create Menu</h3>
                                    <p>You can create the menu here by dish name</p>
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
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Dish Name</label>
                                                <input id="inputText3" name="dishname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Dish Description</label>
                                                <textarea class="form-control" name="dishdescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-outline-dark">Insert into menu</a>
                                        </form>
                                    </div>
                                
                                </div>
                                 <div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Dish Name</th>
											<th>Dish Description</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from dish");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['dishname']);?></td>
											<td><?php echo htmlentities($row['dishdescription']);?></td>
											<td>
                                                <a href="edit-menu.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-light">Edit</button>
                                            <a href="create-menu.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-outline-light">
                                                <i class="far fa-trash-alt"></i>
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