<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/regfood/check_out.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:36 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>RegFood || Restaurant HTML Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/venobox.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.exzoom.css">

    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!--=============================
        MENU START
    ==============================-->
    <?php
    	include 'inc/navigation.php';
	?>
    <!--=============================
        MENU END
    ==============================-->


    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="tf__breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="tf__breadcrumb_text">
                    <h1>Payment</h1>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#">Payment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        CHECK OUT PAGE START
    ==============================-->
    <section class="tf__cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__checkout_form">
                        <div class="tf__check_form">
                            <form action="action/order.php" method="post">
                                <input type="hidden" name="total" value="<?php echo $_SESSION["total"];?>">
                                <div class="row mt_30">
                                    <div class="col-12">
                                        <h5>billing address</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="tf__check_single_form">
                                            <input type="text" placeholder="First Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="tf__check_single_form">
                                            <input type="text" placeholder="Address" name="address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="tf__check_single_form">
                                            <input type="text" placeholder="Phone *" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="tf__check_single_form">
                                            <input type="email" placeholder="Email *" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="tf__check_single_form mt_30 mb-0">
                                            <h5>Payment Information</h5>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="tf__payment_area">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_1.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_2.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_3.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_4.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_5.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_6.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_1.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_2.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_1.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_2.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_3.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="tf__single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="images/pay_4.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tf__payment_modal">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="tf__pay_modal_info">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, tempora cum optio
                                                cumque rerum dolor impedit exercitationem? Eveniet suscipit repellat, quae natus hic
                                                assumenda.</p>
                                            <ul>
                                                <li>Natus hic assumenda consequatur excepturi ducimu.</li>
                                                <li>Cumque rerum dolor impedit exercitationem Eveniet.</li>
                                                <li>Dolor sit amet consectetur adipisicing elit tempora cum </li>
                                            </ul>
                                                <input type="text" placeholder="Card Number">
                                                <input type="text" placeholder="Card CSV">
                                                <input type="text" value="<?php echo "$".$_SESSION["total"].".00"; ?>" readonly>
                                                <div class="tf__payment_btn_area">
                                                    <button type="button" class="btn btn-danger common_btn"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success common_btn">Place Order</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="tf__cart_list_footer_button">
                        <div class="tf__cart_list_footer_button_text">
                            <h6>total cart</h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have ered alteration in some form, by injected humour, or randomised word which don't look even slightly believable. If you are going to use a passage of Lorem Ipsulm you need to sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <p class="total"><span>total:</span> <span>$<?php echo  $_SESSION["total"];?>.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        CHECK OUT PAGE END
    ==============================-->


    <!--=============================
        FOOTER START
    ==============================-->
    <?php
    include 'inc/footer.php';
    ?>
    <!--=============================
        FOOTER END
    ==============================-->


    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="tf__scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
        SCROLL BUTTON END 
    ==============================-->


    <!--jquery library js-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="js/Font-Awesome.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- isotop js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- counter up js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.min.js"></script>
    <!-- nice select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- venobox js -->
    <script src="js/venobox.min.js"></script>
    <!-- sticky sidebar js -->
    <script src="js/sticky_sidebar.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- ex zoom js -->
    <script src="js/jquery.exzoom.js"></script>

    <!--main/custom js-->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from html.themefax.com/regfood/check_out.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:36 GMT -->
</html>