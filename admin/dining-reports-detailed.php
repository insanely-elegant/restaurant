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
                        <li class="breadcrumb-item active" aria-current="page">Dining Reports</li>
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
                    <h3 class="section-title">Dining Reports</h3>
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
                        <h5 align="center" style="color:blue">Dining Report from <span style="color:red"><?php echo $fdate ?></span> to <span style="color:red"><?php echo $tdate ?></span></h5> </br>
                        <div class="card-body">
                          <div class="form-group">
                            <div align="left"> Search by either filters below: </div> </br>
                            <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="First name" title="Type in a first name">
                          </div>

                          <div class="form-group">
                            <input class="form-control" type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Last name" title="Type in a last name"></div>

                          <div class="form-group">
                            <input class="form-control" type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Unit Number" title="Type in the Unit Number"></div>
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
                                <th>Total Seats </th>
                                <th>Dining Date </th>
                                <th>Had Checked In?</th>
                                <th>Dish Name</th>
                                <th>Member Meal Base Price</th>
                                <th>Member Meal Tax Percent</th>
                                <th>Member Meal Tax Value</th>
                                <th>Member Meal Grand Total</th>
                                <th>Member Guest Meal Base Price</th>
                                <th>Member Guest Meal Tax Percent</th>
                                <th>Member Guest Meal Tax Value</th>
                                <th>Member Guest Meal Grand Total</th>
                                <th>Guest Meal Base Price</th>
                                <th>Guest Meal Tax Percent</th>
                                <th>Guest Meal Tax Value</th>
                                <th>Guest Meal Grand Total</th>
                                <th>Gross Total Price (Member Total + Guest Total)</th>
                                <th>View Invoice</th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php

                              $sql = mysqli_query($con, "SELECT * FROM reservation WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' ORDER BY condono ASC");
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
                                  <td><?php echo $row['seat']; ?></td>
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

                                  <td><?php
                                      if ($row['membermealtotalprice'] != NULL) {
                                        echo '$' . $row['membermealtotalprice'];
                                      } else {
                                        echo "";
                                      }
                                      ?></td>

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
                                  <td><?php
                                      if ($row['memberguestmealtotalprice'] != NULL) {
                                        echo '$' . $row['memberguestmealtotalprice'];
                                      } else {
                                        echo "";
                                      }
                                      ?></td>
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
                                  <td><?php if ($row['guestmealtotalprice'] != NULL) {
                                        echo '$' . $row['guestmealtotalprice'];
                                      } else {
                                        echo "";
                                      } ?></td>
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
                                      <span><?php echo '$' . $total['grandtotal']; ?></span>
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
                          <?php
                          echo "Net Revenue (Members) : " . '$' . $total['membermealtotal'];
                          echo "<br>Net Tax Value (Members) :" . '$' . $total['membermealtaxvalue'] . "</br>";

                          echo "<br>Net Revenue (Member Guest) : " . '$' . $total['memberguestmealtotalprice'];
                          echo "<br>Net Tax Value (Member Guest) : " . '$' . $total['memberguestmealtaxvalue'] . "</br>";

                          echo "<br>Guest Price Net Total : " . '$' . $total['guestmealprice'];
                          echo "<br>Guest Meal Tax Value : " . '$' . $total['guestmealtaxvalue'];
                          echo "<br>Total Meals Served : " . $total['seat'];
                          echo "<br>Grand total : " . '$' . $total['grandtotal']; ?>
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
                          </script>


                        </div>
                      </div>
                    </div>
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