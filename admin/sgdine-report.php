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
        <meta http-equiv="content-type" content="text/plain; charset=UTF-8" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
                                                    pdf.text(`SGDINES Total Revenue by Users from ${displayDate.fromdate} to ${displayDate.todate}`, data.settings.margin.bottom, 30);
                                                    };
                                                    pdf.autoTable({
                                                    html: '#' + tableId,
                                                            startY: 100,
                                                            didDrawPage : header,
                                                            styles: {
                                                            fontSize: 6,
                                                                    cellWidth: 'wrap'
                                                            },
                                                            columnStyles: {
                                                            1: {
                                                            columnWidth: 'auto'
                                                            }
                                                            },
                                                            showHead: 'everyPage',
                                                    });
                                                    pdf.save(pdfsize + ".pdf");
                                                    };
        </script>
    </head>

    <body>
        <?php
        $query = mysqli_query($con, "select * from admins");
        while ($row = mysqli_fetch_array($query)) {
            ?>
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

                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="table-responsive">
                                                            <div class="card">
                                                                <div class="card-body" style="background: #0e0c28; position: center;">
                                                                    <h1 style="color: white;">SGDINES Total Revenue by Users from <span style="color:white"><?php echo $fdate ?></span> to <span style="color:white"><?php echo $tdate ?></span></h1>
                                                                </div>
                                                            </div>
                                                            <div id="revenueByUserTableWrap">
                                                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="center">#</th>
                                                                            <th>Firstname</th>
                                                                            <th>Lastname</th>
                                                                            <th>Unit Number</th>
                                                                            <th>Total Dinein Meals Consumed</th>
                                                                            <th>Total Dinein Net Cost</th>
                                                                            <th>Total Dinein Tax</th>
                                                                            <th>Total Takeout Meals</th>
                                                                            <th>Total Takeout Net Cost</th>
                                                                            <th>Total Takeout Tax</th>
                                                                            <th>Grand Total</th>
                                                                        </tr>
                                                                    </thead>
                                  <!--                                  <tbody>-->
                                                                    <!--                                    --><?php
//                                    $user_sql = "select * from users";
//                                    $user_res = mysqli_query($con, $user_sql);
//                                    $tot_tol_Dine_in_meal_consumes=0;
//                                    $tot_tot_dine_in_net_cost =0;
//                                    $tot_tot_dine_in_tax =0;
//                                    $tot_tot_takeout_meals = 0;
//                                    $tot_tot_takeout_net_cost=0;
//                                    $tot_tot_takeout_tax=0;
//                                    $tot_grand_total =0;
//                                    $cnt = 1;
//
//                                    while ($user_row = mysqli_fetch_assoc($user_res)){
//                                    $first_name = $user_row['firstname'];
//                                    $last_name = $user_row['lastname'];
//                                    $unit_no = $user_row['unitno'];
//
//                                    //Sql query for finding 'Total Dinein Meals Consumed' of specific user
//                                        $sql_tol_Dine_in_meal_consumes = "SELECT sum(seat) FROM `reservation` WHERE firstname='$first_name' AND lastname='$last_name'";
//                                        $res_tol_Dine_in_meal_consumes = mysqli_query($con,$sql_tol_Dine_in_meal_consumes);
//                                        $row_tol_Dine_in_meal_consumes = mysqli_fetch_assoc($res_tol_Dine_in_meal_consumes);
//
//                                     //Sql query for finding 'Total Dinein Net Cost' of specific user
//                                        $sql_tot_Dine_in_net_cost = "SELECT SUM(grandtotal) FROM reservation WHERE firstname='$first_name' and lastname = '$last_name'";
//                                        $res_tot_Dine_in_net_cost = mysqli_query($con,$sql_tot_Dine_in_net_cost);
//                                        $row_tot_Dine_in_net_cost = mysqli_fetch_assoc($res_tot_Dine_in_net_cost);
//
//                                    //Sql query for finding 'Total Dinein Tax' of specific user
//                                        $sql_guest_meal_tax_value = "SELECT SUM(guestmealtaxvalue) FROM reservation WHERE firstname='$first_name' and lastname = '$last_name'";
//                                        $res_guest_meal_tax_value = mysqli_query($con,$sql_guest_meal_tax_value);
//                                        $row_guest_meal_tax_value = mysqli_fetch_assoc($res_guest_meal_tax_value);
//                                    $sql_member_meal_tax_value = "SELECT SUM(membermealtaxvalue) FROM reservation WHERE firstname='$first_name' and lastname = '$last_name'";
//                                    $res_member_meal_tax_value = mysqli_query($con,$sql_member_meal_tax_value);
//                                    $row_member_meal_tax_value = mysqli_fetch_assoc($res_member_meal_tax_value);
//
//                                    //Sql query for finding 'Total Takeout Meals' of specific user
//                                    $sql_tot_takeout_meals = "SELECT count(*) as total_record FROM `pickups` WHERE firstname='$first_name' and lastname='$last_name'";
//                                    $res_tot_takeout_meals = mysqli_query($con,$sql_tot_takeout_meals);
//                                    $row_tot_takeout_meals = mysqli_fetch_assoc($res_tot_takeout_meals);
//
//                                    //Sql query for finding the 'Total Take out net cost' of specific user
//                                    $sql_tot_takeout_net_cost = "SELECT sum(grandtotal) FROM `pickups` WHERE firstname='$first_name' AND lastname='$last_name'";
//                                    $res_tot_takeout_net_cost = mysqli_query($con,$sql_tot_takeout_net_cost);
//                                    $row_tot_takeout_net_cost=mysqli_fetch_assoc($res_tot_takeout_net_cost);
//                                    //Sql query for finding the 'Total Take out tax' of specific user
//                                        $sql_tot_takeout_tax = "SELECT sum(membermealtaxvalue) FROM `pickups` WHERE firstname='$first_name' AND lastname='$last_name'";
//                                        $res_tot_takeout_tax = mysqli_query($con,$sql_tot_takeout_tax);
//                                        $row_tot_takeout_tax = mysqli_fetch_assoc($res_tot_takeout_tax);
//
//
//
//                                    //                                    while ($rowuser = mysqli_fetch_array($sqluser)) {
////                                      $totDineoutNet += $rowuser['totDineoutNetCost'];
////                                      $totDineoutTax += $rowuser['totDineoutTax'];
////                                      $totNoOfPickups +=   $rowuser['noOfPickups'];
////                                      $totTakeOutNet += $rowuser['takeoutNet'];
////                                      $totTakeoutTax += $rowuser['takeoutTax'];
////                                      $totGrandTot += $rowuser['totDineoutNetCost'] + $rowuser['totDineoutTax'] + $rowuser['takeoutNet'] + $rowuser['takeoutTax'];
//                                    
                                                                    ?>
                                                                    <!--                                      <tr>-->
                                                                    <!--                                        <td class="center">--><?php //echo $cnt;   ?><!--.</td>-->
                                                                    <!--                                        <td>--><?php //echo $first_name;   ?><!--</td>-->
                                                                    <!--                                        <td>--><?php //echo $last_name;   ?><!--</td>-->
                                                                    <!--                                        <td>--><?php //echo $unit_no;   ?><!--</td>-->
                                                                    <!--                                        <td>--><?php //echo $row_tol_Dine_in_meal_consumes['sum(seat)'];   ?><!--</td>-->
                                                                    <!--                                        <td>--><?php //echo $row_tot_Dine_in_net_cost['SUM(grandtotal)'];   ?><!--</td>-->
                                                                    <!--                                        <td>--><?php //echo $row_member_meal_tax_value['SUM(membermealtaxvalue)'] + $row_guest_meal_tax_value['SUM(guestmealtaxvalue)'];   ?><!--</td>-->
                                                                    <!--                                        <td>--><?php //echo $row_tot_takeout_meals['total_record'];   ?><!--</td>-->
                                                                    <!--                                        <td>--><?php //echo $row_tot_takeout_net_cost['sum(grandtotal)'];    ?><!--</td>-->
                                                                    <!--                                        <td>--><?php //echo $row_tot_takeout_tax['sum(membermealtaxvalue)']    ?><!--</td>-->
                                                                    <!--                                        <td>--><?php //echo $row_tot_Dine_in_net_cost['SUM(grandtotal)'] + $row_tot_takeout_net_cost['sum(grandtotal)']     ?><!--</td>-->
                                                                    <!--                                      --><?php
//                                      $cnt = $cnt + 1;
//                                      $tot_tol_Dine_in_meal_consumes =$tot_tol_Dine_in_meal_consumes + $row_tol_Dine_in_meal_consumes['sum(seat)'];
//                                      $tot_tot_dine_in_net_cost = $tot_tot_dine_in_net_cost+  $row_tot_Dine_in_net_cost['SUM(grandtotal)'];
//                                      $tot_tot_dine_in_tax = $tot_tot_dine_in_tax + $row_member_meal_tax_value['SUM(membermealtaxvalue)'] + $row_guest_meal_tax_value['SUM(guestmealtaxvalue)'];
//                                      $tot_tot_takeout_meals = $tot_tot_takeout_meals + $row_tot_takeout_meals['total_record'];
//                                      $tot_tot_takeout_net_cost= $tot_tot_takeout_net_cost + $row_tot_takeout_net_cost['sum(grandtotal)'];
//                                      $tot_tot_takeout_tax= $tot_tot_takeout_tax+$row_tot_takeout_tax['sum(membermealtaxvalue)'];
//                                      $tot_grand_total = $tot_grand_total+$row_tot_Dine_in_net_cost['SUM(grandtotal)'] + $row_tot_takeout_net_cost['sum(grandtotal)'];
//
//                                    } 
                                                                    ?>
                                                                    <!--                                  </tbody>-->


            <!--                                  <tfoot align="right">-->
            <!--                                    <tr>-->
            <!--                                      <th></th>-->
            <!--                                      <th></th>-->
            <!--                                      <th></th>-->
            <!--                                      <th></th>-->
            <!--                                      <th>--><?php //echo $tot_tol_Dine_in_meal_consumes;   ?><!--</th>-->
            <!--                                      <th>--><?php //echo $tot_tot_dine_in_net_cost;    ?><!--</th>-->
            <!--                                      <th>--><?php //echo $tot_tot_dine_in_tax;    ?><!--</th>-->
            <!--                                      <th>--><?php //echo $tot_tot_takeout_meals;    ?><!--</th>-->
            <!--                                      <th>--><?php //echo $tot_tot_takeout_net_cost;    ?><!--</th>-->
            <!--                                      <th>--><?php //echo $tot_tot_takeout_tax;    ?><!--</th>-->
            <!--                                      <th>--><?php //echo $tot_grand_total;   ?><!--</th>-->
                                                                    <!--                                    </tr>-->
                                                                    <!--                                  </tfoot>-->
                                                                </table>
                                                            </div>
                                                            </br></br>
                                                            <!--                              <button type="button" class="btn btn-outline-success" onClick="exportTableToXls('revenueByUserTableWrap','revenueByUserTableWrap')">Export To Excel</button>-->
                                                            <!--                              <button type="button" class="btn btn-outline-primary" onclick="exportTableToPDF('revenueByUserTable')">Export To PDF</button>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </br>
                                            <h4>
                                                <?php
                                                $result1 = mysqli_query($con, "SELECT membermealtaxpercent,membermealtaxvalue, sum(membermealprice) as memberprice, sum(grandtotal) as grandtotal, sum(guestmealtotalprice) as guesttotalprice  FROM reservation WHERE diningdate >= '$fdate' AND diningdate <= '$tdate' and condono NOT LIKE '%G'");
                                                $row1 = mysqli_fetch_array($result1);
                                                $membermealtaxpercent = $row1['membermealtaxpercent'];
                                                $membermealtaxvalue = $row1['membermealtaxvalue'];
                                                $membertotal = $row1['grandtotal'] - $row1['guesttotalprice'];
                                                $membernetvalue = $row1['grandtotal'] - $row1['guesttotalprice'] - $membermealtaxvalue;
                                                ;
                                                echo "<h3>Reservation Revenue: </h3></br>";
                                                echo "Net Revenue (Members ) : " . '$' . htmlentities($membernetvalue);
                                                echo "<br>Tax Percentage (Members)  : " . htmlentities($membermealtaxpercent) . '%';
                                                echo "<br>Tax Value (Members ) : " . '$' . htmlentities($membermealtaxvalue);
                                                echo "<br>Gross Total Revenue (Members) : " . '$' . htmlentities($membertotal) . "</br>";

                                                $result2 = mysqli_query($con, "SELECT sum(guestmealtotalprice) as guesttotal, guestmealtaxpercent, sum(guestmealtaxvalue) as guestmealtaxvalue FROM reservation WHERE diningdate >= '$fdate' AND diningdate <= '$tdate'");
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
                                                echo "<br>Total Tax Collected ( Member  + Guests) : " . '$' . htmlentities($totaltaxcollected);
                                                echo "<br>Grand Total ( Member  + Guests) : " . '$' . $total['grandtotal'] . "</br>";
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
                                                        if (txtValue.toUpperCase().indexOf(filter) > - 1) {
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
                                                        if (txtValue.toUpperCase().indexOf(filter) > - 1) {
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
                                                        if (txtValue.toUpperCase().indexOf(filter) > - 1) {
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

<script type="text/javascript" language="javascript" >
                $(document).ready(function(){
                        var fdate = "<?php echo $_POST['fromdate']; ?>";
                        var tdate = "<?php echo $_POST['todate']; ?>";
                    $('#example').DataTable({
                        "processing" : true,
                        "serverSide" : true,
                        "ajax" : {
                            url:"fetch.php",
                            type:"POST",
                            data:{
                                'fdate': fdate,
                                'tdate': tdate
                            },
                        },
                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            'excelHtml5',
                            'csvHtml5',
                            'pdfHtml5'
                          ],
                        "lengthMenu": [ [-1], ["All"] ]
                    });

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
