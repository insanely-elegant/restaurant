<?php
error_reporting(0);
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
// 	{	
// header('location:index.php');
// }
// else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
	$chefname=$_POST['chefname'];
	$contactno=$_POST['contactno'];
	$altcontactno=$_POST['altcontactno'];
	$email=$_POST['email'];
	$password=$_POST['password'];
$sql=mysqli_query($con,"insert into chef(chefname,contactno,altcontactno,email,password) values('$chefname','$contactno','$altcontactno','$email','$password')");
$_SESSION['msg']="New Chef Profile & Account Created !!";

}

if(isset($_GET['nos']))
		  {
		          mysqli_query($con,"insert into reservation(isCheckedin) values(0) where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Marked as No Show!";
		  }

if(isset($_GET['chk']))
		  {
		          mysqli_query($con,"insert into reservation(isCheckedin) values(1) where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Marked as No Show!";
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
    <?php $query=mysqli_query($con,"select * from host");
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
                                <h2 class="pageheader-title">Hello,  <?php echo $row['hostname']; ?>  </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">View Guest Lists</li>
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
                                    <h3 class="section-title">View Guest Lists </h3>
                                    <p>You can view the list of guests here</p>
                                </div>
									 <div class="alert alert-success" role="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['nos']))
{?>
									 <div class="alert alert-danger" role="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

                                 <div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Room Name</th>
											<th>Table Name</th>
											<th>Seat</th>
                                            <th>Date</th>
                                            <th>Guest No</th>
                                            <th>Condo No</th>
                                            <th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from reservation");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['firstname']);?></td>
											<td><?php echo htmlentities($row['lastname']);?></td>
											<td><?php echo htmlentities($row['room']);?></td>
											<td><?php echo htmlentities($row['tablename']);?></td>
                                            <td><?php echo htmlentities($row['seat']);?></td>
                                            <td><?php echo htmlentities($row['timestamp']);?></td>
                                            <td><?php echo htmlentities($row['guestno']);?></td>
                                            <td><?php echo htmlentities($row['condono']);?></td>
											<td>
                                                <a href="guestlist.php?id=<?php echo $row['id']?>&chk=checkin" class="btn btn-sm btn-outline-light">Checkin</button>
                                            <a href="guestlist.php?id=<?php echo $row['id']?>&nos=noshow" onClick="return confirm('Are you sure you want to mark no show?')" class="btn btn-sm btn-outline-light">
                                                NoShow
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

<?php  ?>
</html>
<?php
// }
?>