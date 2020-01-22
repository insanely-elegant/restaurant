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
    $room=$_POST['room'];
	$table=$_POST['table'];
	$diningdate=$_POST['diningdate'];
	$diningtime=$_POST['diningtime'];
	$dishname1=$_POST['dishname1'];
	$dishname2=$_POST['dishname2'];
$sql=mysqli_query($con,"insert into weeklymenu(roomid,tableid,diningdate,diningtime,dishname1,dishname2) values('$room','$table','$diningdate','$diningtime','$dishname1','$dishname2')");
$_SESSION['msg']="Published To The Weekly Menu !!";

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

<!-- <script>
function getDiningtime(val) {
	$.ajax({
	type: "POST",
	url: "get_diningtime.php",
	data:'diningid='+val,
	success: function(data){
		$("#diningtime").html(data);
	}
	});
}
</script> -->

<script>
function getRoomtables(val) {
	$.ajax({
	type: "POST",
	url: "get_roomtables.php",
	data:'id='+val,
	success: function(data){
		$("#table").html(data);
	}
	});
}
</script>
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
                                               Tip! : Click  <a href="create-dining-dates.php" style="color: red">here</a> to create your program's dining dates and then come 
                                               back to this page and assign rooms, tables and dates to times & dishes.
                                            </div>


                                        <div>
                                        <label class="col-form-label" for="inputText3"> Select a Room</label>
                                           <select name="room" class="form-control" id="room" onChange="getRoomtables(this.value);" required>
                                            <option value="">Select a Room</option>
                                            <?php
                                             $query=mysqli_query($con,"select * from room where roomavailability = 1");
                                            while($row=mysqli_fetch_array($query))
                                           {
                                            ?>
                                          <option value="<?php echo $row['id'];?>"><?php echo $row['roomname'];?></option>
                                      <?php } ?>
                                            </select>
                                         <label class="col-form-label" for="inputText3"> Select a Table</label>
                                           <select name="table" id="table" class="form-control" id="input-select" required>
                                            <option value="">Select a Table</option>
                                            </select>
                                            </div>


                                            <label class="col-form-label" for="inputText3"> Select a Dining Date</label>
                                           <select name="diningdate" class="form-control" id="input-select" required>
                                            <option value="">Select a Date</option>
                                            <?php
                                             $query=mysqli_query($con,"select DISTINCT diningdate  from diningdates where status = 'enabled' and diningdate >= CURDATE() + INTERVAL 8 HOUR ORDER BY diningdate ASC");
                                            while($row=mysqli_fetch_array($query))
                                           {
                                            ?>
                                          <option value="<?php echo $row['diningdate'];?>"><?php echo $row['diningdate'];?></option>
                                      <?php } ?>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3">Create a Dining Time</label>
                                                 <input id="diningtime" name="diningtime" type="time" class="form-control">
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
											<th>Room</th>
											<th>Table Name</th>
											<th>Dining Date</th>
											<th>Dining Time</th>
											<th>Dish Name 1</th>
											<th>Dish Name 2 </th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select room.roomname as rname,tablelayout.tablename as tname, weeklymenu.diningdate as dd, weeklymenu.id as wid,
weeklymenu.diningtime as dt, 
weeklymenu.dishname1 as d1, weeklymenu.dishname2 as d2 from weeklymenu
join room on room.id=weeklymenu.roomid join tablelayout on tablelayout.id=weeklymenu.tableid");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['rname']);?></td>
											<td><?php echo htmlentities($row['tname']);?></td>
											<td><?php echo htmlentities($row['dd']);?></td>
											<td><?php echo htmlentities($row['dt']);?></td>
											<td><?php echo htmlentities($row['d1']);?></td>
											<td><?php echo htmlentities($row['d2']);?></td>
											<td>
                                                <!-- <a href="edit-dining-program.php?id=<?php echo $row['wid']?>" class="btn btn-sm btn-outline-light">Edit</button> -->
                                            <a href="create-dining-program.php?id=<?php echo $row['wid']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-outline-light">
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