<?php
require('dbc.php');
session_start();


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $statement = $conn->prepare("select * from adminlogintable where username =?");
    $statement->bind_param("s", $username);
    $statement->execute();
    $statement_result = $statement->get_result();
    if ($statement_result->num_rows > 0) {
        $data = $statement_result->fetch_assoc();
        if ($data['password'] == $password) {
            $_SESSION['username'] = $row['username'];
            header("Location: http://localhost/petsmart/admin/dashboard.php");
        } else {

            echo "<script>
				alert('Username or Password Invalid!');
				window.location.href='http://localhost/petsmart/admin/index.php';
			</script>";
        }
    } 
    else {
        echo '<script>alert("Username not found")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="keyword" content="">

    <title>PETSMART | Admin Login</title>

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
    <section class="bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="wrapper-page">
                        <div class="account-pages">
                            <div class="account-box">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <img src="assets/images/logo.png" alt="" class="">
                                            <h5 class="mt-3"><b>Welcome to PetSmart!</b></h5>
                                        </div>
                                        <?php
                                        if (isset($errorMsg)) {
                                            echo "<div class='error-msg'>";
                                            echo $errorMsg;
                                            echo "</div>";
                                            unset($errorMsg);
                                        }

                                        if (isset($_GET['logout'])) {
                                            echo "<div class='success-msg'>";
                                            echo "</div>";
                                        }

                                        ?>

                                        <form class="form mt-5 contact-form" action="" method="POST">
                                            <div class="form-group ">
                                                <div class="col-sm-12">
                                                    <input class="form-control form-control-line" name="username"
                                                        type="text" placeholder="Username" required="required">
                                                </div>


                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" name="password"
                                                            type="password" placeholder="Password" required="required">
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12 mt-4">
                                                        <input type="submit" value="login"
                                                            class="btn btn-primary btn-block" name="submit" />
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-migrate.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/slidebars.min.js"></script>


    <!--app js-->
    <script src="assets/js/jquery.app.js"></script>
</body>

</html>