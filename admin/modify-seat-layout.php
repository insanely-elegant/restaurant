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
$tid=intval($_GET['tid']);
if(isset($_POST['submit']))
{

	$s1=$_POST['s1'];
	$s2=$_POST['s2'];
	$s3=$_POST['s3'];
	$s4=$_POST['s4'];
	$s5=$_POST['s5'];
	$s6=$_POST['s6'];
	$s7=$_POST['s7'];
	$s8=$_POST['s8'];
	$s9=$_POST['s9'];
	$s10=$_POST['s10'];
	$s11=$_POST['s11'];
	$s12=$_POST['s12'];
	$s13=$_POST['s13'];
	$s14=$_POST['s14'];
	$s15=$_POST['s15'];
	$s16=$_POST['s16'];
	$s17=$_POST['s17'];
	$s18=$_POST['s18'];
	$s19=$_POST['s19'];
	$s20=$_POST['s20'];
	$tavail=$_POST['tavail'];

$sql=mysqli_query($con,"insert into seatlayout(tableid,s1,s2,s3,
s4,s5,s6,s7,
s8,s9,s10,s11,s12,s13,s14,s15,s16,
s17,s18,s19,s20,
tableavailability) values('$tid','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10',
'$s11','$s12','$s13','$s14','$s15','$s16','$s17','$s18','$s19','$s20','$tavail')");
$_SESSION['msg']="Seat Layout Created Successfully !!";

}


