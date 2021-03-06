<html
    class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"
    lang="en" style="">

    <?php include "includes/head.php";?> 

<body class="checkout">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-area-start -->
    <?php include "includes/header.php";?>
    <!-- header-area-end -->
    <!-- breadcrumb-area-start -->

    <!-- breadcrumb-area-end -->
    <!-- entry-header-area-start -->
    <div class="entry-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="entry-header-title">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- entry-header-area-end -->
    <!-- coupon-area-area-start -->
    <div class="coupon-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="coupon-accordion">
                        <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                        <div class="coupon-content" id="checkout-login">
                            <div class="coupon-info">
                                <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed
                                    est sit amet ipsum luctus.</p>
                                <form action="#">
                                    <p class="form-row-first">
                                        <label>Username or email <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row">
                                        <input type="submit" value="Login">
                                        <label>
                                            <input type="checkbox">
                                            Remember me
                                        </label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div class="coupon-checkout-content" id="checkout_coupon">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input type="text" placeholder="Coupon code">
                                        <input type="submit" value="Apply Coupon">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- coupon-area-area-end -->
    <!-- checkout-area-start -->
    <div class="checkout-area mb-70">
        <div class="container">
            <div class="row">
                <form action="#">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class=" col-lg-12">
                                    <div class="country-select">
                                        <label>Country <span class="required">*</span></label>
                                        <select>
                                            <option value="volvo">bangladesh</option>
                                            <option value="saab">Algeria</option>
                                            <option value="mercedes">Afghanistan</option>
                                            <option value="audi">Ghana</option>
                                            <option value="audi2">Albania</option>
                                            <option value="audi3">Bahrain</option>
                                            <option value="audi4">Colombia</option>
                                            <option value="audi5">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" placeholder="Town / City">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-form-list create-acc">
                                        <input type="checkbox" id="cbox">
                                        <label>Create an account?</label>
                                    </div>
                                    <div class="checkout-form-list create-account" id="cbox_info"
                                        style="display: none;">
                                        <p>Create an account by entering the information below. If you are a returning
                                            customer please login at the top of the page.</p>
                                        <label>Account password <span class="required">*</span></label>
                                        <input type="password" placeholder="password">
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Ship to a different address?</label>
                                        <input type="checkbox" id="ship-box">
                                    </h3>
                                </div>
                                <div class="row" id="ship-box-info" style="display: none;">
                                    <div class="col-lg-12">
                                        <div class="country-select">
                                            <label>Country <span class="required">*</span></label>
                                            <select>
                                                <option value="volvo">bangladesh</option>
                                                <option value="saab">Algeria</option>
                                                <option value="mercedes">Afghanistan</option>
                                                <option value="audi">Ghana</option>
                                                <option value="audi2">Albania</option>
                                                <option value="audi3">Bahrain</option>
                                                <option value="audi4">Colombia</option>
                                                <option value="audi5">Dominican Republic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Order Notes</label>
                                        <textarea placeholder="Notes about your order, e.g. special notes for delivery."
                                            rows="10" cols="30" id="checkout-mess"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="your-order">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum suscipit <strong class="product-quantity"> ?? 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">??165.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum dictum magna <strong class="product-quantity"> ?? 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">??50.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">??215.00</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <input type="radio">
                                                        <label>
                                                            Flat Rate: <span class="amount">??7.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio">
                                                        <label>Free Shipping:</label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">??215.00</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div class="collapses-group">
                                        <div class="panel-group" id="accordion" role="tablist"
                                            aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            Direct Bank Transfer
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use
                                                            your Order ID as the payment reference. Your order won???t be
                                                            shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Cheque Payment
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p>Please send your cheque to Store Name, Store Street, Store
                                                            Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            PayPal <img src="img/2.png" alt="payment">
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <p>Pay via PayPal; you can pay with your credit card if you
                                                            don???t have a PayPal account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <input type="submit" value="Place order">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- checkout-area-end -->
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