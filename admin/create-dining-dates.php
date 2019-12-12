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
	$diningdate=$_POST['diningdate'];
	$diningtime=$_POST['diningtime'];
	$status="enabled";
$sql=mysqli_query($con,"insert into diningdates(diningdate,diningtime,status) values('$diningdate','$diningtime','$status')");
$_SESSION['msg']="New Dining Date & Time Enabled !!";

}

if(isset($_GET['disable']))
		  {
		          mysqli_query($con,"update diningdates set status= 'disabled' where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Selected Date Disabled !!";
		  }
if(isset($_GET['enable']))
		  {
		          mysqli_query($con,"update diningdates set status= 'enabled' where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Selected Date Re-Enabled !!";
          }
if(isset($_GET['delete']))
		  {
		          mysqli_query($con,"delete from diningdates where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Selected Date and Time Destroyed Permanently !!";
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
                                                <p>You can create the dining program date and timings for the week here and enable them or disable them. <br> If you are finished 
                                    with a date, please disable them from here to prevent further bookings from this date and time. <br> </p>
                                                <hr>
                                                <p class="mb-0">If you select the DESTROY button, the dates and associated time will be permanently removed from all the records <br>made on the system, that includes reports and dining history.</p>
                                            </div>
                                  
                                </div>
                                <?php if(isset($_POST['submit']))
{?>
									 <div class="alert alert-success" role="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['disable']))
{?>
									 <div class="alert alert-danger" role="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

        	<?php if(isset($_GET['enable']))
{?>
									 <div class="alert alert-success" role="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

	<?php if(isset($_GET['delete']))
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
                                                <label for="inputText3" class="col-form-label">Date</label>
                                                <input name="diningdate" type="date" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3">Time</label>
                                                 <input name="diningtime" type="time" class="form-control">
                                            </div>
                                             
                                            <button type="submit" name="submit" class="btn btn-outline-dark">Insert into calendar</a>
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
											<th>Dining Time</th>
                                            <th>Date Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from diningdates");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['diningdate']);?></td>
											<td><?php echo htmlentities($row['diningtime']);?></td>
											<td><?php echo htmlentities($row['status']);?></td>
											<td>
                                                <!-- <a href="edit-dining-dates.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-light">Edit</button> -->
                                            <a href="create-dining-dates.php?id=<?php echo $row['id']?>&disable=disable" onClick="return confirm('Are you sure you want to disable this date & time?')" class="btn btn-sm btn-outline-light">Disable
                                                <i class="fas fa-ban"></i> 
                                                <a href="create-dining-dates.php?id=<?php echo $row['id']?>&enable=enable" onClick="return confirm('Are you sure you want to re-enable this date & time?')" class="btn btn-sm btn-outline-light">Re-Enable
                                                <i class="fas fa-check-circle"></i> 
                                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: red;">DESTROY</a>
                                                <!-- <a href="create-dining-dates.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Warning: THIS IS A DESTRUCTIVE ACTION. Are you sure you want to DESTROY this date? You will no longer have access to any data made from this date including any reports.')" class="btn btn-sm btn-outline-light">Destroy -->
                                                <!-- <i class="far fa-trash-alt"></i>  -->
                                                
                                            </button>
										</tr>
									
										
                                      
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">WARNING!</h5>
                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p><h2>THIS IS A DESTRUCTIVE ACTION.</h2> <h3>Are you sure you want to DESTROY this date? </h3></br> <h3>You will no longer have access to any data made from this date including any reports or financials. </br>This action is not reversible!</h3></p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="#" class="btn btn-secondary" data-dismiss="modal" style="background-color: blue;">Cancel & Go Back</a>
                                                                <a href="create-dining-dates.php?id=<?php echo $row['id']?>&delete=delete" class="btn btn-primary" style="background-color: red;" onClick="return confirm('DELETE PERMANENTLY?')" >CONFIRM DELETE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                         
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