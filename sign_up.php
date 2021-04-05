<html
    class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"
    lang="en" style="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Legend - Multipurpose eCommerce Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- material-design-iconic-font.css -->
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <!-- chosen.min.css -->
    <link rel="stylesheet" href="css/chosen.min.css">
    <!-- nivo-slider.css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!--flexslider.css -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="register">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-area-start -->
    <?php include "includes/header.php";?>
    <!-- user-login-area-start -->
    <form method="POST">
        <div class="user-login-area mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-title text-center mb-30">
                            <h2>Sign Up</h2>
                            <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br>inventore veritatis
                                et quasi architecto beat</p>
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="billing-fields">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-register">

                                        <label>First Name<span>*</span></label>
                                        <input type="text" name="first_n">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-register">

                                        <label>Last Name<span>*</span></label>
                                        <input type="text" name="last_n">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-register">

                                        <label>Email Address<span>*</span></label>
                                        <input type="text" name="email">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-register">

                                        <label>Phone<span>*</span></label>
                                        <input type="text" name="phone">

                                    </div>
                                </div>
                            </div>
                            <div class="single-register">

                                <label>Account password<span>*</span></label>
                                <input type="text" placeholder="Password" name="pass">

                            </div>
                            <div class="single-register">
                                <!-- <a href="#" name="btn">Register</a> -->
                                <button name='btn'>send</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php 

    $c = mysqli_connect("localhost","root","root","legend") ;
    $m = mysqli_query($c,"SELECT * FROM `city`");
     $f = mysqli_fetch_assoc($m);
    if(isset($_POST['btn'])){
       
        $mysqli_q = mysqli_query($c,"INSERT INTO `users`( `First_name`,`Last_name`, `email`, `phone`, `password`, `city_id`) VALUES ('$_POST[first_n]','$_POST[last_n]','$_POST[email]','$_POST[phone]','$_POST[pass]','$f[id]')");
          echo "INSERT INTO `users`( `First_name`,`Last_name`, `email`, `phone`, `password`, `city_id`) VALUES ('$_POST[first_n]','$_POST[last_n]','$_POST[email]','$_POST[phone]','$_POST[pass]','')";
        
    }
    
    ?>
    <!-- user-login-area-end -->
    <!-- brand-area-start -->

    <!-- brand-area-end -->
    <!-- newslatter-area-start -->
    <div class="newslatter-area ptb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newslatter-content text-right">
                        <h4>Newsletter</h4>
                    </div>
                    <div class="newslatter-form">
                        <form action="#">
                            <input type="text" placeholder="Enter your e-mail">
                            <a href="#"><i class="fa fa-paper-plane"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newslatter-area-end -->
    <!-- footer-area-start -->
    <footer>
        <!-- footer-top-area-start -->
        <div class="footer-top-area pt-80 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- single-footer-start -->
                        <div class="single-footer">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="img/logo/2.png" alt="logo"></a>
                            </div>
                            <p>It is a long established fact that reader will distract by the readable content of a
                                page...</p>
                            <div class="footer-address">
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>address :No 40 Baria Sreet 133/2, NewYork, USA.
                                    </li>
                                    <li><i class="fa fa-envelope"></i>Email :demo@posthemes.com</li>
                                    <li><i class="fa fa-mobile"></i>Phone :+(1234) 567 890</li>
                                </ul>
                            </div>
                            <div class="social-link">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-footer-end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- single-footer-start -->
                        <div class="single-footer">
                            <div class="footer-title">
                                <h4>Information</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Top sellers</a></li>
                                    <li><a href="#">Our stores</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My credit slips</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-footer-end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- single-footer-start -->
                        <div class="single-footer">
                            <div class="footer-title">
                                <h4>Information</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">checkout</a></li>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">My orders</a></li>
                                    <li><a href="#">My credit slips</a></li>
                                    <li><a href="#">My addresses</a></li>
                                    <li><a href="#">My personal info</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-footer-end -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- single-footer-start -->
                        <div class="single-footer">
                            <div class="footer-title">
                                <h4>Information</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">headphones</a></li>
                                    <li><a href="#">Mobiles &amp; Tablets</a></li>
                                    <li><a href="#">Photo &amp; Camera</a></li>
                                    <li><a href="#">Computers</a></li>
                                    <li><a href="#">TV &amp; Audio</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-footer-end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top-area-end -->
        <!-- footer-bottom-area-start -->
        <div class="footer-bottom-area ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="copy-right">
                            <p>Copyright<a href="#">Hastech</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="payment-area">
                            <a href="#"><img src="img/1.png" alt="payment"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom-area-end -->
    </footer>
    <!-- footer-area-end -->





    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- chosen.jquery.min.js -->
    <script src="js/chosen.jquery.min.js"></script>
    <!-- jquery.nivo.slider.js -->
    <script src="js/jquery.nivo.slider.js"></script>
    <!-- jquery.countdown.min.js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- jquery.flexslider.js -->
    <script src="js/jquery.flexslider.js"></script>
    <!-- jquery.counterup.min.js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- waypoints.min.js -->
    <script src="js/waypoints.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script><a id="scrollUp" href="#top"
        style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a>


</body>

</html>