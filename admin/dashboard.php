<?php
    require "functions.php";
    session_start();
        
    if(!isset($_SESSION))
    {
        header('location:index.php');
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">


        <title>PETSMART | Admin Dashboard</title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="assets/images/logo.png">

        <link href="assets/plugins/morris-chart/morris.css" rel="stylesheet">
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
                        <li class="active">
                            <a href="dashboard.php"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></a>
                        </li>
                        
                     
                        <li class="menu-list"><a href="javascript:;"><i class="mdi mdi-table"></i> <span>Tables</span></a>
                            <ul class="child-list">
                                <li><a href="tables-datatable.php"> Registered Users Table</a></li>
                                <li class="active"><a href="tables-editable.php"> Edit Users Table</a></li>

                            </ul>
                        </li>

                        </li>
                    </ul><!--sidebar nav end-->
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
                        </div><!--right notification end-->
                    </div>
                </div>
                <!-- header section end-->

                <div class="container-fluid">
                    <div class="page-head">
                        <h4 class="mt-2 mb-2">Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3">
                                   <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-eye"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="dynamicbar">Loading..</div>
                                            </div>
                                            <div class="col-4">
                                                <h2 class="m-0 counter">645</h2>
                                                <p>Views Today</p> 
                                            </div>
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                   <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center text-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-user"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="inlinesparkline">Loading..</div>
                                            </div>
                                            <div class="col-4">
                                                <h2 class="m-0 counter">120</h2>
                                                <p>Visits Today</p> 
                                            </div>
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-money"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="dynamicbar">Loading..</div>
                                            </div>
                                            <div class="col-4">
                                                <h2 class="m-0 counter">30</h2>
                                                <p>Items Sold</p> 
                                            </div>
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-wallet"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="inlinesparkline">Loading..</div>
                                            </div>
                                            <div class="col-4">
                                                <h2 class="m-0 counter">999</h2>
                                                <p>$ Profit Today</p> 
                                            </div>
                                        </div>
                                   </div> 
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-9 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Overview</h5>           
                                    <div id="morris-line-chart" style="height: 360px;"></div>             
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">                                    
                                    <div class="border-b pb-3 pt-1">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-8">
                                                <h6 class="text-muted">Shares</h6>
                                                <h3>1,503</h3>
                                            </div>
                                            <div class="col-4">
                                                <span class="pull-right linechart-2"></span>
                                            </div>                                            
                                        </div>
                                    </div> 
                                    <div class="border-b pb-3 pt-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-8">
                                                <h6 class="text-muted">Clicks</h6>
                                                <h3>11,503</h3>
                                            </div>
                                            <div class="col-4">
                                                <span class="pull-right linechart"></span>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="border-b pb-3 pt-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-8">
                                                <h6 class="text-muted">Virality</h6>
                                                <h3>3.55%</h3>
                                            </div>
                                            <div class="col-4">
                                                <span class="pull-right linechart-3"></span>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="pt-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-8">
                                                <h6 class="text-muted">Countries</h6>
                                                <h3>36</h3>
                                            </div>
                                            <div class="col-4">
                                                <span class="pull-right linechart-2"></span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Summary</h5>           
                                    <div id="morris-donut-chart"></div>              
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Revenue</h5>           
                                    <div id="morris-bar-chart"></div>              
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Email Sent</h5>           
                                    <div id="extra-area-chart"></div>              
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Recent Sales</h5>           
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Customer Name</th>
                                                            <th>Customer Email</th>
                                                            <th>Invoice Number</th>
                                                            <th>Amount</th>
                                                            <th>Invoice Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Hero Alom</td>
                                                            <td>heroalom@gmail.com</td>
                                                            <td>PS/15/2022-23</td>
                                                            <td>Tk.4,899</td>
                                                            <td>28/01/2022</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Asif Mahmud</td>
                                                            <td>asifmahmud@gmail.com</td>
                                                            <td>PS/14/2022-23</td>
                                                            <td>Tk.2,599</td>
                                                            <td>27/01/2022</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Mahmud Rafi</td>
                                                            <td>rafimahmud@gmail.com</td>
                                                            <td>PS/13/2022-23</td>
                                                            <td>Tk.5,599</td>
                                                            <td>26/01/2022</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Minar</td>
                                                            <td>minar@gmail.com</td>
                                                            <td>PS/12/2022-23</td>
                                                            <td>Tk.1,299</td>
                                                            <td>24/01/2022</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Raj</td>
                                                            <td>rajx@gmail.com</td>
                                                            <td>PS/11/2022-23</td>
                                                            <td>Tk.1,499</td>
                                                            <td>22/01/2022</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Rakibul Sushi Beagle</td>
                                                            <td>beaglerakib@gmail.com</td>
                                                            <td>PS/10/2022-23</td>
                                                            <td>Tk.7,199</td>
                                                            <td>22/01/2022</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Sheikh Raja</td>
                                                            <td>rajasheikh@gmail.com</td>
                                                            <td>PS/09/2022-23</td>
                                                            <td>Tk.4,599</td>
                                                            <td>22/01/2022</td>
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
                    
                </div><!--end container-->

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

        <!--plugins js-->
        <script src="assets/plugins/counter/jquery.counterup.min.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="assets/pages/jquery.sparkline.init.js"></script>

        <script src="assets/plugins/chart-js/Chart.bundle.js"></script>
        <script src="assets/plugins/morris-chart/raphael-min.js"></script>
        <script src="assets/plugins/morris-chart/morris.js"></script>
        <script src="assets/pages/dashboard-init.js"></script>


        <!--app js-->
        <script src="assets/js/jquery.app.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                delay: 100,
                time: 1200
                });
            });
        </script>
    </body>
</html>
