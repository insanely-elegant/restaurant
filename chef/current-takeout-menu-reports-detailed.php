<?php
   session_start();
   include('includes/config.php');
   // if(strlen($_SESSION['alogin'])==0)
   //   {   
   // header('location:index.php');
   // }
   // else{
   date_default_timezone_set('America/Los_Angeles'); // change according timezone
   $currentTime = date('d-m-Y h:i:s A', time());
   
   
   //Function to format date
   //If date is real, return format version of it, otherwhyse it return empty string
   function formatData($date)
   {
       if (!empty($date))
           return (date("l", strtotime($date)) . " " . date("m/d", strtotime($date)));
       else
           return '';
   }
   
   ?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title id='title'>Silver Glen Takeout Menu</title>
      <meta http-equiv="content-type" content="text/plain; charset=UTF-8" />
      <link href="assets/libs/css/print.css" media="print" rel="stylesheet" type="text/css" />   
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
      <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
}
        
        </script>
      <?php
         include('header.php');
         ?>
   </head>
   <body style="-webkit-print-color-adjust: exact;">
      <?php $query = mysqli_query($con, "select * from chef");
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
                     <h2 class="pageheader-title"><?php echo ($message); ?>, <?php echo $row['chefname']; ?> </h2>
                     <?php } ?>
                     <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Weekly Menu</li>
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
                     <h3 class="section-title">Takeout Menu Reports</h3>
                     <p>You can Print Takeout Menu from here.</p>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <div class="panel-body">
                           <div class="row">
                              <div class="col-md-12">
                                 </br>
                                 <input class="btn btn-o black" type="button" onclick="tableToExcel('sample-table-1', 'W3C Example Table')" value="Export to Excel"></br> </br>
                                 <input class="btn btn-o black" type="button" onclick="printDiv('printTable')" value="Print Weekly menu">
                                 <?php
                                    $fdate = $_POST['fromdate'];
                                    $tdate = $_POST['todate'];
                                    
                                    ?>
                                 <h5 align="center" style="color:black">Takeout Menu from the current week.</h5>
                                 </br>
                                 <div id="printTable">
                                 <table class="table table-striped table-hover table-bordered table-responsive" id="sample-table-1">
                                    <caption style="font-size:large;color:black;"> Takeout Menu from the current week. </caption>
                                    <?php
