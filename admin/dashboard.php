<?php
session_start();
error_reporting(0);
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
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                            </ol>
                                        </nav>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end pageheader  -->
                            <!-- ============================================================== -->
                            <div class="ecommerce-widget">
                                <div class="row">

                                    <?php
                                    $result1 = mysqli_query($con, "SELECT SUM(grandtotal) AS `moneycount` FROM `reservation`");
                                    $row1 = mysqli_fetch_array($result1);
                                    $count1 = $row1['moneycount'];

                                    $result2 = mysqli_query($con, "SELECT SUM(guestno) AS `guestcount` FROM `reservation`");
                                    $row2 = mysqli_fetch_array($result2);
                                    $count2 = $row2['guestcount'];

                                    $result3 = mysqli_query($con, "SELECT COUNT(id) AS `mealcount` FROM `reservation` where isCheckedIn = '1' ");
                                    $row3 = mysqli_fetch_array($result3);
                                    $count3 = $row3['mealcount'];

                                    $result4 = mysqli_query($con, "SELECT COUNT(id) AS `bookingcount` FROM `reservation`");
                                    $row4 = mysqli_fetch_array($result4);
                                    $count4 = $row4['bookingcount'];

                                    $result5 = mysqli_query($con, "SELECT COUNT(id) AS `takeoutcount` FROM `pickups`");
                                    $row5 = mysqli_fetch_array($result5);
                                    $count5 = $row5['takeoutcount'];

                                    $result6 = mysqli_query($con, "SELECT SUM(membermealtotalprice) AS `takeoutvalue` FROM `pickups`");
                                    $row6 = mysqli_fetch_array($result6);
                                    $count6 = $row6['takeoutvalue'];
                                    ?>

                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="card border-3 border-top border-top-primary">
                                            <div class="card-body">
                                                <h5 class="text-muted">Total Revenue from Members & Guests <a href="#" data-toggle="tooltip" title="" data-original-title="Showing all time revenue from members & guests including new bookings"> [ ? ]</a></h5>
                                                <div class="metric-value d-inline-block">
                                                    <h1 class="mb-1">$<?php echo htmlentities($count1); ?></h1>
                                                </div>
                                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="card border-3 border-top border-top-primary">
                                            <div class="card-body">
                                                <h5 class="text-muted">Total Revenue from Order Takeouts<a href="#" data-toggle="tooltip" title="" data-original-title="Showing all time total revenue from takeout orders"> [ ? ]</a></h5>
                                                <div class="metric-value d-inline-block">
                                                    <h1 class="mb-1">$<?php echo htmlentities($count6); ?></h1>
                                                </div>
                                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="card border-3 border-top border-top-primary">
                                            <div class="card-body">
                                                <h5 class="text-muted">Total Meals Served <a href="#" data-toggle="tooltip" title="" data-original-title="Showing data from all of the diners who has checkedin"> [ ? ]</a></h5>
                                                <div class="metric-value d-inline-block">
                                                    <h1 class="mb-1"><?php echo htmlentities($count3); ?></h1>
                                                </div>
                                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="card border-3 border-top border-top-primary">
                                            <div class="card-body">
                                                <h5 class="text-muted">Total All Time Bookings <a href="#" data-toggle="tooltip" title="" data-original-title="This number represents all the bookings ever made in Silver Glen"> [ ? ]</a></h5>
                                                <div class="metric-value d-inline-block">
                                                    <h1 class="mb-1"><?php echo htmlentities($count4); ?></h1>
                                                </div>
                                                <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>

                                <div class="row">

                                    <!-- ============================================================== -->

                                    <!-- ============================================================== -->

                                    <!-- recent orders  -->
                                    <!-- ============================================================== -->

                                    <!-- ============================================================== -->
                                    <!-- end sales traffice country source  -->
                                    <!-- ============================================================== -->
                                </div>
                                <div class="row">




                                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Recent Reservations <a href="#" data-toggle="tooltip" title="" data-original-title="Showing 10 of the most recent bookings"> [ ? ]</a></h5>
                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="bg-light">
                                                            <tr class="border-0">
                                                                <th class="border-0">#</th>
                                                                <th class="border-0">BookingID</th>
                                                                <th class="border-0">Last Name</th>
                                                                <th class="border-0">Room Name</th>
                                                                <th class="border-0">Table Name</th>
                                                                <th class="border-0">Seat</th>
                                                                <th class="border-0">Date</th>
                                                                <th class="border-0">Time</th>
                                                                <th class="border-0">Guests</th>
                                                                <th class="border-0">Unit No</th>
                                                                <th class="border-0">Checked In?</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $query = mysqli_query($con, "select * from reservation order by id DESC LIMIT 10");
                                                            $cnt = 1;
                                                            while ($row = mysqli_fetch_array($query)) {
                                                                $colorMap[0] = 'badge-dot badge-success mr-1';
                                                                $colorMap[1] = 'badge-dot badge-danger mr-1';
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo htmlentities($cnt); ?></td>
                                                                    <td><?php echo htmlentities($row['bookingid']); ?></td>
                                                                    <td><?php echo htmlentities($row['lastname']); ?></td>
                                                                    <td><?php echo htmlentities($row['room']); ?></td>
                                                                    <td><?php echo htmlentities($row['tablename']); ?></td>
                                                                    <td><?php echo htmlentities($row['seat']); ?></td>
                                                                    <td><?php echo htmlentities($row['diningdate']); ?></td>
                                                                    <td><?php echo htmlentities($row['diningtime']); ?></td>
                                                                    <td><?php echo htmlentities($row['guestno']); ?></td>
                                                                    <td style="text-transform: uppercase;"><?php echo $row['condono']; ?></td>
                                                                    <td> <span class="<?php echo $colorMap[$row['isCheckedin'] ? '0' : '1']; ?>"></span><?php echo htmlentities($row['isCheckedin'] ? 'Yes' : 'No'); ?></td>
                                                                </tr>
                                                            <?php $cnt = $cnt + 1;
                                                            } ?>
                                                            <tr>
                                                                <td colspan="11"><a href="guestlist.php" class="btn btn-outline-light float-right">View All Reservations</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Most Revenue by Diners <a href="#" data-toggle="tooltip" title="" data-original-title="Showing 7 of the highest spenders with total bookings made by each diner"> [ ? ]</a></h5>
                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table no-wrap p-table">
                                                        <thead class="bg-light">
                                                            <tr class="border-0">
                                                                <th class="border-0">#</th>
                                                                <th class="border-0">First Name</th>
                                                                <th class="border-0">Last Name</th>
                                                                <th class="border-0">Total Bookings</th>
                                                                <th class="border-0">Total Spent</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $query = mysqli_query($con, "select firstname,lastname, COUNT(id) as 'countbooking',sum(membermealtotalprice) as 'countmoney' from reservation order by sum(membermealtotalprice) limit 6 ");
                                                            $cnt = 1;
                                                            while ($row = mysqli_fetch_array($query)) {
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo htmlentities($cnt); ?></td>
                                                                    <td><?php echo htmlentities($row['firstname']); ?></td>
                                                                    <td><?php echo htmlentities($row['lastname']); ?></td>
                                                                    <td><?php echo htmlentities($row['countbooking']); ?></td>
                                                                    <td><?php echo htmlentities('$' . $row['countmoney']); ?></td>
                                                                </tr>
                                                            <?php $cnt = $cnt + 1;
                                                            } ?>
                                                            <tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-3 border-top border-top-primary">
                                            <div class="card-body">
                                                <h5 class="text-muted">Total Order Takeouts<a href="#" data-toggle="tooltip" title="" data-original-title="Showing all time total takeout orders"> [ ? ]</a></h5>
                                                <div class="metric-value d-inline-block">
                                                    <h1 class="mb-1"><?php echo htmlentities($count5); ?></h1>
                                                </div>
                                                <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card border-3 border-top border-top-primary">
                                            <div class="card-body">
                                                <h5 class="text-muted">Total Guests Dined <a href="#" data-toggle="tooltip" title="" data-original-title="Showing data from all the guests that members brought to Silver Glen"> [ ? ]</a> </h5>
                                                <div class="metric-value d-inline-block">
                                                    <h1 class="mb-1"><?php echo htmlentities($count2); ?></h1>
                                                </div>
                                                <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Recent Order Takeouts <a href="#" data-toggle="tooltip" title="" data-original-title="Showing 10 of the most recent takeout orders"> [ ? ]</a></h5>
                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="bg-light">
                                                            <tr class="border-0">
                                                                <th class="border-0">#</th>
                                                                <th class="border-0">First Name</th>
                                                                <th class="border-0">Last Name</th>
                                                                <th class="border-0">Pickup Date</th>
                                                                <th class="border-0">Pickup Time</th>
                                                                <th class="border-0">Unit No</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $query = mysqli_query($con, "select * from pickups order by id DESC LIMIT 10");
                                                            $cnt = 1;
                                                            while ($row = mysqli_fetch_array($query)) {
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo htmlentities($cnt); ?></td>
                                                                    <td><?php echo htmlentities($row['firstname']); ?></td>
                                                                    <td><?php echo htmlentities($row['lastname']); ?></td>
                                                                    <td><?php echo htmlentities($row['diningdate']); ?></td>
                                                                    <td><?php echo htmlentities($row['diningtime']); ?></td>
                                                                    <td><?php echo htmlentities($row['condono']); ?></td>
                                                                </tr>
                                                            <?php $cnt = $cnt + 1;
                                                            } ?>
                                                            <tr>
                                                                <td colspan="11"><a href="takeoutlist.php" class="btn btn-outline-light float-right">View All Takeout Orders</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="assets/libs/js/main-js.js"></script>
        <!-- chart chartist js -->
        <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
        <!-- sparkline js -->
        <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
        <!-- morris js -->
        <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
        <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
        <!-- chart c3 js -->
        <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
        <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
        <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
        <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>

<?php } ?>

</html>
<?php
// }
?>