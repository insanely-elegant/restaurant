<?php

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

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title id='title'>Silver Glen Weekly Menu</title>
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
                                        <h3 class="section-title">Weekly Menu Reports</h3>
                                        <p>You can Print Weekly Menu from here.</p>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        </br>
                                                        <input class="btn btn-o black" type="button" onclick="tableToExcel('sample-table-1', 'W3C Example Table')" value="Export to Excel"></br> </br>
                                                        <input class="btn btn-o black" id="btnExport" type="button" onclick="Export()" value="Print"></br> </br>
                                                        <?php
                                                        $fdate = $_POST['fromdate'];
                                                        $tdate = $_POST['todate'];

                                                        ?>
                                                        <h5 align="center" style="color:blue">Weekly Menu from <?php echo $fdate ?> to <?php echo $tdate ?></h5> </br>

                                                        <table class="table table-hover" id="sample-table-1">
                                                            <thead>
                                                                <tr>
                                                                    <th class="center">#</th>
                                                                    <th>Dining Date</th>
                                                                    <th>Dish 1</th>
                                                                    <th>Dish 2 </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php

                                                                $sql = mysqli_query($con, "SELECT DISTINCT weeklymenu.diningdate as dd, weeklymenu.dishname1 as d1, weeklymenu.dishname2 as d2,weeklymenu.roomid as rid, room.id as roomid, room.roomname as rname
 FROM weeklymenu join room on weeklymenu.roomid = room.id WHERE weeklymenu.diningdate >= '$fdate' AND weeklymenu.diningdate <= '$tdate'");
                                                                $cnt = 1;
                                                                while ($row = mysqli_fetch_array($sql)) {
                                                                ?>
                                                                    <tr>
                                                                        <td class="center"><?php echo $cnt; ?>.</td>
                                                                        <td class="hidden-xs"><?php echo $row['dd']; ?></td>
                                                                        <td><?php echo $row['d1']; ?></td>
                                                                        <td><?php echo $row['d2']; ?>
                                                                        </td>
                                                                        <td>



                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                    $cnt = $cnt + 1;
                                                                } ?></tbody>
                                                        </table>

                                                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
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