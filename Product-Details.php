<html
    class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"
    lang="en" style="">

    <?php include "includes/head.php";?> 
<body class="shop">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-area-start -->
    <?php include "includes/header.php";?>
    <!-- header-area-end -->
    <!-- breadcrumb-area-start -->
    <div class="breadcrumb-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-title">
                            <h3><a href="#">Home</a></h3>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="active"><a href="#"><i class="fa fa-angle-right"></i>shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- shop-main-area-start -->
    <div class="shop-main-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right">
                    <!-- shop-right-area -->
                    <div class="shop-right-area">
                        <div class="page-heading mb-10">
                            <div class="cart-name">
                                <span>headphones </span>
                            </div>
                            <div class="heading-counter">
                                <span>There are 13 products.</span>
                            </div>
                        </div>
                        <div class="page-bar mb-30">
                            <div class="shop-tab">
                                <!-- tab-menu-start -->
                                <div class="tab-menu">
                                    <ul>
                                        <li class="active"><a href="#th" data-toggle="tab"><i class="fa fa-th"></i></a>
                                        </li>
                                        <li><a href="#list" data-toggle="tab"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                                <!-- tab-menu-end -->
                                <div class="toolbar-sorter">
                                    <span>Sort By</span>
                                    <select id="toolber-sorter" class="sorter-options" data-role="sorter">
                                        <option selected="selected" value="Lowest">Price: Lowest first</option>
                                        <option value="Highest">Price: Highest first</option>
                                        <option value="Product">Product Name: A to Z</option>
                                    </select>
                                </div>
                                <div class="field-limiter">
                                    <div class="label-title">
                                        <span>Show</span>
                                    </div>
                                    <div class="control">
                                        <!-- chosen-start -->
                                        <select data-placeholder="Default Sorting" style="width:50px;"
                                            class="chosen-select" tabindex="1">
                                            <option value="Sorting">1</option>
                                            <option value="popularity">2</option>
                                            <option value="rating">3</option>
                                            <option value="date">4</option>
                                        </select>
                                        <!-- chosen-end -->
                                        <span>per page</span>
                                    </div>
                                </div>
                            </div>
                            <div class="compare-form">
                                <span>Compare (1)<i class="fa fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- shop-right-area -->
                    <!-- tab-area-start -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="th">
                            <div class="row">
                                <!-- single-product-start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/3.jpg" alt="product" class="first">
                                            <img src="img/product/4.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Summer Dress</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">36,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/1.jpg" alt="product" class="first">
                                            <img src="img/product/2.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Chiffon Dress</a></h3>
                                        <div class="product-rating mb-10 color">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">24,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/5.jpg" alt="product" class="first">
                                            <img src="img/product/6.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Summer Dress</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price sale">34,78 ???</li>
                                                <li class="old-price">36,61 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/7.jpg" alt="product" class="first">
                                            <img src="img/product/8.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Dress</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">61,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/9.jpg" alt="product" class="first">
                                            <img src="img/product/10.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Dress</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">31,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/13.jpg" alt="product" class="first">
                                            <img src="img/product/14.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Blouse</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">32,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/3.jpg" alt="product" class="first">
                                            <img src="img/product/4.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Summer Dress</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">36,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/1.jpg" alt="product" class="first">
                                            <img src="img/product/2.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Chiffon Dress</a></h3>
                                        <div class="product-rating mb-10 color">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">24,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product mb-30 hidden-sm">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/5.jpg" alt="product" class="first">
                                            <img src="img/product/6.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Summer Dress</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price sale">34,78 ???</li>
                                                <li class="old-price">36,61 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/7.jpg" alt="product" class="first">
                                            <img src="img/product/8.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Dress</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">61,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/9.jpg" alt="product" class="first">
                                            <img src="img/product/10.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Dress</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">31,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="single-product hidden-sm">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/2.jpg" alt="product" class="first">
                                            <img src="img/product/14.jpg" alt="product" class="second">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Printed Dress</a></h3>
                                        <div class="product-rating mb-10">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="product-price">
                                            <ul>
                                                <li class="new-price">53,78 ???</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-links mt-15">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list">
                            <div class="row">
                                <!-- shop-product-start -->
                                <div class="shop-product bb-5">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <!-- single-product-start -->
                                        <div class="product-wrapper-2">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/2.jpg" alt="product" class="first">
                                                    <img src="img/product/14.jpg" alt="product" class="second">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <!-- single-details-start -->
                                        <div class="product-details-2">
                                            <h3><a href="#">Printed Dress</a></h3>
                                            <div class="product-rating mb-10 color">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="product-price">
                                                <ul>
                                                    <li class="new-price">53,78 ???</li>
                                                </ul>
                                            </div>
                                            <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                                material for a comfortable fit. Accessorize with a straw hat and you're
                                                ready for summer!</p>
                                            <div class="action-inner mt-20">
                                                <div class="product-button-3">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                <div class="add-to-links">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="availability">
                                            <span>In stock</span>
                                        </div>
                                        <!-- single-details-end -->
                                    </div>
                                </div>
                                <!-- shop-product-end -->
                                <!-- shop-product-start -->
                                <div class="shop-product bb-5">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <!-- single-product-start -->
                                        <div class="product-wrapper-2">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/3.jpg" alt="product" class="first">
                                                    <img src="img/product/4.jpg" alt="product" class="second">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <!-- single-details-start -->
                                        <div class="product-details-2">
                                            <h3><a href="#">Printed Summer Dress</a></h3>
                                            <div class="product-rating mb-10">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="product-price">
                                                <ul>
                                                    <li class="new-price">36,78 ???</li>
                                                </ul>
                                            </div>
                                            <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                                material for a comfortable fit. Accessorize with a straw hat and you're
                                                ready for summer!</p>
                                            <div class="action-inner mt-20">
                                                <div class="product-button-3">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                <div class="add-to-links">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="availability">
                                            <span>In stock</span>
                                        </div>
                                        <!-- single-details-end -->
                                    </div>
                                </div>
                                <!-- shop-product-end -->
                                <!-- shop-product-start -->
                                <div class="shop-product bb-5">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <!-- single-product-start -->
                                        <div class="product-wrapper-2">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/1.jpg" alt="product" class="first">
                                                    <img src="img/product/2.jpg" alt="product" class="second">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <!-- single-details-start -->
                                        <div class="product-details-2">
                                            <h3><a href="#">Printed Chiffon Dress</a></h3>
                                            <div class="product-rating mb-10 color">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="product-price">
                                                <ul>
                                                    <li class="new-price">24,78 ???</li>
                                                </ul>
                                            </div>
                                            <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                                material for a comfortable fit. Accessorize with a straw hat and you're
                                                ready for summer!</p>
                                            <div class="action-inner mt-20">
                                                <div class="product-button-3">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                <div class="add-to-links">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="availability">
                                            <span>In stock</span>
                                        </div>
                                        <!-- single-details-end -->
                                    </div>
                                </div>
                                <!-- shop-product-end -->
                                <!-- shop-product-start -->
                                <div class="shop-product bb-5">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <!-- single-product-start -->
                                        <div class="product-wrapper-2">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/5.jpg" alt="product" class="first">
                                                    <img src="img/product/6.jpg" alt="product" class="second">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <!-- single-details-start -->
                                        <div class="product-details-2">
                                            <h3><a href="#">Printed Summer Dress</a></h3>
                                            <div class="product-rating mb-10">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="product-price">
                                                <ul>
                                                    <li class="new-price sale">34,78 ???</li>
                                                    <li class="old-price">36,61 ???</li>
                                                </ul>
                                            </div>
                                            <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                                material for a comfortable fit. Accessorize with a straw hat and you're
                                                ready for summer!</p>
                                            <div class="action-inner mt-20">
                                                <div class="product-button-3">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                <div class="add-to-links">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="availability">
                                            <span>In stock</span>
                                        </div>
                                        <!-- single-details-end -->
                                    </div>
                                </div>
                                <!-- shop-product-end -->
                                <!-- shop-product-start -->
                                <div class="shop-product bb-5">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <!-- single-product-start -->
                                        <div class="product-wrapper-2">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/7.jpg" alt="product" class="first">
                                                    <img src="img/product/8.jpg" alt="product" class="second">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <!-- single-details-start -->
                                        <div class="product-details-2">
                                            <h3><a href="#">Printed Dress</a></h3>
                                            <div class="product-rating mb-10">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="product-price">
                                                <ul>
                                                    <li class="new-price">61,78 ???</li>
                                                </ul>
                                            </div>
                                            <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                                material for a comfortable fit. Accessorize with a straw hat and you're
                                                ready for summer!</p>
                                            <div class="action-inner mt-20">
                                                <div class="product-button-3">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                <div class="add-to-links">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="availability">
                                            <span>In stock</span>
                                        </div>
                                        <!-- single-details-end -->
                                    </div>
                                </div>
                                <!-- shop-product-end -->
                                <!-- shop-product-start -->
                                <div class="shop-product bb-5">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <!-- single-product-start -->
                                        <div class="product-wrapper-2">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/9.jpg" alt="product" class="first">
                                                    <img src="img/product/10.jpg" alt="product" class="second">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <!-- single-details-start -->
                                        <div class="product-details-2">
                                            <h3><a href="#">Printed Dress</a></h3>
                                            <div class="product-rating mb-10">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="product-price">
                                                <ul>
                                                    <li class="new-price">31,78 ???</li>
                                                </ul>
                                            </div>
                                            <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                                material for a comfortable fit. Accessorize with a straw hat and you're
                                                ready for summer!</p>
                                            <div class="action-inner mt-20">
                                                <div class="product-button-3">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                <div class="add-to-links">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#mymodal"><i
                                                                    class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="availability">
                                            <span>In stock</span>
                                        </div>
                                        <!-- single-details-end -->
                                    </div>
                                </div>
                                <!-- shop-product-end -->
                            </div>
                        </div>
                    </div>
                    <!-- tab-area-end -->
                    <!-- pagination-area-start -->
                    <div class="pagination-area">
                        <div class="product-count">
                            <p>Showing 1 - 12 of 13 items</p>
                        </div>
                        <div class="pagination-number">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- pagination-area-end -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <!-- shop-left-area-start -->
                    <div class="shop-left-area">
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3> Enabled filters:</h3>
                            </div>
                            <div class="shop-left-menu">
                                <ul>
                                    <li><a href="#">Price: 20.95 ??? - 52 ???</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3> Enabled filters:</h3>
                            </div>
                            <div class="shop-left-menu-2">
                                <ul>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Headphones Solo???2(13)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Studio wireless(13)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Headphones Pro(13)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Accessories(13)</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3>Availability</h3>
                            </div>
                            <div class="shop-left-menu-2">
                                <ul>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">In stock(13)</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3>Condition</h3>
                            </div>
                            <div class="shop-left-menu-2">
                                <ul>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">new(13)</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3>Manufacturer</h3>
                            </div>
                            <div class="shop-left-menu-2">
                                <ul>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Fashion Manufacturer(13)</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3>Price</h3>
                            </div>
                            <div id="slider-range"
                                class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                    style="left: 6%; width: 88%;"></div><span
                                    class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 6%;"></span><span
                                    class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 94%;"></span>
                            </div>
                            <input type="text" name="text" id="amount">
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3>Size</h3>
                            </div>
                            <div class="shop-left-menu-2">
                                <ul>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">s(13)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">m(13)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">l(13)</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3>Color</h3>
                            </div>
                            <div class="shop-left-menu-2">
                                <ul>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Beige(2)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">White(4)</a></li>
                                    <li class="back"><input id="rememberme2" type="checkbox" name="rememberme2"
                                            value="forever"><a href="#">Black(4)</a></li>
                                    <li class="orange"><input id="rememberme2" type="checkbox" name="rememberme2"
                                            value="forever"><a href="#">Orange(4)</a></li>
                                    <li class="blue"><input id="rememberme2" type="checkbox" name="rememberme2"
                                            value="forever"><a href="#">Blue(4)</a></li>
                                    <li class="green"><input id="rememberme2" type="checkbox" name="rememberme2"
                                            value="forever"><a href="#">Green(2)</a></li>
                                    <li class="yellow"><input id="rememberme2" type="checkbox" name="rememberme2"
                                            value="forever"><a href="#">Yellow(6)</a></li>
                                    <li class="pink"><input id="rememberme2" type="checkbox" name="rememberme2"
                                            value="forever"><a href="#">Pink(2)</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3>Compositions</h3>
                            </div>
                            <div class="shop-left-menu-2">
                                <ul>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Cotton(5)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Polyester(4)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Viscose(4)</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="shop-left-title">
                                <h3>Styles</h3>
                            </div>
                            <div class="shop-left-menu-2">
                                <ul>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Casual(5)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Dressy(2)</a></li>
                                    <li><input id="rememberme2" type="checkbox" name="rememberme2" value="forever"><a
                                            href="#">Girly(6)</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                        <!-- single-shop-left-start -->
                        <div class="single-shop-left mb-30">
                            <div class="single-banner-2">
                                <a href="#"><img src="img/banner/34.jpg" alt="banner"></a>
                            </div>
                        </div>
                        <!-- single-shop-left-end -->
                    </div>
                    <!-- shop-left-area-end -->
                </div>
            </div>
        </div>
    </div>
    <!-- shop-main-area-end -->
    <!-- brand-area-start -->
    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="brand-active bt-2 ptb-50 owl-carousel owl-theme owl-loaded">







                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-970.002px, 0px, 0px); transition: all 0s ease 0s; width: 3071.67px;">
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/2.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/3.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/4.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/5.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/6.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/7.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/1.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/2.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/3.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/4.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/5.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/6.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/7.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/1.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/2.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/3.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/4.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/5.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 161.667px; margin-right: 0px;">
                                <div class="col-lg-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="img/brand/6.png" alt="brand"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-controls">
                        <div class="owl-nav">
                            <div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div>
                            <div class="owl-next" style=""><i class="fa fa-angle-right"></i></div>
                        </div>
                        <div class="owl-dots" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <!-- modal-area-start -->
    <div class="modal-area">
        <!-- single-modal-start -->
        <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-img">
                            <div class="single-img">
                                <img src="img/product/2.jpg" alt="mobile" class="primary">
                            </div>
                        </div>
                        <div class="model-text">
                            <h2><a href="#">Printed Summer Dress</a> </h2>
                            <div class="product-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="price-rate">
                                <span class="old-price"><del>$39.00</del></span>
                                <span class="new-price">$59.00</span>
                            </div>
                            <div class="short-description mt-20">
                                <p>Bacon ipsum dolor sit amet ut nostrud chuck, voluptate adipisicing veniam kielbasa
                                    fugiat ex spare ribs. Incididunt sint officia non cow, ut et. Cillum porchetta
                                    tongue occaecat laborum bacon aliquip fatback flank dolore short loin ball tip
                                    bresaola deserunt dolor. Shoulder fugiat ut in ut tail swine dolore, capicola
                                    ullamco beef occaecat meatball. Laboris turkey in et chuck deserunt ad incididunt
                                    do.</p>
                            </div>
                            <form action="#">
                                <input type="number" value="1">
                                <button type="submit">Add to cart</button>
                            </form>
                            <div class="product-meta">
                                <span>
                                    Categories:
                                    <a href="#">albums</a>,<a href="#">Music</a>
                                </span>
                                <span>
                                    Tags:
                                    <a href="#">albums</a>,<a href="#">Music</a>
                                </span>
                            </div>
                            <!-- social-icon-start -->
                            <div class="social-icon mt-20">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" title="Share on Facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Share on Twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Email to a Friend"><i
                                                class="fa fa-envelope-o"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Pin on Pinterest"><i
                                                class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Share on Google+"><i
                                                class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <!-- social-icon-end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-modal-end -->
    </div>
    <!-- modal-area-end -->





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
        style="display: none; position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a>


</body>

</html>