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


if(isset($_POST['submit']))
{
    $roomname=$_POST['roomname'];
	$totaltables=$_POST['totaltables'];
	$roomavailability=$_POST['roomavailability'];
	$productimage1=$_FILES["productimage1"]["name"];
//for getting product id
$query=mysqli_query($con,"select max(id) as pid from room");
	$result=mysqli_fetch_array($query);
	 $productid=$result['pid']+1;
	$dir="productimages/$productid";
if(!is_dir($dir)){
		mkdir("productimages/".$productid);
	}

move_uploaded_file($_FILES["productimage1"]["tmp_name"],"productimages/$productid/".$_FILES["productimage1"]["name"]);
$sql=mysqli_query($con,"insert into room(roomname,totaltables,roomavailability,productimage1) values('$roomname','$totaltables','$roomavailability','$productimage1')");
$_SESSION['msg']="New Room Added!!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from room where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Room Permanently Deleted!!";
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
                                            <li class="breadcrumb-item active" aria-current="page">Create Room</li>
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
                                    <h3 class="section-title">Create Room</h3>
                                    <p>You can add & remove the rooms here on which tables are to be set.</p>
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
                                        <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data" >
                                            <div class="form-group">
                                          
                                            <div class="alert alert-info" role="alert">
                                               Tip! : The rooms you add here will be displayed under the drop down when you create table layouts! 
                                               </br>Note: If you change the room name here, it'll reflect everywhere immediately. </br>This doesn't affect the data that was created when the 
                                               Tables and reservations already made before making adjustments here. </br> This will only affect the data from here onwards.
                                               </br> To Disable the Room, Please headover to the dates that you wish to disable the room and set Visibility Status to "Disabled".
                                                    </br>Note: When Uploading a new Image, please ensure that the file name has no spaces or special characters. It must be one word.
                                            </div>
                                            <label class="col-form-label" for="inputText3">Create New Room Name</label>
                                            <input id="inputText3" name="roomname" type="text" class="form-control">
                                            </div>
                        <div class="form-group"> 
                            <label class="col-form-label" for="inputText3">Total Tables in this Room</label>
                            <input id="inputText3" name="totaltables" type="text" class="form-control">
                            </div>
                                                                    <div class="form-group">
                            <div class="control-group">
                            <label class="control-label" for="basicinput">Room / Table Image</label>
                            <div class="controls">
                            <input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
                            </div>
                            </div> </div>

                                        <div class="form-group">
                                        <label class="col-form-label" for="inputText3">Room Availability / Visibility</label>
                                        <div class="controls">
                                        <select  name="roomavailability"  id="roomavailability" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
                                        </select>
                                        </div>
                                        </div>
</br>
                                            <button type="submit" name="submit" class="btn btn-outline-dark">Submit</a>
                                        </form>
                                    </div>
                                
                                </div>
                                 <div class="module-body table"> <h3 class="section-title">Available Rooms</h3> <br>
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Room Name</th>
											<th>Total Tables</th>
                                            <th>Table Image</th>
											<th>Visibility to users</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from room");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['roomname']);?></td>
											<td><?php echo htmlentities($row['totaltables']);?></td>
                                            <td><a href="productimages/<?php echo $row['id'];?>/<?php echo htmlentities($row['productimage1']);?> ">View Image</a></td>
                                            <td><?php echo htmlentities($row['roomavailability'] ? 'yes' : 'no');?></td>
											<td>
                                                <!-- <a href="edit-dining-program.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-light">Edit</button> -->
                                            <a href="create-room.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-outline-light">
                                               DELETE PERMANENTLY <i class="far fa-trash-alt"></i>
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