if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from seatlayout where id = '".$_GET['tid']."'");
                  $_SESSION['delmsg']="Table Layout deleted !!";
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
                                            <li class="breadcrumb-item active" aria-current="page">Manage Table Layout</li>
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
                                    <h3 class="section-title">Create Table Layout</h3>
                                    <p>You can define the table layout here.</p>
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
                                      	<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($con,"select tablelayout.id as tid,tablelayout.roomid as trid,
tablelayout.totaltables as totals,
tablelayout.tablename1 as t1,tablelayout.tablename2 as t2,
tablelayout.tablename3 as t3,tablelayout.tablename4 as t4,
tablelayout.tablename5 as t5,tablelayout.tablename6 as t6,
tablelayout.tablename7 as t7,tablelayout.tablename8 as t8,
tablelayout.tablename9 as t9,tablelayout.tablename10 as t10,
tablelayout.tablename11 as t11,tablelayout.tablename12 as t12,
tablelayout.tablename13 as t13,tablelayout.tablename14 as t14,
tablelayout.tablename15 as t15,tablelayout.tablename16 as t16,
tablelayout.tablename17 as t17,tablelayout.tablename18 as t18,
tablelayout.tablename19 as t19,tablelayout.tablename20 as t20,
seatlayout.s1 as s1,seatlayout.s2 as s2,
seatlayout.s3 as s3,seatlayout.s4 as s4,
seatlayout.s5 as s5,seatlayout.s6 as s6,
seatlayout.s7 as s7,seatlayout.s8 as s8,
seatlayout.s9 as s9,seatlayout.s10 as s10,
seatlayout.s11 as s11,seatlayout.s12 as s12,
seatlayout.s13 as s13,seatlayout.s14 as s14,
seatlayout.s15 as s15,seatlayout.s16 as s16,
seatlayout.s17 as s17,seatlayout.s18 as s18,
seatlayout.s19 as s19,seatlayout.s20 as s20,tablelayout.productimage1 as pimage,tablelayout.tableavailability as tavail,
room.id as rid, room.roomname as rname from tablelayout join room on tablelayout.roomid=room.id join seatlayout on tablelayout.id=seatlayout.tableid where tablelayout.id='$tid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>

<div class="alert alert-warning" role="alert">
                                              Warning! : Only Enter Total Seats to the Table Names that are present. Leave blank for everything else.
                                              </br>  If you see just an update button, that means you haven't defined or created any total seats. To create seats, please go back or click  <a href="create-seat-layout-2.php?tid=<?php echo $row['tid']?>" class="btn btn-sm btn-outline-light">here </a> to create total seats.
                                            </div>


<div class="form-group">
<label for="inputText3" class="col-form-label">Selected Room:</label>
<div class="controls">
<input type="text"    name="totals"  placeholder="Room Name" value="<?php echo htmlentities($row['rname']);?>" class="form-control" disabled style="font-size: 20px;">
</div>
</div>



<div class="form-group">
<label for="inputText3" class="col-form-label">Total Tables</label>
<div class="controls">
<input type="text"    name="totals"  placeholder="Total Tables" value="<?php echo htmlentities($row['totals']);?>" class="form-control" disabled >
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Table 1 Name</label>
<div class="controls">
<input type="text"    name="t1"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t1']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 1</label>
<div class="controls">
<input type="text"    name="s1"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s1']);?>"  class="form-control" >
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Table 2 Name</label>
<div class="controls">
<input type="text"    name="t2"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t2']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 1</label>
<div class="controls">
<input type="text"    name="s2"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s2']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 3 Name</label>
<div class="controls">
<input type="text"    name="t3"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t3']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 3</label>
<div class="controls">
<input type="text"    name="s3"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s3']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 4 Name</label>
<div class="controls">
<input type="text"    name="t4"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t4']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 4</label>
<div class="controls">
<input type="text"    name="s4"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s4']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 5 Name</label>
<div class="controls">
<input type="text"    name="t5"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t5']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 5</label>
<div class="controls">
<input type="text"    name="s5"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s5']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 6 Name</label>
<div class="controls">
<input type="text"    name="t6"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t6']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 6</label>
<div class="controls">
<input type="text"    name="s6"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s6']);?>"  class="form-control" >
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Table 7 Name</label>
<div class="controls">
<input type="text"    name="t7"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t7']);?>" class="form-control" disabled>
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 7</label>
<div class="controls">
<input type="text"    name="s7"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s7']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 8 Name</label>
<div class="controls">
<input type="text"    name="t8"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t8']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 8</label>
<div class="controls">
<input type="text"    name="s8"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s8']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 9 Name</label>
<div class="controls">
<input type="text"    name="t9"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t9']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 9</label>
<div class="controls">
<input type="text"    name="s9"  placeholder="Enter  Seats" value="<?php echo htmlentities($row['s9']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 10 Name</label>
<div class="controls">
<input type="text"    name="t10"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t10']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 10</label>
<div class="controls">
<input type="text"    name="s10"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s10']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 11 Name</label>
<div class="controls">
<input type="text"    name="t11"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t11']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 11</label>
<div class="controls">
<input type="text"    name="s11"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s11']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 12 Name</label>
<div class="controls">
<input type="text"    name="t12"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t12']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 12</label>
<div class="controls">
<input type="text"    name="s12"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s12']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 13 Name</label>
<div class="controls">
<input type="text"    name="t13"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t13']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 13</label>
<div class="controls">
<input type="text"    name="s13"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s13']);?>"  class="form-control" >
</div>
</div>
<div class="form-group">
<label for="inputText3" class="col-form-label">Table 14 Name</label>
<div class="controls">
<input type="text"    name="t14"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t14']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 14</label>
<div class="controls">
<input type="text"    name="s14"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s14']);?>"  class="form-control" >
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Table 15 Name</label>
<div class="controls">
<input type="text"    name="t15"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t15']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 15</label>
<div class="controls">
<input type="text"    name="s15"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s15']);?>"  class="form-control" >
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Table 16 Name</label>
<div class="controls">
<input type="text"    name="t16"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t16']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 16</label>
<div class="controls">
<input type="text"    name="s16"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s16']);?>"  class="form-control" >
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Table 17 Name</label>
<div class="controls">
<input type="text"    name="t17"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t17']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 17</label>
<div class="controls">
<input type="text"    name="s17"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s17']);?>"  class="form-control" >
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Table 18 Name</label>
<div class="controls">
<input type="text"    name="t18"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t18']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 18</label>
<div class="controls">
<input type="text"    name="s18"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s18']);?>"  class="form-control" >
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Table 19 Name</label>
<div class="controls">
<input type="text"    name="t19"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t19']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 19</label>
<div class="controls">
<input type="text"    name="s19"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s19']);?>"  class="form-control" >
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Table 20 Name</label>
<div class="controls">
<input type="text"    name="t20"  placeholder="-NOT-APPLICABLE-" value="<?php echo htmlentities($row['t20']);?>" class="form-control" disabled>
</div>
</div>

<div class="form-group">
<label for="inputText3" class="col-form-label">Total Seats in Table 20</label>
<div class="controls">
<input type="text"    name="s20"  placeholder="Enter Total Seats" value="<?php echo htmlentities($row['s20']);?>"  class="form-control" >
</div>
</div>



<div class="form-group">
<label for="inputText3" class="col-form-label">Table Availability / Visibility</label>
<div class="controls">
<select   name="tavail"  id="tavail" class="form-control" required>
<option value="<?php echo htmlentities($row['tavail']);?>"><?php echo htmlentities($row['tavail'] ? 'Currently Showing as: Available' : 'Currently Showing as: Unavailable');?></option>
<option value="1">Available</option>
<option value="0">Unavailable</option>
</select>
</div>
</div>

<!-- <div class="form-group">
<label for="inputText3" class="col-form-label">Table Layout Image</label>
<div class="controls">
<img src="productimages/<?php echo $row['tid'];?>/<?php echo htmlentities($row['pimage']);?>" width="400" height="300"> <a href="update-image.php?tid=<?php echo $row['tid'];?>">Change Image</a>
</div>
</div> -->

<?php } ?>
	<div class="form-group">
											<div class="controls">
												<button type="submit" name="submit"  class="btn btn-outline-dark">Update</button>
											</div>
										</div>
									</form>
                                    </div>
                                
                                </div></div>
                                 <div class="module-body table"> <h3 class="section-title">Tables</h3> <br>
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Room Name</th>
											<th>Total Tables</th>
											<th>Visibility to users</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select tablelayout.id as tid,tablelayout.roomid as trid,
tablelayout.totaltables as totals,
tablelayout.tablename1 as t1,tablelayout.tablename2 as t2,
tablelayout.tablename3 as t3,tablelayout.tablename4 as t4,
tablelayout.tablename5 as t5,tablelayout.tablename6 as t6,
tablelayout.tablename7 as t7,tablelayout.tablename8 as t8,
tablelayout.tablename9 as t9,tablelayout.tablename10 as t10,
tablelayout.tablename11 as t11,tablelayout.tablename12 as t12,
tablelayout.tablename13 as t13,tablelayout.tablename14 as t14,
tablelayout.tablename15 as t15,tablelayout.tablename16 as t16,
tablelayout.tablename17 as t17,tablelayout.tablename18 as t18,
tablelayout.tablename19 as t19,tablelayout.tablename20 as t20,tablelayout.productimage1 as pimage,tablelayout.tableavailability as tavail,
room.id as rid, room.roomname as rname from tablelayout join room on tablelayout.roomid=room.id");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['rname']);?></td>
											<td><?php echo htmlentities($row['totals']);?></td>									
											<td><?php echo htmlentities($row['tavail'] ? 'yes' : 'no');?></td>
											<td>
                                                <!-- <a href="edit-dining-program.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-outline-light">Edit</button> -->
                                            <a href="create-table-layout.php?tid=<?php echo $row['tid']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-outline-light">
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