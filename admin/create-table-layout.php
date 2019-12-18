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
	$roomid=$_POST['roomid'];
	$totaltables=$_POST['totaltables'];
    $tablename1=$_POST['tablename1'];
	$tablename2=$_POST['tablename2'];
	$tablename3=$_POST['tablename3'];
	$tablename4=$_POST['tablename4'];
	$tablename5=$_POST['tablename5'];
	$tablename6=$_POST['tablename6'];
	$tablename7=$_POST['tablename7'];
	$tablename8=$_POST['tablename8'];
	$tablename9=$_POST['tablename9'];
	$tablename10=$_POST['tablename10'];
	$tablename11=$_POST['tablename11'];
	$tablename12=$_POST['tablename12'];
	$tablename13=$_POST['tablename13'];
	$tablename14=$_POST['tablename14'];
	$tablename15=$_POST['tablename15'];
	$tablename16=$_POST['tablename16'];
	$tablename17=$_POST['tablename17'];
	$tablename18=$_POST['tablename18'];
	$tablename19=$_POST['tablename19'];
	$tablename20=$_POST['tablename20'];
	$tableavailability=$_POST['tableavailability'];
	$productimage1=$_FILES["productimage1"]["name"];
//for getting product id
$query=mysqli_query($con,"select max(id) as pid from tablelayout");
	$result=mysqli_fetch_array($query);
	 $productid=$result['pid']+1;
	$dir="productimages/$productid";
if(!is_dir($dir)){
		mkdir("productimages/".$productid);
	}

	move_uploaded_file($_FILES["productimage1"]["tmp_name"],"productimages/$productid/".$_FILES["productimage1"]["name"]);
$sql=mysqli_query($con,"insert into tablelayout(roomid,totaltables,
tablename1,tablename2,tablename3,
tablename4,tablename5,tablename6,tablename7,
tablename8,tablename9,tablename10,tablename11,tablename12,tablename13,tablename14,tablename15,tablename16,
tablename17,tablename18,tablename19,tablename20,
tableavailability,productimage1) values('$roomid','$totaltables','$tablename1','$tablename2','$tablename3','$tablename4','$tablename5','$tablename6','$tablename7','$tablename8','$tablename9','$tablename10','$tablename11','$tablename12','$tablename13','$tablename14','$tablename15','$tablename16','$tablename17','$tablename18','$tablename19','$tablename20','$tableavailability','$productimage1')");
$_SESSION['msg']="Table Layout Created Successfully !!";

}


if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from tablelayout where id = '".$_GET['tid']."'");
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
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Hello,  <?php echo $row['firstname']; ?>  </h2>
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
                                            <div class="form-group">
                                          
                                            <div class="alert alert-info" role="alert">
                                               Tip! : Please Ensure you upload a clear image. Members will be seeing the image you upload here.
                                            </div>
                                            <label class="col-form-label" for="inputText3"> Select the Room</label>
                                           <select name="roomid" class="form-control" id="input-select" required>
                                            <option value="">Select the Room</option>
                                            <?php
                                             $query=mysqli_query($con,"select * from room");
                                            while($row=mysqli_fetch_array($query))
                                           {?>
                                          <option value="<?php echo $row['id'];?>"><?php echo $row['roomname'];?></option>
                                      <?php } ?>
                                            </select>
                                           
                                         

                                            
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Number of Tables</label>
                                                <select name="totaltables" class="form-control" id="input-select" required>
                                            <option value="">Select the Total Tables</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                          <option value="13">13</option>
                                          <option value="14">14</option>
                                          <option value="15">15</option>
                                          <option value="16">16</option>
                                          <option value="17">17</option>
                                          <option value="18">18</option>
                                          <option value="19">19</option>
                                          <option value="20">20</option>
                                            </select>
                                            </div>
                                           
                                            <div class="form-group" id="div1">
                                            <label class="col-form-label" for="inputText3">Table Name/Number</label>
                                           <input name="tablename1" type="text" class="form-control">
                                            </select>
                                            </div>
                                             <div class="form-group" id="div2">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename2" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div3">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename3" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div4">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename4" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div5">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename5" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div6">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename6" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div7">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename7" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div8">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename8" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div9">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename9" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div10">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename10" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div11">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename11" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div12">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename12" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div13">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename13" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div14">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename14" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div15">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename15" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div16">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename16" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div17">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename17" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div18">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename18" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div19">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename19" type="text" class="form-control" value="">
                                            </div>
                                             <div class="form-group" id="div20">
                                                <label for="inputText3" class="col-form-label">Table Name/Number {leave blank if not applicable}</label>
                                                 <input name="tablename20" type="text" class="form-control" value="">
                                            </div>
                        
                                        <div class="form-group">
                                        <label class="col-form-label" for="inputText3">Table Availability / Visibility</label>
                                        <div class="controls">
                                        <select  name="tableavailability"  id="tableavailability" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
                                        </select>
                                        </div>
                                        </div>

<div class="control-group">
<label class="control-label" for="basicinput">Table Image</label>
<div class="controls">
<input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
</div>
</div> </br>

                                            <button type="submit" name="submit" class="btn btn-outline-dark">Create Table Layout</a>
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

<?php $query=mysqli_query($con,"select tablelayout.id as tid,tablelayout.tableavailability as available, tablelayout.roomid as trid,tablelayout.productimage1 as tableimage,tablelayout.totaltables as totals,room.id as rid, room.roomname as rname from tablelayout join room on room.id=tablelayout.roomid;");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['rname']);?></td>
											<td><?php echo htmlentities($row['totals']);?></td>									
											<td><?php echo htmlentities($row['available'] ? 'yes' : 'no');?></td>
											<td>
                                                <!-- <a href="edit-dining-program.php?id=<?php echo $row['tid']?>" class="btn btn-sm btn-outline-light">Edit</button> -->
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