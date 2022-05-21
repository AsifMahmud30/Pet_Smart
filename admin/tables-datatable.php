<!DOCTYPE html>
<html lang="en">

<head>

    <title>PETSMART | Registered Users</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="assets/images/logo.png">

    <!-- Responsive and DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    <!-- Theme Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/slidebars.min.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="sticky-header">
    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <div class="sidebar-left-info">

                <div class="user-box">
                    <div class="d-flex justify-content-center">
                        <img src="assets/images/users/avatar-1.png" alt="" class="img-fluid rounded-circle">
                    </div>
                    <div class="text-center text-white mt-2">
                        <h6>Big Chungus</h6>
                        <p class="text-muted m-0">Admin</p>
                    </div>
                </div>

                <!--sidebar nav start-->
                <ul class="side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                    <li>
                        <a href="dashboard.php"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></a>
                    </li>

                    <li class="menu-list nav-active active"><a href="javascript:;"><i class="mdi mdi-table"></i>
                            <span>Tables</span></a>
                        <ul class="child-list">
                            <li class="active"><a href="tables-datatable.php"> Registered Users Table</a></li>
                            <li class="active"><a href="tables-editable.php"> Edit Users Table</a></li>


                        </ul>
                    </li>


                </ul>
                <!--sidebar nav end-->
            </div>
        </div><!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content">
            <!-- header section start-->
            <div class="header-section">
                <!--logo and logo icon start-->
                <div class="logo">
                    <a href="dashboard.php">
                        <span class="logo-img">
                            <img src="assets/images/logo.png" alt="" height="26">
                        </span>
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">PetSmart Admin</span>
                    </a>
                </div>
                <!--toggle button start-->
                <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                <!--toggle button end-->




                <div class="notification-wrap">
                    <!--right notification start-->
                    <div class="right-notification">
                        <ul class="notification-menu">
                            <li>
                                <a href="javascript:;" class="notification" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-outline"></i>
                                    <span class="badge badge-success">4</span>
                                </a>
                                <ul class="dropdown-menu mailbox dropdown-menu-right">
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li class="notification-scroll">
                                        <div class="message-center">
                                            <a href="#">
                                                <div class="user-img">
                                                    <i class="ti ti-star"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Jane A. Seward</h6>
                                                    <span class="mail-desc">Iwon meddle and...</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img">
                                                    <i class="ti ti-heart"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Michael W. Salazar</h6>
                                                    <span class="mail-desc">Lovely gide learn for you...</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img">
                                                    <i class="ti ti-image"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>David D. Chen</h6>
                                                    <span class="mail-desc">Send his new photo...</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img">
                                                    <i class="ti ti-bell"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h6>Irma J. Hendren</h6>
                                                    <span class="mail-desc">6:00 pm our meeting so...</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="text-center bg-light" href="javascript:void(0);">
                                            <strong>See all notifications</strong>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript:;" data-toggle="dropdown">
                                    <img src="assets/images/users/avatar-1.png" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-menu">
                                    <a class="dropdown-item" href="logout.php?logout=true" class="logout-link"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--right notification end-->
                </div>
            </div>
            <!-- header section end-->

            <div class="container-fluid">
                <div class="page-head">
                    <h4 class="mt-2 mb-2">Registered Users Table</h4>
                </div>
                <div class="data-table">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body table-responsive">
                                    <h5 class="header-title">Users Table</h5>

                                    <div class="table-odd">
                                        <table id="datatable" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <!--<th colspan="2">Action</th>-->
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php
                                                include_once("dbc.php");
                                                $sql = "SELECT * from registration";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr><td>" . $row["name"] . "</td>" .
                                                            "<td>" . $row["email"] . "</td>" .
                                                            "<td>" . $row["password"] . "</td><tr>";
                                                       
                                                   
                                                    }
                                                } else {
                                                    echo "No Results";
                                                }

                                                ?>
                  


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->


                </div>

            </div>
            <!--end container-->

            <!--footer section start-->
            <footer class="footer">
                2022 &copy; Petsmart Limited.
            </footer>
            <!--footer section end-->



        </div>
        <!--end body content-->
    </section>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-migrate.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/slidebars.min.js"></script>

    <!-- Responsive and datatable js -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!--app js-->
    <script src="assets/js/jquery.app.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable(),
                $('#datatable2').DataTable();
        });
    </script>

</body>

</html>