/*                                       $sql = mysqli_query($con, "SELECT DISTINCT pickupweeklymenu.pickupdate as dd, pickupweeklymenu.dishname1 as d1,
                                        pickupweeklymenu.dishname2 as d2,dish1.dishdescription as ddesc1,dish2.dishdescription as ddesc2,pickupweeklymenu.roomid as rid, room.id as roomid, room.roomname as rname
                                           FROM pickupweeklymenu join room on pickupweeklymenu.roomid = room.id JOIN dish as dish1 ON pickupweeklymenu.dishname1 = dish1.dishname 
                                           JOIN dish as dish2 ON pickupweeklymenu.dishname2 = dish2.dishname WHERE pickupweeklymenu.pickupdate >= '$fdate' AND pickupweeklymenu.pickupdate <= '$tdate' ORDER BY pickupweeklymenu.pickupdate ASC");*/

                                       $sql = mysqli_query($con, "SELECT DISTINCT pickupweeklymenu.pickupdate as dd, pickupweeklymenu.dishname1 as d1,
                                        pickupweeklymenu.dishname2 as d2,dish1.dishdescription as ddesc1,dish2.dishdescription as ddesc2,pickupweeklymenu.roomid as rid, room.id as roomid, room.roomname as rname
                                           FROM pickupweeklymenu LEFT join room on pickupweeklymenu.roomid = room.id JOIN dish as dish1 ON pickupweeklymenu.dishname1 = dish1.dishname 
                                           JOIN dish as dish2 ON pickupweeklymenu.dishname2 = dish2.dishname WHERE WEEKOFYEAR(pickupweeklymenu.pickupdate) = WEEKOFYEAR(NOW()) ORDER BY pickupweeklymenu.pickupdate ASC");


                                       $cnt = 1;
                                       //Save data to local variable
                                       $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
                                       $noOfDays = count($data); //Check how many columns I need. If > 5 I will need to recreate the table
                                       $noOfIteration = intdiv($noOfDays, 5) + 1; //Counting how many iteration
                                       if ($noOfDays % 5 == 0)
                                           $noOfIteration -= 1;
                                       for ($i = 0; $i < $noOfIteration; $i++) { //Iterate Whole Table as much as necessary 
                                           $step = 5 * $i;
                                       ?>
                                    <thead style="background-color:#154e84 !important;">
                                       <tr>
                                          <th class="table-heading" colspan="6" style="font-size:x-large;text-align: center;color: white !important;background-color: black !important;">SILVER GLEN WEEKLY MENU</th>
                                       </tr>
                                       <tr>
                                          <th></th>
                                          <th style="font-size:x-large;color:white !important;background-color: navy !important;"><?php if (!empty($data[0 + $step])) echo (formatData($data[0 + $step]['dd'])); ?></th>
                                          <th style="font-size:x-large;color:white !important;background-color: navy !important;"><?php if (!empty($data[1 + $step])) echo (formatData($data[1 + $step]['dd'])); ?></th>
                                          <th style="font-size:x-large;color:white !important;background-color: navy !important;"><?php if (!empty($data[2 + $step])) echo (formatData($data[2 + $step]['dd'])); ?></th>
                                          <th style="font-size:x-large;color:white !important;background-color: navy !important;"><?php if (!empty($data[3 + $step])) echo (formatData($data[3 + $step]['dd'])); ?></th>
                                          <th style="font-size:x-large;color:white !important;background-color: navy !important;"><?php if (!empty($data[4 + $step])) echo (formatData($data[4 + $step]['dd'])); ?></th>
                                       </tr>
                                    </thead>
                                    <!--Table head-->
                                    <!--Table body-->
                                    <tbody>
                                       <tr class="table-row" style="font-size:x-large;color: black !important; background-color:#ADD8E6 !important;">
                                          <th scope="row">1</th>
                                          <td><?php if (!empty($data[0 + $step])) echo (($data[0 + $step]['d1'])); ?></td>
                                          <td><?php if (!empty($data[1 + $step])) echo (($data[1 + $step]['d1'])); ?></td>
                                          <td><?php if (!empty($data[2 + $step])) echo (($data[2 + $step]['d1'])); ?></td>
                                          <td><?php if (!empty($data[3 + $step])) echo (($data[3 + $step]['d1'])); ?></td>
                                          <td><?php if (!empty($data[4 + $step])) echo (($data[4 + $step]['d1'])); ?></td>
                                       </tr>
                                       <tr  class="table-row1" style="font-size:large;color: black !important;background-color:white !important;">
                                          <td></td>
                                          <td><?php if (!empty($data[0 + $step])) echo (($data[0 + $step]['ddesc1'])); ?></td>
                                          <td><?php if (!empty($data[1 + $step])) echo (($data[1 + $step]['ddesc1'])); ?></td>
                                          <td><?php if (!empty($data[2 + $step])) echo (($data[2 + $step]['ddesc1'])); ?></td>
                                          <td><?php if (!empty($data[3 + $step])) echo (($data[3 + $step]['ddesc1'])); ?></td>
                                          <td><?php if (!empty($data[4 + $step])) echo (($data[4 + $step]['ddesc1'])); ?></td>
                                       </tr>
                                       <tr class="table-row2" style="font-size:x-large;color: black !important;background-color:#ADD8E6 !important;">
                                          <th scope="row">2</th>
                                          <td><?php if (!empty($data[0 + $step])) echo (($data[0 + $step]['d2'])); ?></td>
                                          <td><?php if (!empty($data[1 + $step])) echo (($data[1 + $step]['d2'])); ?></td>
                                          <td><?php if (!empty($data[2 + $step])) echo (($data[2 + $step]['d2'])); ?></td>
                                          <td><?php if (!empty($data[3 + $step])) echo (($data[3 + $step]['d2'])); ?></td>
                                          <td><?php if (!empty($data[4 + $step])) echo (($data[4 + $step]['d2'])); ?></td>
                                       </tr>
                                       <tr class="table-row1" style="font-size:large;color: black !important;background-color:white !important;">
                                          <td></td>
                                          <td><?php if (!empty($data[0 + $step])) echo (($data[0 + $step]['ddesc2'])); ?></td>
                                          <td><?php if (!empty($data[1 + $step])) echo (($data[1 + $step]['ddesc2'])); ?></td>
                                          <td><?php if (!empty($data[2 + $step])) echo (($data[2 + $step]['ddesc2'])); ?></td>
                                          <td><?php if (!empty($data[3 + $step])) echo (($data[3 + $step]['ddesc2'])); ?></td>
                                          <td><?php if (!empty($data[4 + $step])) echo (($data[4 + $step]['ddesc2'])); ?></td>
                                       </tr>
                                    </tbody>
                                    <?php
                                       $cnt = $cnt + 1;
                                       } ?>
                                 </table>
                                 </div>
                                 <script type=" text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
                                 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
                                 <script type="text/javascript">
                                    function Export() {
                                        html2canvas(document.getElementById('sample-table-1'), {
                                            onrendered: function(canvas) {
                                                var data = canvas.toDataURL();
                                                var docDefinition = {
                                                    content: [{
                                                        image: data,
                                                        width: 500
                                                    }]
                                                };
                                                pdfMake.createPdf(docDefinition).download("Table.pdf");
                                            }
                                        });
                                    }
                                 </script>
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