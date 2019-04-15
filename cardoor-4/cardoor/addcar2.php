<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Car Rental Service</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i>University of Texas at Dallas
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +1 800 345 678
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">Car Rental
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>

                                <li><a href="car-right-sidebar.html">Cars</a></li>


                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Add New Car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>

                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">

                    <div class="contact-form">
                        <form action="#" method="GET">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <input type="text" name="cname" id="cname" placeholder="Car Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="img-input">
                                        <input type="file" name="image" id="image" placeholder="Add Image">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="seatcap-input">

                                        <select  class="custom-select" id="loc" name="loc">
                                            <option value="%" selected>Location</option>
                                            <option value=1>Plano</option>
                                            <option value=3>Dallas</option>
                                            <option value=2>Richardson</option>
                                            <option value=4>Frisco</option>

                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="type-input">
                                        <!-- <input type="text" name="ctype" id="ctype" placeholder="Car Type"> -->
                                        <select  class="custom-select" id="ctype" name="ctype">
                                            <option value="%" selected>Car Type</option>
                                            <option value=1>Economy</option>
                                            <option value=2>Sedan</option>
                                            <option value=3>SUV</option>
                                            <option value=4>Premium</option>

                                          </select>
                                    </div>
                                </div>


                            <div class="input-submit">
                                <button type="submit" name="submitb" id="submitb"><a href="">ADD THIS CAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Contact Page Area End ==-->
    <?php
    $year   = '';
    $gender = '';

    $hostname="localhost";
    $database="car rental";
    $username="root";
    $password="";
    $conn = mysqli_connect($hostname, $username, $password,$database);
    //$port = 3307;

    $DB_conn    = '';
    $DB_SQL     = '';
    $DB_ResultSet   = '';


        if (isset ($_GET['submitb'])){


            $name = $_GET['cname'];
            $type = $_GET['ctype'];
            $location = $_GET['loc'];
            $image = $_GET['image'];
            #$im = "<script>alert(document.getElementById('image').value);</script>";


            $sql="INSERT INTO `car` (`car_id`, `name`, `type_id`, `status`, `Image`) VALUES (NULL, '$name', '$type', 'A', '$image')";



            $result = $conn->query($sql);
            $id = mysqli_insert_id($conn);

            $sql2="INSERT INTO `car_loc` (`loc_id`, `car_id`) VALUES ($location, $id)";
            $result = $conn->query($sql2);

            echo (" <div class='section-title  text-center'><h4>Car added succesfully !!</h4></div>");

}

    ?>

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <img src="assets/img/logo.png" alt="JSOFT">
                                <p>Find a car available at your location for your dates and book it instantly.</p>



                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->


                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get in touch</h2>
                            <div class="widget-body">
                                <p>Contact us for any query. We are happy to help.</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i>University of Texas at Dallas</li>
                                    <li><i class="fa fa-mobile"></i> +1 800 345 678</li>
                                    <li><i class="fa fa-envelope"></i> carrental@utdallas.edu</li>
                                </ul>
                                <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->


    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>
