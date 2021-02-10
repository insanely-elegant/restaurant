<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="dashboard.php">Silver Glen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">


                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administrator <img src="assets/images/avatars-clipart-1.png" alt="" class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">Admin </h5>
                            <span class="status"></span><span class="ml-2">Online</span>
                        </div>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="dashboard.php">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">

                    <li class="nav-item ">
                        <a class="nav-link" href="dashboard.php" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-tachometer-alt"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-book"></i> Menu Management </a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="create-menu.php">Manage, Edit & Display Menu</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-wine-glass"></i>Manage Dining Program </a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="create-dining-program.php">Create Dining Program</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="create-dining-dates.php">Manage Dining Dates / Calendar</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-truck"></i>Manage Order Takeout Program </a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="create-pickup-program.php">Create Order Takeout Program</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Table Management</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="create-room.php">Create Room</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="create-table-layout.php">Create & Manage Table Layout</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-ticket-alt"></i>Manage Reservations, Takeouts</a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                            <li class="nav-item">
                                    <a class="nav-link" href="admin-book.php">Book Reservation for user</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="guestlist.php">See Today's Guest List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="takeoutlist.php">See Order Takeout List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="freediner-list.php">See FREE DINER Reservation & Takeout List</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-ticket-alt"></i>Review Orders</a>
                        <div id="submenu-7" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                           
                                <li class="nav-item">
                                    <a class="nav-link" href="takeout-menu-orders.php">Review Take-out Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="weekly-menu-orders.php">Review Dine-In Orders </a>
                                </li>

                            </ul>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-users"></i> User Management </a>
                        <div id="submenu-8" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="create-user.php">Create & Manage User Accounts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="create-staff.php">Create & Manage Staff Accounts</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-utensils" aria-hidden="true"></i> Chef Management </a>
                        <div id="submenu-9" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="create-chef.php">Manage Chef Accounts</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-fw fa-user"></i> Host Management </a>
                        <div id="submenu-10" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="create-host.php">Manage Host Accounts</a>
                                </li>

                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11"><i class="fas fa-print"></i> Print Weekly Menu </a>
                        <div id="submenu-11" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="weekly-menu-reports.php">Print Dine-In Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="current-weekly-menu-reports-detailed.php">THIS WEEK's Dine-In Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="takeout-menu-reports.php">Print Take-out Menu</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="current-takeout-menu-reports-detailed.php">THIS WEEK's Take-out Menu</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-12"><i class="fas fa-print"></i> Print Labels </a>
                        <div id="submenu-12" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="print-labels.php">Print Takeout Labels</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="print-labels-with-buildingcode.php">Print Takeout Labels with Building Code</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-13" aria-controls="submenu-13"><i class="fa fa-book" aria-hidden="true"></i> All Reports </a>
                        <div id="submenu-13" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="reports.php">SGDINE Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="all-reports.php">Reports by date</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="reports-with-unitno.php">View All Reports by Date & Unitno</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-14" aria-controls="submenu-14"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i>Settings</a>
                        <div id="submenu-14" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="create-pricing.php"><i class="fas fa-dollar-sign"></i>
                                        Manage User Pricing Models</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="manage-ownership.php"><i class="nav-icon fa fa-user"></i>Manage Ownership</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="backup-restore.php"><i class="nav-icon fa fa-database"></i>Backup & Restore Data</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>