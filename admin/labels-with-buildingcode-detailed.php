<?php
error_reporting(0);
session_start();
include('includes/config.php');
// if(strlen($_SESSION['login'])==0)
// 	{	
// header('location:index.php');
// }
// else{
date_default_timezone_set('Asia/Kolkata'); // change according timezone
$currentTime = date('d-m-Y h:i:s A', time());

?>
<!doctype html>
<html lang="en">

<head>
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
      var pdfsize = 'Silver Glen - Takeout Label';
      var pdf = new jsPDF('l', 'pt', pdfsize);
      var displayDate = <?php echo json_encode($_POST) ?>;

      var header = function(data) {
        pdf.setFontSize(25);
        pdf.setTextColor(40);
        pdf.setFontStyle('normal');
        pdf.text(`Takeout Label from ${displayDate.fromdate} to ${displayDate.todate}`, data.settings.margin.bottom, 30);
      };

      pdf.autoTable({
        html: '#' + tableId,
        startY: 60,
        didDrawPage: header,
        styles: {
          fontSize: 15,
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
                        <li class="breadcrumb-item active" aria-current="page">Print Takeout Labels</li>
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
                    <h3 class="section-title">Print Takeout Labels </h3>
                    <p>You can print takeout labels here</p>
                  </div>
                  <?php if (isset($_GET['checkin'])) { ?>
                    <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
                    </div>

                  <?php } ?>

                  <?php if (isset($_GET['noshow'])) { ?>
                    <div class="alert alert-danger" role="alert">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
                    </div>
                  <?php } ?>
                  <?php
                  $fdate = $_POST['fromdate'];
                  $tdate = $_POST['todate'];
                  $unitno = $_POST['unitno'];
                  ?>
                  <div class="card">
                    <div class="card-body" style="background: #0e0c28; position: center;">
                      <h1 style="color: white;">Takeout Labels from <span style="color:red"><?php echo $fdate ?></span> to <span style="color:red"><?php echo $tdate ?></span> of Units Matching : <span style="color: GREEN"><?php echo $unitno ?> </span></h1>
                    </div>
                  </div>
                  <button type="button" class="btn btn-outline-success" onClick="exportTableToXls('revenueByUserTableWrap','revenueByUserTableWrap')">Export To Excel</button>
                  <button type="button" class="btn btn-outline-primary" onclick="exportTableToPDF('revenueByUserTable')">Export To PDF</button>

                  </br></br>
                  <div id="revenueByUserTableWrap" class="table-responsive-xl">
                    <table id="revenueByUserTable" class="table table-striped table-responsive-lg table-bordered" style="width:100%">
                      <thead>

                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Unit No</th>
                          <th>Meal Choice</th>
                          <th>Check</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $query = mysqli_query($con, "select firstname,lastname,dishname,condono from pickups WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' AND condono LIKE '$unitno%' ORDER BY condono ASC");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                          <tr>
                            <td><?php echo htmlentities($cnt); ?></td>
                            <td><?php echo htmlentities($row['firstname']); ?></td>
                            <td><?php echo htmlentities($row['lastname']); ?></td>
                            <td style="text-transform: uppercase;"><?php echo $row['condono']; ?></td>
                            <td style="text-transform: uppercase;"><?php echo htmlentities($row['dishname']); ?></td>
                            <td></td>
                          </tr>
                        <?php $cnt = $cnt + 1;
                        } ?>

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