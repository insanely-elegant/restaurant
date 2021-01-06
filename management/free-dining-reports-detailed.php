<?php
$total['freedinermealtotal'] = 0;
$total['freedinermealtaxvalue'] = 0;
$total['seat'] = 0;
$total['totaltaxvalues'] = 0;
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
  <?php $query = mysqli_query($con, "select * from management");
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
                        <li class="breadcrumb-item active" aria-current="page">Free Dining Reports</li>
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
                    <h3 class="section-title">Free Dining Reports</h3>
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
                        <h5 align="center" style="color:blue">Free Dining Report from <span style="color:red"><?php echo $fdate ?></span> to <span style="color:red"><?php echo $tdate ?></span></h5> </br>
                        <div class="card-body">
                          <div class="form-group">
                        <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                              <tr>
                                <th class="center">#</th>
                                <th>Diner Type</th>
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
                                <th>Grand Total</th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $sql = mysqli_query($con, "SELECT * FROM freediner WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' ");

                              $cnt = 1;
                              $LinkMap[1] = 'receipt.php';
                              $LinkMap[0] = 'receipt-guest.php';
                              while ($row = mysqli_fetch_array($sql)) {
                              ?>
                                <tr>
                                  <td class="center"><?php echo $cnt; ?>.</td>
                                  <td class="hidden-xs"><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['room']; ?></td>
                                  <td><?php echo $row['tablename']; ?></td>
                                  <td><?php echo $row['diningdate']; ?></td>
                                  <td style="font-weight: bold;text-transform: uppercase;"><?php echo htmlentities($row['isCheckedin'] ? 'Yes' : 'No'); ?></td>
                                  <td><?php echo $row['dishname']; ?></td>
                                  <td><?php
                                      if ($row['freedinermealprice'] != NULL) {
                                        echo '$' . $row['freedinermealprice'];
                                      } else {
                                        echo "";
                                      }
                                      ?></td>
                                  <td><?php
                                      if ($row['freedinermealtaxpercent'] != NULL) {
                                        echo $row['freedinermealtaxpercent'] . '%';
                                      } else {
                                        echo "";
                                      }
                                      ?></td>

                                  <td><?php
                                      if ($row['freedinermealtaxvalue'] != NULL) {
                                        echo '$' . $row['freedinermealtaxvalue'];
                                      } else {
                                        echo "";
                                      }
                                      ?></td>

                                  <td><?php
                                            if ($row['freedinermealtotalprice'] != NULL) {
                                              echo '$' . $row['freedinermealtotalprice'];
                                            } else {
                                              echo "";
                                            }
                                            ?></td> 

                                  
                                  <td><?php echo $row['seat']; ?></td>
                                  <td><?php if ($row['grandtotal'] != NULL) {
                                        echo '$' . $row['grandtotal'];
                                      } else {
                                        echo "";
                                      } ?></td>

                      
                                  <?php
                                  $total['freedinermealtotal'] += $row['freedinermealtotalprice'];
                                  $total['freedinermealtaxvalue'] += $row['freedinermealtaxvalue'];

                                  $total['seat'] += $row['seat'];
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
                                      <span class="legend-text">Uncharged Total Tax:</span></div>
                                  </div>
                                  <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                                    <h2 class="font-weight-normal mb-3">
                                      <span><?php echo '$' . $total['grandtotal']; ?></span>
                                    </h2>
                                    <div class="text-muted mb-0 mt-3 legend-item">
                                      <span class="fa-xs text-secondary mr-1 legend-title">
                                        <i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Uncharged Gross Total </span></div>
                                  </div>
                                  <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 p-3">
                                    <h4> Total Free Meals Served: <?php echo $total['seat']; ?></h4>
                                    <p> Data shows total meals served during the period selected.
                                    </p>

                                  </div>
                                </div>
                              </div>

                            </tbody>
                          </table>
                          <?php


                        echo "<br><p style='font-size: 25px'>Total Meals Served : " . $total['seat'] . '</p>';
                        echo "<p style='font-size: 25px'>Total Tax Collected : $" . $total['freedinermealtaxvalue'] . '</p>';
                        echo "<p style='font-size: 25px'>Grand Total : $" . $total['grandtotal'] . '</p>'; ?>
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