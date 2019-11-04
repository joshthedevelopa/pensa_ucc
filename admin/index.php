<?php 
    session_start();
    include "serv/manage.php";

    if(isset($_SESSION['admin'])) {
        echo '<script>window.location = "index_page.php"</script>';
    }
?>


<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2019 10:42:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PENSA Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="css/YouTubePopUp.css">
    <link src="DataTables/datatables.css" rel="stylesheet">
    <link href="css/main.cba69814a806ecc7945a.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/YouTubePopUp.jquery.js"></script>
    <script src="DataTables/datatables.js"></script>
    <script src="js/form.js"></script>

</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/city.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>PENSA - Admin Login</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <h4 class="mb-0">
                                <span class="d-block">Welcome,</span>
                                <span>Please sign in to your account.</span></h4>
                                <div class="_prog" style="display: none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <span class="mess err"></span>
                            <div class="divider row"></div>
                            <div>
                                <form class="form" method="post" action="">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail" class="">Email</label>
                                                <input name="user_n" id="exampleEmail" placeholder="Username here..." type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="examplePassword" class="">Password</label>
                                                <input name="pass_n" id="examplePassword" placeholder="Password here..." type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <!-- <div class="ml-auto"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a> -->
                                            <button class="btn btn-primary btn-lg">Login to Dashboard</button>
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
<script type="text/javascript" src="assets/scripts/main.cba69814a806ecc7945a.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2019 10:42:56 GMT -->
</html>
