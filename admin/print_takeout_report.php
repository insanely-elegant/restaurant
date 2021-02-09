<?php

$fdate = $_GET['f_date'];
$tdate = $_GET['t_date'];
?>
<?php
$total['membermealtotal'] = 0;
$total['membermealtaxvalue'] = 0;
$total['seat'] = 0;
$total['guestmealprice'] = 0;
$total['guestmealtaxvalue'] = 0;
$total['totaltaxvalues'] = 0;
$total['grandtotal'] = 0;
$total['freedinermealtotal'] = 0;
$total['freedinermealtaxvalue'] = 0;
$total['freeseat'] = 0;
$total['freetotal'] = 0;
session_start();
include('includes/config.php');
// if(strlen($_SESSION['alogin'])==0)
// 	{
// header('location:index.php');
// }
// else{
date_default_timezone_set('America/Los_Angeles'); // change according timezone
$currentTime = date('d-m-Y h:i:s A', time());


?>
<!doctype html>
<html lang="en">

<head>
 
  <?php
  include('header.php');
  ?>

</head>

<body onload="window.print();">
  <?php $query = mysqli_query($con, "select * from admins");
  while ($row = mysqli_fetch_array($query)) { ?>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="">
      <!-- ============================================================== -->
      <!-- navbar -->
      <!-- ============================================================== -->
      <?php
      ?>
      <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->


              <!-- ============================================================== -->
              <!-- end pageheader  -->
              <!-- ============================================================== -->
            
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">

                    <div class="card-body">
                      <div class="card-body">
                        <div class="form-group">
                          <div class="">
                            <div class="card">
							

                              <div class="card-body" style="background: #0e0c28; position: center;">
                                <h1 style="color: white;">Takeout Report</h1>
                              </div>
                            </div>

                            <table id="take_out_report" class="table table-striped table-bordered" style="width:100%">

                              <thead>
                                <tr>
                                  <th class="center">#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Diner Type</th>
                                  <th>Condono</th>
                                  <th>Takeout Date</th>
                                  <th>Takeout Time</th>
                                  <th>Dish</th>
                                  <th>Pickedup?</th>
                                  <th>Pickup Meal Price</th>
                                  <th>Pickup Meal Tax</th>
                                  <th>Pickup Meal Tax Value</th>
                                  <th>Pickup Meal Total Price</th>
                                  <th>Grand Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php

                                $sql = mysqli_query($con, "SELECT * from pickups WHERE diningdate >= '$fdate' AND diningdate <= '$tdate'");
                                $cnt = 1;
                                while ($rowt = mysqli_fetch_array($sql)) {
                                ?>
                                  <tr>
                                    <td class="center"><?php echo $cnt; ?>.</td>
                                    <td class="hidden-xs"><?php echo $rowt['firstname']; ?></td>
                                    <td class="hidden-xs"><?php echo $rowt['lastname']; ?></td>
                                    <td class="hidden-xs"><?php echo $rowt['dinerType']; ?></td>
                                    <td class="hidden-xs"><?php echo $rowt['condono']; ?></td>
                                    <td class="hidden-xs"><?php echo $rowt['diningdate']; ?></td>
                                    <td class="hidden-xs"><?php echo $rowt['diningtime']; ?></td>
                                    <td><?php echo $rowt['dishname']; ?></td>
                                    <td style="font-weight: bold;text-transform: uppercase;"><?php echo htmlentities($rowt['isPickedup'] ? 'Yes' : 'No'); ?></td>
                                    <td><?php echo $rowt['membermealprice']; ?></td>
                                    <td><?php echo $rowt['membermealtaxpercent']; ?></td>
                                    <td><?php echo $rowt['membermealtaxvalue']; ?></td>
                                    <td><?php echo $rowt['membermealtotalprice']; ?></td>
                                    <td><?php echo $rowt['grandtotal']; ?>
                                    </td>

                                  <?php
                                  $cnt = $cnt + 1;
                                } ?>
                                  <?php
                                  $result22 = mysqli_query($con, "SELECT sum(grandtotal) as pickuptotal, membermealprice,  membermealtaxpercent, sum(membermealtaxvalue) as membermealtaxvalue  FROM pickups WHERE diningdate >= '$fdate' AND diningdate <= '$tdate'");
                                  $row22 = mysqli_fetch_array($result22);
                                  $pickupmealtaxpercent = $row22['membermealtaxpercent'];
                                  $pickupmealtaxvalue = $row22['membermealtaxvalue'];
                                  $pickuptotal = $row22['pickuptotal'];
                                  $pickupmealprice = $row22['membermealprice'];
                                  $pickupnetvalue = $pickuptotal - $pickupmealtaxvalue;
                                  $totalpickups = $pickuptotal / $pickupmealprice;

                                  ?>
                                  </tr>

                                  <div class="card-body border-top">
                                    <div class="row">

                                      <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                        <h2 class="font-weight-normal mb-3"><span><?php echo '$' . htmlentities($pickupmealtaxvalue); ?></span> </h2>
                                        <div class="mb-0 mt-3 legend-item">
                                          <span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
                                          <span class="legend-text">Total Tax collected:</span></div>
                                      </div>
                                      <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                        <h2 class="font-weight-normal mb-3">
                                          <span><?php echo '$' . htmlentities($pickuptotal); ?></span>
                                        </h2>
                                        <div class="text-muted mb-0 mt-3 legend-item">
                                          <span class="fa-xs text-secondary mr-1 legend-title">
                                            <i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Gross Total charged: </span></div>
                                      </div>
                                      <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 p-3">
                                        <h4> Total Takeout Meals: <?php echo htmlentities($totalpickups); ?></h4>
                                        <p> Data shows total meals served during the period selected.
                                        </p>

                                      </div>
                                    </div>
                                  </div>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
   

                      </br>
            </div>
          <!-- ============================================================== -->
          <!-- footer -->
          <!-- ============================================================== -->
          <?php
          include('footer.php');

          ?>

</body>

<script type="text/javascript">
	window.onload = function() { window.print(); }
</script>
<?php } ?>

</html>
<?php
// }
?>
