<?php
$total['membermealtotal'] = 0;
$total['membermealtaxvalue'] = 0;
$total['memberguestmealtaxvalue'] = 0;
$total['seat'] = 0;
$total['memberguestmealprice'] = 0;
$total['guestmealprice'] = 0;
$total['guestmealtaxvalue'] = 0;
$total['totaltaxvalues'] = 0;
$total['memberguestmealtotalprice'] = 0;
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
  <meta http-equiv="content-type" content="text/plain; charset=UTF-8" />
  <script type="text/javascript">
    var tableToExcel = (function() {
      var uri = 'data:application/vnd.ms-excel;base64,',
        template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>',
        base64 = function(s) {
          return window.btoa(unescape(encodeURIComponent(s)))
        },
        format = function(s, c) {
          return s.replace(/{(\w+)}/g, function(m, p) {
            return c[p];
          })
        }
      return function(table, name) {
        if (!table.nodeType) table = document.getElementById(table)
        var ctx = {
          worksheet: name || 'Worksheet',
          table: table.innerHTML
        }
        window.location.href = uri + base64(format(template, ctx))
      }
    })()
  </script>
  <?php
  include('header.php');
  ?>
  <script>
    function exportTableToXls(tableID) {
      var url = 'data:application/vnd.ms-excel,' + encodeURIComponent($('#' + tableID).html())
      location.href = url
      return false
    }

    function exportTableToPDF(tableId) {
      var pdfsize = 'Silver Glen - Revenue Report';
      var pdf = new jsPDF('l', 'pt', pdfsize);
      var displayDate = <?php echo json_encode($_POST) ?>;

      var header = function (data) {
        pdf.setFontSize(25);
        pdf.setTextColor(40);
        pdf.setFontStyle('normal');
        pdf.text(`SGDINES Total Revenue by Users from ${displayDate.fromdate} to ${displayDate.todate}`, data.settings.margin.bottom, 50 );
                };
      
      pdf.autoTable({
        html: '#' + tableId,
        startY: 60,
        didDrawPage : header,
        styles: {
          fontSize: 6,
          cellWidth: 'wrap'
        },
        columnStyles: {
          1: {
            columnWidth: 'auto'
          }
        }
      });

      pdf.save(pdfsize + ".pdf");
    };
  </script>
</head>

