<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mannat Themes">
    <meta name="keyword" content="">

    <title>PETSMART | Edit Users Info</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="assets/images/logo.png">

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
                <div class="edit-table">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title">Edit User Info</h5>
                                    <div class="">
                                        <table class="table" id="my-table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include_once "dbc.php";
                                                $query = "SELECT * FROM registration";
$result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '
      <tr>
       <td>' . $row["name"] . '</td>
       <td>' . $row["email"] . '</td>
       <td>' . $row["password"] . '</td>
      </tr>
      ';
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
                2022 &copy; PetSmart Limited.
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

    <script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>
    <script src="assets/plugins/tabledit/jquery.tabledit.js"></script>

    <!--app js-->
    <script src="assets/js/jquery.app.js"></script>
    <script type="text/javascript">
        $('#my-table').Tabledit({
            columns: {
                url: "action.php",
                identifier: [0, 'id'],
                editable: [
                    [1, 'col1'],
                    [2, 'col1'],
                    [3, 'col3']
                ]
            }
        });

        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    </script>

</body>

</html>