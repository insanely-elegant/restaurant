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
	$dishname1=$_POST['dishname1'];
	$dishname2=$_POST['dishname2'];
$sql=mysqli_query($con,"insert into weeklymenu(diningdate,diningtime,dishname1,dishname2) values('$diningdate','$diningtime','$dishname1','$dishname2')");
$_SESSION['msg']="New Dish Published To The Weekly Menu !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from weeklymenu where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Weekly Menu Item deleted !!";
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
                                            <li class="breadcrumb-item active" aria-current="page">Manage Dining Program</li>
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
                                    <h3 class="section-title">Create Dining Program</h3>
                                    <p>You can create the menu for the week here</p>
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
                                          
                                            <div class="alert alert-info" role="alert">
                                               Tip! : You can select the date and time that was entered <a href="create-dining-program.php">here</a> and attach
                                               2 dishes to that period.
                                            </div>
                                       <label class="col-form-label" for="inputText3"> Select a Dining Date</label>
                                           <select name="diningdate" class="form-control" id="input-select" required>
                                            <option value="">Select a Date</option>
                                            <?php
                                             $query=mysqli_query($con,"select * from diningdates where status = 'enabled'");
                                            while($row=mysqli_fetch_array($query))
                                           {?>
                                          <option value="<?php echo $row['diningdate'];?>"><?php echo $row['diningdate'];?></option>
                                      <?php } ?>
                                            </select>
                                            
                                            
                                            <label class="col-form-label" for="inputText3"> Select a Dining Time</label>
                                           <select name="diningtime" class="form-control" id="input-select" required>
                                            <option value="">Select a Time</option>
                                            <?php
                                             $query=mysqli_query($con,"select * from diningdates where status = 'enabled'");
                                            while($row=mysqli_fetch_array($query))
                                           {?>
                                          <option value="<?php echo $row['diningtime'];?>"><?php echo $row['diningtime'];?></option>
                                      <?php } ?>
                                            </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Dish Name 1</label>
                                                 <select name="dishname1" class="form-control" id="input-select" required>
                                            <option value="">Select a Dish</option>
                                            <?php
                                             $query=mysqli_query($con,"select * from dish");
                                            while($row=mysqli_fetch_array($query))
                                           {?>
                                          <option value="<?php echo $row['dishname'];?>"><?php echo $row['dishname'];?></option>
                                      <?php } ?>
                                            </select>
                                            </div>

                                             <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Dish Name 2</label>
                                                 <select name="dishname2" class="form-control" id="input-select" required>
                                            <option value="">Select a Dish</option>
                                            <?php
                                             $query=mysqli_query($con,"select * from dish");
                                            while($row=mysqli_fetch_array($query))
                                           {?>
                                          <option value="<?php echo $row['dishname'];?>"><?php echo $row['dishname'];?></option>
                                      <?php } ?>
                                            </select>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-outline-dark">Publish The Menu!</a>
                                        </form>
                                    </div>
                                
                                </div>
                                 <div class="module-body table"> <h3 class="section-title">Weekly Menu</h3> <br>
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Dining Date</th>
											<th>Dining Time</th>
											<th>Dish Name 1</th>
											<th>Dish Name 2 </th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from weeklymenu");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['diningdate']);?></td>
											<td><?php echo htmlentities($row['diningtime']);?></td>
											<td><?php echo htmlentities($row['dishname1']);?></td>
											<td><?php echo htmlentities($row['dishname2']);?></td>
											<td>
                                                <!-- <a href="edit-dining-program.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-light">Edit</button> -->
                                            <a href="create-dining-program.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-outline-light">
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