<body>
  <?php $query = mysqli_query($con, "select * from admins");
  while ($row = mysqli_fetch_array($query)) { ?>
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
            $Hour = date('G'); {
              if ($Hour >= 5 && $Hour <= 11) {
                $message = "Good Morning";
              } else if ($Hour >= 12 && $Hour <= 18) {
                $message = "Good Afternoon";
              } else if ($Hour >= 19 || $Hour <= 4) {
                $message = "Good Evening";
              }
            ?>
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="page-header">
                    <h2 class="pageheader-title"><?php echo ($message); ?>, <?php echo $row['firstname']; ?> </h2> <?php } ?>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dining Report, Free Diner Report, Takeout Report</li>
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
                    <h3 class="section-title">Dining Report, Free Diner Report, Takeout Report</h3>
                    <p>You can generate reports here.</p>
                  </div>


                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">

                      <div class="card-body">

                        </br>
                        <?php
                        $fdate = $_POST['fromdate'];
                        $tdate = $_POST['todate'];
                        ?>
                        <h5 align="center" style="color:#0e0c28">Reports from <span style="color:red"><?php echo $fdate ?></span> to <span style="color:red"><?php echo $tdate ?></span></h5> </br>
                        <div class="card-body">
                          <div class="form-group">
                            <div align="left"> Search by either filters below: </div> </br>
                            <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="First name" title="Type in a first name">
                          </div>

                          <div class="form-group">
                            <input class="form-control" type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Last name" title="Type in a last name">
                          </div>

                          <div class="form-group">
                            <input class="form-control" type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Unit Number" title="Type in the Unit Number">
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body" style="background: #0e0c28; position: center;">
                            <h1 style="color: white;">Dining Report</h1>
                          </div>
                        </div>

                        <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                              <tr>
                                <th class="center">#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Unit Number</th>
                                <th>Room Name </th>
                                <th>Table Name </th>
                                <th>Dining Date </th>
                                <th>Had Checked In?</th>
                                <th>Dish Name</th>
                                <th>Member Meal Base Price</th>
                                <th>Member Meal Tax Percent</th>
                                <th>Member Meal Tax Value</th>
                                <th>Member Guest Meal Base Price</th>
                                <th>Member Guest Meal Tax Percent</th>
                                <th>Member Guest Meal Tax Value</th>
                                <th>Guest Meal Base Price</th>
                                <th>Guest Meal Tax Percent</th>
                                <th>Guest Meal Tax Value</th>
                                <th>Total Seats </th>
                                <th>Gross Total Price (Member Total + Guest Total)</th>
                                <th>View Invoice</th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $sql = mysqli_query($con, "SELECT * FROM reservation WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' ORDER BY condono ASC");
                              $result6 = mysqli_query($con, "SELECT *  FROM freediner WHERE diningdate >= '$fdate' AND diningdate <= '$tdate'");
                              $row6 = mysqli_fetch_array($result6);
                              $row7 =  mysqli_fetch_array($sql);
                              $result55 = mysqli_query($con, "SELECT sum(grandtotal) as pickuptotalgrand , membermealprice FROM pickups WHERE diningdate >= '$fdate' AND diningdate <= '$tdate'");
                              $row55 = mysqli_fetch_array($result55);
                              $totalnumofpickup = $row55['pickuptotalgrand'] / $row55['membermealprice'];

                              $total['membermealtotal'] += $row7['membermealtotalprice'];
                              $total['membermealtaxvalue'] += $row7['membermealtaxvalue'];


                              $total['seat'] += $row7['seat'] + $row6['seat'] + $totalnumofpickup;
                              $total['memberguestmealtaxvalue'] += $row7['memberguestmealtaxvalue'];

                              $total['memberguestmealprice'] += $row7['memberguestmealprice'];
                              $total['memberguestmealtotalprice'] += $row7['memberguestmealtotalprice'];

                              $total['guestmealprice'] += $row7['guestmealprice'];
                              $total['guestmealtaxvalue'] += $row7['guestmealtaxvalue'];
                              $total['totaltaxvalues'] += $row7['guestmealtaxvalue'] + $row7['membermealtaxvalue'] + $row7['memberguestmealtaxvalue'];
                              $total['grandtotal'] += $row7['grandtotal'] + $row6['grandtotal'] + $row55['pickuptotalgrand'];
                              $cnt = 1;
                              $LinkMap[1] = 'receipt.php';
                              $LinkMap[0] = 'receipt-guest.php';
                              while ($row = mysqli_fetch_array($sql)) {
                              ?>
                                <tr>
                                  <td class="center"><?php echo $cnt; ?>.</td>
                                  <td class="hidden-xs"><?php echo $row['firstname']; ?></td>
                                  <td><?php echo $row['lastname']; ?></td>
                                  <td style="text-transform: uppercase;"><?php echo $row['condono']; ?></td>
                                  <td><?php echo $row['room']; ?></td>
                                  <td><?php echo $row['tablename']; ?></td>
                                  <td><?php echo $row['diningdate']; ?></td>
                                  <td style="font-weight: bold;text-transform: uppercase;"><?php echo htmlentities($row['isCheckedin'] ? 'Yes' : 'No'); ?></td>
                                  <td><?php echo $row['dishname']; ?></td>
                                  <td><?php
                                      if ($row['membermealprice'] != NULL) {
                                        echo '$' . $row['membermealprice'];
                                      } else {
                                        echo "";
                                      }
                                      ?></td>
                                  <td><?php
                                      if ($row['membermealtaxpercent'] != NULL) {
                                        echo $row['membermealtaxpercent'] . '%';
                                      } else {
                                        echo "";
                                      }
                                      ?></td>

                                  <td><?php
                                      if ($row['membermealtaxvalue'] != NULL) {
                                        echo '$' . $row['membermealtaxvalue'];
                                      } else {
                                        echo "";
                                      }
                                      ?></td>

                                  <!-- <td><?php
                                            if ($row['membermealtotalprice'] != NULL) {
                                              echo '$' . $row['membermealtotalprice'];
                                            } else {
                                              echo "";
                                            }
                                            ?></td> -->

                                  <td><?php
                                      if ($row['memberguestmealprice'] != NULL) {
                                        echo '$' . $row['memberguestmealprice'];
                                      } else {
                                        echo "";
                                      }
                                      ?></td>
                                  <td><?php
                                      if ($row['memberguestmealtaxpercent'] != NULL) {
                                        echo $row['memberguestmealtaxpercent'] . '%';
                                      } else {
                                        echo "";
                                      }
                                      ?></td>
                                  <td><?php
                                      if ($row['memberguestmealtaxvalue'] != NULL) {
                                        echo $row['memberguestmealtaxvalue'] . '%';
                                      } else {
                                        echo "";
                                      }
                                      ?></td>
                                  <!-- <td><?php
                                            if ($row['memberguestmealtotalprice'] != NULL) {
                                              echo '$' . $row['memberguestmealtotalprice'];
                                            } else {
                                              echo "";
                                            }
                                            ?></td> -->
                                  <td><?php if ($row['guestmealprice'] != NULL) {
                                        echo '$' . $row['guestmealprice'];
                                      } else {
                                        echo "";
                                      } ?></td>
                                  <td><?php
                                      if ($row['guestmealtaxpercent'] != NULL) {
                                        echo $row['guestmealtaxpercent'] . '%';
                                      } else {
                                        echo "";
                                      }
                                      ?></td>

                                  <td><?php if ($row['guestmealtaxvalue'] != NULL) {
                                        echo '$' . $row['guestmealtaxvalue'];
                                      } else {
                                        echo "";
                                      } ?></td>
                                  <!-- <td><?php if ($row['guestmealtotalprice'] != NULL) {
                                              echo '$' . $row['guestmealtotalprice'];
                                            } else {
                                              echo "";
                                            } ?></td> -->
                                  <td><?php echo $row['seat']; ?></td>
                                  <td><?php if ($row['grandtotal'] != NULL) {
                                        echo '$' . $row['grandtotal'];
                                      } else {
                                        echo "";
                                      } ?></td>

                                  <td> <a href="<?php echo $LinkMap[$row['guestmealprice'] != NULL ? '0' : '1']; ?>?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-outline-light">View Invoice</button></td>


                                  <?php
                                  $total['membermealtotal'] += $row['membermealtotalprice'];
                                  $total['membermealtaxvalue'] += $row['membermealtaxvalue'];
                                  $total['seat'] += $row['seat'];
                                  $total['memberguestmealtaxvalue'] += $row['memberguestmealtaxvalue'];

                                  $total['memberguestmealprice'] += $row['memberguestmealprice'];
                                  $total['memberguestmealtotalprice'] += $row['memberguestmealtotalprice'];

                                  $total['guestmealprice'] += $row['guestmealprice'];
                                  $total['guestmealtaxvalue'] += $row['guestmealtaxvalue'];
                                  $total['totaltaxvalues'] += $row['guestmealtaxvalue'] + $row['membermealtaxvalue'] + $row['memberguestmealtaxvalue'];
                                  $total['grandtotal'] += $row['grandtotal'];
                                  ?>

                                </tr>
                              <?php
                                $cnt = $cnt + 1;
                              } ?>
                              <div class="card-body border-top">
                                <div class="row">

                                  <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                    <h2 class="font-weight-normal mb-3"><span><?php echo '$' . $total['totaltaxvalues']; ?></span> </h2>
                                    <div class="mb-0 mt-3 legend-item">
                                      <span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
                                      <span class="legend-text">Total Tax Collected:</span></div>
                                  </div>
                                  <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                    <h2 class="font-weight-normal mb-3">
                                      <span><?php echo '$' . $total['grandtotal'] ?></span>
                                    </h2>
                                    <div class="text-muted mb-0 mt-3 legend-item">
                                      <span class="fa-xs text-secondary mr-1 legend-title">
                                        <i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Gross Total Revenue </span></div>
                                  </div>
                                  <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 p-3">
                                    <h4> Total Meals Served: <?php echo $total['seat']; ?></h4>
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
                  </div>



                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">

                      <div class="card-body">
                        <div class="form-group">
                          <div class="table-responsive">
                            <div class="card">
                              <div class="card-body" style="background: #0e0c28; position: center;">
                                <h1 style="color: white;">Free Diners Report</h1>
                              </div>
                            </div>

                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                              <thead>
                                <tr>
                                  <th class="center">#</th>
                                  <th>Diner Type</th>
                                  <th>Staff Name</th>
                                  <th>Order Type</th>
                                  <th>Room Name </th>
                                  <th>Table Name </th>
                                  <th>Dining Date </th>
                                  <th>Had Checked In?</th>
                                  <th>Dish Name</th>
                                  <th>Free Diner Meal Base Price</th>
                                  <th>Free Diner Meal Tax Percent</th>
                                  <th>Free Diner Meal Tax Value</th>
                                  <th>Free Diner Meal Grand Total</th>
                                  <th>Total Seats </th>
                                  <th>Sub Total</th>
                                  <th>Free Diner Discounted Grand Total</th>

                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $sqlfree = mysqli_query($con, "SELECT * FROM freediner WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' ");

                                $cnt = 1;
                                $LinkMap[1] = 'freediner-receipt.php';
                                while ($rowf = mysqli_fetch_array($sqlfree)) {
                                ?>
                                  <tr>
                                    <td class="center"><?php echo $cnt; ?>.</td>
                                    <td class="hidden-xs"><?php echo $rowf['name']; ?></td>
                                    <td class="hidden-xs"><?php echo $rowf['staffname']; ?></td>
                                    <td style="font-weight: bold;text-transform: uppercase;"><?php echo $rowf['orderType']; ?></td>
                                    <td><?php echo $rowf['room']; ?></td>
                                    <td><?php echo $rowf['tablename']; ?></td>
                                    <td><?php echo $rowf['diningdate']; ?></td>
                                    <td style="font-weight: bold;text-transform: uppercase;"><?php echo htmlentities($rowf['isCheckedin'] ? 'Yes' : 'No'); ?></td>
                                    <td><?php echo $rowf['dishname']; ?></td>
                                    <td><?php
                                        if ($rowf['freedinermealprice'] != NULL) {
                                          echo '$' . $rowf['freedinermealprice'];
                                        } else {
                                          echo "";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($rowf['freedinermealtaxpercent'] != NULL) {
                                          echo $rowf['freedinermealtaxpercent'] . '%';
                                        } else {
                                          echo "";
                                        }
                                        ?></td>

                                    <td><?php
                                        if ($rowf['freedinermealtaxvalue'] != NULL) {
                                          echo '$' . $rowf['freedinermealtaxvalue'];
                                        } else {
                                          echo "";
                                        }
                                        ?></td>

                                    <td><?php
                                        if ($rowf['freedinermealtotalprice'] != NULL) {
                                          echo '$' . $rowf['freedinermealtotalprice'];
                                        } else {
                                          echo "";
                                        }
                                        ?></td>


                                    <td><?php echo $rowf['seat']; ?></td>
                                    <td><?php if ($rowf['grandtotal'] != NULL) {
                                          echo '$' . $rowf['grandtotal'];
                                        } else {
                                          echo "";
                                        } ?></td>
                                    <td><?php if ($rowf['freedinertotal'] != NULL) {
                                          echo '$' . $rowf['freedinertotal'];
                                        } else {
                                          echo "";
                                        } ?></td>

                                    <?php
                                    $total['freedinermealtotal'] += $rowf['freedinermealtotalprice'];
                                    $total['freedinermealtaxvalue'] += $rowf['freedinermealtaxvalue'];

                                    $total['freetotal'] += $rowf['grandtotal'];
                                    ?>

                                  </tr>
                                <?php
                                  $cnt = $cnt + 1;
                                } ?>


                                <div class="card-body border-top">
                                  <div class="row">

                                    <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                      <h2 class="font-weight-normal mb-3"><span><?php echo '$' . $total['freedinermealtaxvalue']; ?></span> </h2>
                                      <div class="mb-0 mt-3 legend-item">
                                        <span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
                                        <span class="legend-text">Uncharged Total Tax:</span></div>
                                    </div>
                                    <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                      <h2 class="font-weight-normal mb-3">
                                        <span><?php echo '$' . $total['freetotal']; ?></span>
                                      </h2>
                                      <div class="text-muted mb-0 mt-3 legend-item">
                                        <span class="fa-xs text-secondary mr-1 legend-title">
                                          <i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Uncharged Gross Total </span></div>
                                    </div>
                                    <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 p-3">
                                      <h4> Total Free Meals Served: <?php echo $total['freeseat']; ?></h4>
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
                    </div>
                  </div>
                </div>
                <br /> <br />
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">

                    <div class="card-body">
                      <div class="card-body">
                        <div class="form-group">
                          <div class="table-responsive">
                            <div class="card">
                              <div class="card-body" style="background: #0e0c28; position: center;">
                                <h1 style="color: white;">Takeout Report</h1>
                              </div>
                            </div>
                            <!-- <div class="card-body">
                              <div class="form-group">
                                <div align="left"> Search by either filters below: </div> </br>
                                <input class="form-control" type="text" id="myInput4" onkeyup="myFunction4()" placeholder="First name" title="Type in a first name">
                              </div>

                              <div class="form-group">
                                <input class="form-control" type="text" id="myInput5" onkeyup="myFunction5()" placeholder="Last name" title="Type in a last name">
                              </div>

                              <div class="form-group">
                                <input class="form-control" type="text" id="myInput6" onkeyup="myFunction6()" placeholder="Unit Number" title="Type in the Unit Number">
                              </div>
                            </div> -->

                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
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
                      <div class="card">

                        <div class="card-body">
                          <div class="form-group">
                            <div class="table-responsive">
                              <div class="card">
                                <div class="card-body" style="background: #0e0c28; position: center;">
                                  <h1 style="color: white;">SGDINES Total Revenue by Users from <span style="color:white"><?php echo $fdate ?></span> to <span style="color:white"><?php echo $tdate ?></span></h1>
                                </div>
                              </div>
                              <div id="revenueByUserTableWrap">
                                <table id="revenueByUserTable" class="table table-striped table-bordered second" style="width:100%">
                                  <thead>
                                    <tr>
                                      <th class="center">#</th>
                                      <th>Firstname</th>
                                      <th>Lastname</th>
                                      <th>Unit Number</th>
                                      <th>Total Dineout Meals Consumed</th>
                                      <th>Total Dineout Net Cost</th>
                                      <th>Total Dineout Tax</th>
                                      <th>Total Takeout Meals</th>
                                      <th>Total Takeout Net Cost</th>
                                      <th>Total Takeout Tax</th>
                                      <th>Grand Total</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $sql = "SELECT COALESCE(reservation.firstname,pickups.firstname) as firstname, COALESCE(reservation.lastname,pickups.lastname) as lastname, COALESCE(reservation.condono,pickups.condono) as condono, COALESCE(memberguestmealprice,0) memberguestmealprice, COALESCE(SUM(reservation.guestno),0) as mealsconsumed, SUM(COALESCE(reservation.membermealprice,0) + COALESCE((reservation.memberguestmealprice * reservation.guestno),0) + COALESCE((reservation.guestmealprice * reservation.guestno),0)) as totDineoutNetCost, COALESCE(reservation.membermealtaxvalue, 0) + COALESCE(reservation.guestmealtaxvalue, 0) + COALESCE(reservation.memberguestmealtaxvalue, 0) as totaltax,SUM( COALESCE(reservation.membermealtaxvalue,0)+ COALESCE((reservation.memberguestmealtaxvalue * reservation.guestno),0) + COALESCE((reservation.guestmealtaxvalue * reservation.guestno),0)) as totDineoutTax, COALESCE(SUM(pickups.membermealprice),0) as takeoutNet, COALESCE(SUM(pickups.membermealtaxvalue),0) as takeoutTax, COALESCE(SUM(pickups.membermealtotalprice),0) as totalTakeout, COUNT(pickups.id) as noOfPickups FROM reservation LEFT JOIN pickups ON pickups.condono = reservation.condono where reservation.diningdate BETWEEN '$fdate' AND '$tdate' OR pickups.diningdate BETWEEN '$fdate' AND '$tdate' group by COALESCE(SUBSTRING(reservation.condono,1,4))";
                                    $sqluser = mysqli_query($con, $sql);
                                    if (empty(mysqli_fetch_array($sqluser))) {
                                      $sql = "SELECT COALESCE(reservation.firstname,pickups.firstname) as firstname, COALESCE(reservation.lastname,pickups.lastname) as lastname, COALESCE(reservation.condono,pickups.condono) as condono, COALESCE(memberguestmealprice,0) memberguestmealprice, COALESCE(SUM(reservation.guestno),0) as mealsconsumed, SUM(COALESCE(reservation.membermealprice,0) + COALESCE((reservation.memberguestmealprice * reservation.guestno),0) + COALESCE((reservation.guestmealprice * reservation.guestno),0)) as totDineoutNetCost, COALESCE(reservation.membermealtaxvalue, 0) + COALESCE(reservation.guestmealtaxvalue, 0) + COALESCE(reservation.memberguestmealtaxvalue, 0) as totaltax,SUM( COALESCE(reservation.membermealtaxvalue,0)+ COALESCE((reservation.memberguestmealtaxvalue * reservation.guestno),0) + COALESCE((reservation.guestmealtaxvalue * reservation.guestno),0)) as totDineoutTax, COALESCE(SUM(pickups.membermealprice),0) as takeoutNet, COALESCE(SUM(pickups.membermealtaxvalue),0) as takeoutTax, COALESCE(SUM(pickups.membermealtotalprice),0) as totalTakeout, COUNT(pickups.id) as noOfPickups FROM pickups LEFT JOIN reservation ON pickups.condono = reservation.condono where reservation.diningdate BETWEEN '$fdate' AND '$tdate' OR pickups.diningdate BETWEEN '$fdate' AND '$tdate' group by COALESCE(SUBSTRING(pickups.condono,1,4))";
                                      $sqluser = mysqli_query($con, $sql);
                                    }
                                    $totDineoutNet = 0;
                                    $totDineoutTax = 0;
                                    $totNoOfPickups = 0;
                                    $totTakeOutNet = 0;
                                    $totTakeoutTax = 0;
                                    $totGrandTot   = 0;
                                    $cnt = 1;
                                    while ($rowuser = mysqli_fetch_array($sqluser)) {
                                      $totDineoutNet += $rowuser['totDineoutNetCost'];
                                      $totDineoutTax += $rowuser['totDineoutTax'];
                                      $totNoOfPickups +=   $rowuser['noOfPickups'];
                                      $totTakeOutNet += $rowuser['takeoutNet'];
                                      $totTakeoutTax += $rowuser['takeoutTax'];
                                      $totGrandTot += $rowuser['totDineoutNetCost'] + $rowuser['totDineoutTax'] + $rowuser['takeoutNet'] + $rowuser['takeoutTax'];
                                    ?>
                                      <tr>
                                        <td class="center"><?php echo $cnt; ?>.</td>
                                        <td><?php echo $rowuser['firstname']; ?></td>
                                        <td><?php echo $rowuser['lastname']; ?></td>
                                        <td><?php echo $rowuser['condono']; ?></td>
                                        <td><?php echo $rowuser['mealsconsumed']; ?></td>
                                        <td><?php echo $rowuser['totDineoutNetCost']; ?></td>
                                        <td><?php echo $rowuser['totDineoutTax']; ?></td>
                                        <td><?php echo $rowuser['noOfPickups']; ?></td>
                                        <td><?php echo $rowuser['takeoutNet']; ?></td>
                                        <td><?php echo $rowuser['takeoutTax']; ?></td>
                                        <td><?php echo $rowuser['totDineoutNetCost'] + $rowuser['totDineoutTax'] + $rowuser['takeoutNet'] + $rowuser['takeoutTax']; ?></td>
                                      <?php
                                      $cnt = $cnt + 1;
                                    } ?>
                                  </tbody>
                                  <tfoot align="right">
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th><?php echo $totDineoutNet; ?></th>
                                      <th><?php echo $totDineoutTax; ?></th>
                                      <th><?php echo $totNoOfPickups; ?></th>
                                      <th><?php echo $totTakeOutNet; ?></th>
                                      <th><?php echo $totTakeoutTax; ?></th>
                                      <th><?php echo $totGrandTot; ?></th>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                              </br></br>
                              <button type="button" class="btn btn-outline-success" onClick="exportTableToXls('revenueByUserTableWrap','revenueByUserTableWrap')">Export To Excel</button>
                              <button type="button" class="btn btn-outline-primary" onclick="exportTableToPDF('revenueByUserTable')">Export To PDF</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      </br>
                      <h4>
                        <?php

                        $result1 = mysqli_query($con, "SELECT membermealtaxpercent,memberguestmealtaxpercent,membermealtaxvalue, sum(grandtotal) as membertotal FROM reservation WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' and condono NOT LIKE '%G'");
                        $row1 = mysqli_fetch_array($result1);
                        $membermealtaxpercent = $row1['membermealtaxpercent'];
                        $memberguestmealtaxpercent = $row1['memberguestmealtaxpercent'];
                        $membermealtaxvalue = $row1['membermealtaxvalue'];
                        $membertotal = $row1['membertotal'];
                        $membernetvalue = $membertotal - $membermealtaxvalue;
                        echo "<h3>Reservation Revenue: </h3></br>";
                        echo "Net Revenue (Members + MemberGuests) : " . '$' . htmlentities($membernetvalue);
                        echo "<br>Tax Percentage (Members)  : " . htmlentities($membermealtaxpercent) . '%';
                        echo "<br>Tax Percentage (MemberGuests)  : " . htmlentities($memberguestmealtaxpercent) . '%';
                        echo "<br>Tax Value (Members + MemberGuests) : " . '$' . htmlentities($membermealtaxvalue);
                        echo "<br>Gross Total Revenue (Members) : " . '$' . htmlentities($membertotal) . "</br>";

                        $result2 = mysqli_query($con, "SELECT sum(grandtotal) as guesttotal, guestmealtaxpercent, sum(guestmealtaxvalue) as guestmealtaxvalue FROM reservation WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' and condono LIKE '%G'");
                        $row2 = mysqli_fetch_array($result2);
                        $guesttotal = $row2['guesttotal'];
                        $guestmealtaxpercent = $row2['guestmealtaxpercent'];
                        $guestmealtaxvalue = $row2['guestmealtaxvalue'];
                        $guestnet = $guesttotal - $guestmealtaxvalue;

                        echo "<br>Net Revenue (Guest) : " . '$' . htmlentities($guestnet);
                        echo "<br>Tax Percentage (Guest)  : " . htmlentities($guestmealtaxpercent) . '%';
                        echo "<br>Tax Value (Guest)  : " . '$' . htmlentities($guestmealtaxvalue);
                        echo "<br>Gross Total Revenue( Guest) : " . '$' . htmlentities($guesttotal) . "</br>";

                        echo "<br>Total Meals Served : " . $total['seat'];

                        $totaltaxcollected = $membermealtaxvalue + $guestmealtaxvalue;
                        echo "<br>Total Tax Collected ( Member + MemberGuest + Guests) : " . '$' . htmlentities($totaltaxcollected);
                        echo "<br>Grand Total ( Member + MemberGuest + Guests) : " . '$' . $total['grandtotal'] . "</br>";
                        echo "<br/>";

                        $result5 = mysqli_query($con, "SELECT sum(grandtotal) as freedinertotal, sum(seat) as seats,  freedinermealtaxpercent, sum(freedinermealtaxvalue) as freedinermealtaxvalue  FROM freediner WHERE diningdate >= '$fdate' AND diningdate <= '$tdate'");
                        $row5 = mysqli_fetch_array($result5);
                        $freedinermealtaxpercent = $row5['freedinermealtaxpercent'];
                        $freedinermealtaxvalue = $row5['freedinermealtaxvalue'];
                        $freedinertotal = $row5['freedinertotal'];
                        $totseats = $row5['seats'];
                        $freedinernetvalue = $freedinertotal - $freedinermealtaxvalue;
                        echo "<h3>Free Diner Expenditure: </h3></br>";
                        echo "Net Cost (Free Diner) : " . '$' . htmlentities($freedinernetvalue);
                        echo "<br>Tax Percentage (Free Diner)  : " . htmlentities($freedinermealtaxpercent) . '%';
                        echo "<br>Total Meals Served (Free Diner)  : " . htmlentities($totseats);
                        echo "<br>Tax Value (Free Diner) : " . '$' . htmlentities($freedinermealtaxvalue);
                        echo "<br>Gross Total Cost (Free Diner) : " . '$' . htmlentities($freedinertotal) . "</br>";
                        echo "<br/>";

                        $result12 = mysqli_query($con, "SELECT sum(grandtotal) as pickuptotal, membermealprice,  membermealtaxpercent, sum(membermealtaxvalue) as membermealtaxvalue  FROM pickups WHERE diningdate >= '$fdate' AND diningdate <= '$tdate'");
                        $row12 = mysqli_fetch_array($result12);
                        $pickupmealtaxpercent = $row12['membermealtaxpercent'];
                        $pickupmealtaxvalue = $row12['membermealtaxvalue'];
                        $pickuptotal = $row12['pickuptotal'];
                        $pickupmealprice = $row12['membermealprice'];
                        $pickupnetvalue = $pickuptotal - $pickupmealtaxvalue;
                        $totalpickups = $pickuptotal / $pickupmealprice;
                        echo "<h3>Order Takeout Revenue: </h3></br>";
                        echo "Net Revenue (Takeout) : " . '$' . htmlentities($pickupnetvalue);
                        echo "<br>Tax Percentage (Takeout)  : " . htmlentities($pickupmealtaxpercent) . '%';
                        echo "<br>Total meals serverd (Takeout)  : " . htmlentities($totalpickups);
                        echo "<br>Tax Value (Takeout) : " . '$' . htmlentities($pickupmealtaxvalue);
                        echo "<br>Gross Total Revenue (Takeout) : " . '$' . htmlentities($pickuptotal) . "</br>";

                        ?>
                      </h4>


                      <script>
                        function myFunction() {
                          var input, filter, table, tr, td, i, txtValue;
                          input = document.getElementById("myInput");
                          filter = input.value.toUpperCase();
                          table = document.getElementById("example");
                          tr = table.getElementsByTagName("tr");
                          for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[1];
                            if (td) {
                              txtValue = td.textContent || td.innerText;
                              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                              } else {
                                tr[i].style.display = "none";
                              }
                            }
                          }
                        }

                        function myFunction2() {
                          var input, filter, table, tr, td, i, txtValue;
                          input = document.getElementById("myInput2");
                          filter = input.value.toUpperCase();
                          table = document.getElementById("example");
                          tr = table.getElementsByTagName("tr");
                          for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[2];
                            if (td) {
                              txtValue = td.textContent || td.innerText;
                              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                              } else {
                                tr[i].style.display = "none";
                              }
                            }
                          }
                        }

                        function myFunction3() {
                          var input, filter, table, tr, td, i, txtValue;
                          input = document.getElementById("myInput3");
                          filter = input.value.toUpperCase();
                          table = document.getElementById("example");
                          tr = table.getElementsByTagName("tr");
                          for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[3];
                            if (td) {
                              txtValue = td.textContent || td.innerText;
                              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                              } else {
                                tr[i].style.display = "none";
                              }
                            }
                          }
                        }

                        // function myFunction4() {
                        //   var input, filter, table, tr, td, i, txtValue;
                        //   input = document.getElementById("myInput4");
                        //   filter = input.value.toUpperCase();
                        //   table = document.getElementById("example");
                        //   tr = table.getElementsByTagName("tr");
                        //   for (i = 0; i < tr.length; i++) {
                        //     td = tr[i].getElementsByTagName("td")[1];
                        //     if (td) {
                        //       txtValue = td.textContent || td.innerText;
                        //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        //         tr[i].style.display = "";
                        //       } else {
                        //         tr[i].style.display = "none";
                        //       }
                        //     }
                        //   }
                        // }

                        // function myFunction5() {
                        //   var input, filter, table, tr, td, i, txtValue;
                        //   input = document.getElementById("myInput5");
                        //   filter = input.value.toUpperCase();
                        //   table = document.getElementById("example");
                        //   tr = table.getElementsByTagName("tr");
                        //   for (i = 0; i < tr.length; i++) {
                        //     td = tr[i].getElementsByTagName("td")[2];
                        //     if (td) {
                        //       txtValue = td.textContent || td.innerText;
                        //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        //         tr[i].style.display = "";
                        //       } else {
                        //         tr[i].style.display = "none";
                        //       }
                        //     }
                        //   }
                        // }

                        // function myFunction6() {
                        //   var input, filter, table, tr, td, i, txtValue;
                        //   input = document.getElementById("myInput6");
                        //   filter = input.value.toUpperCase();
                        //   table = document.getElementById("example");
                        //   tr = table.getElementsByTagName("tr");
                        //   for (i = 0; i < tr.length; i++) {
                        //     td = tr[i].getElementsByTagName("td")[4];
                        //     if (td) {
                        //       txtValue = td.textContent || td.innerText;
                        //       if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        //         tr[i].style.display = "";
                        //       } else {
                        //         tr[i].style.display = "none";
                        //       }
                        //     }
                        //   }
                        // }
                      </script>



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
            });
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