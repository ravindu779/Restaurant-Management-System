<?php
session_start();
$page = "home";
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/regfood/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:33:59 GMT -->
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
        BANNER START
    ==============================-->
    <section class="tf__banner">
        <div class="tf__banner_overlay">
            <span class="banner_shape_1">
                <img src="images/tree_5.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_2">
                <img src="images/tree_3.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_3">
                <img src="images/tree_4.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_4">
                <img src="images/tree_6.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_5">
                <img src="images/tree_7.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_6">
                <img src="images/tree_2.png" alt="shape" class="img-fluid w-100">
            </span>
            <div class="col-12">
                <div class="tf__banner_slider" style="background: url(images/banner_bg.jpg);">
                    <div class="tf__banner_slider_overlay">
                        <div class=" container">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-6 col-md-10 col-lg-6">
                                    <div class="tf__banner_text wow fadeInLeft" data-wow-duration="1s">
                                        <h3>Satisfy Your Cravings</h3>
                                        <h1>Delicious Foods With Wonderful Eating</h1>
                                        <p>Foods are essential components of our daily lives, providing nourishment, pleasure, and cultural significance.</p>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-6 col-sm-10 col-md-9 col-lg-6">
                                    <div class="tf__banner_img wow fadeInRight" data-wow-duration="1s">
                                        <div class="img">
                                            <img src="images/slider_img_1.png" alt="food item" class="img-fluid w-100">
                                            <span>
                                                35% off
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BANNER END
    ==============================-->

    <!--=============================
        ADD SLIDER START
    ==============================-->
    <section class="tf__add_slider mt_75 xs_mt_45">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__add_slider_single" style="background: url(images/offer_slider_1.png);">
                        <div class="text">
                            <h5>weekly best seller</h5>
                            <h2>Fried Chicken</h2>
                            <p>Succulent chicken wings tossed in our spicy Sriracha sauce & baked to perfection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__add_slider_single" style="background: url(images/offer_slider_2.png);">
                        <div class="text">
                            <h5>daily offer</h5>
                            <h2>Hyderabadi Biryani</h2>
                            <p>Accompaniments include chicken pieces, malay pickle, cashew curry, maldive fish sambal and pineapple. Not forgetting a full roast chicken for the large sawan and a half roast chicken for the small sawan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        ADD SLIDER END
    ==============================-->

    
    <!--=============================
        DOWNLOAD APP START
    ==============================-->
    <section class="tf__download mt_100 xs_mt_70">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="tf__download_text_bg" style="background: url(images/download_img.png);">
                    <div class="tf__download_text_overlay">
                        <div class="tf__download_text wow fadeInUp" data-wow-duration="1s">
                            <h5>Rs.5.00 Cashback</h5>
                            <h2>Easy To Order Our All Food</h2>
                            <ul class="d-flex flex-wrap">
                                <li>
                                    <a href="#">
                                        <span class="icon"><i class="fab fa-google-play"></i></span>
                                        <p>
                                            <span>Available on the</span>
                                            Google Play
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><i class="fab fa-apple"></i></span>
                                        <p>
                                            <span>Download on the</span>
                                            App Store
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="row download_slider">
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/download_slider_4.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/download_slider_3.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/download_slider_2.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/download_slider_1.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/download_slider_5.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        DOWNLOAD APP END
    ==============================-->

    <!--=============================
        TEAM START
    ==============================-->
    <section class="tf__team mt_100 xs_mt_70 pt_95 xs_pt_65 pb_95 xs_pb_65">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="tf__section_heading mb_25">
                        <h4>our team</h4>
                        <h2>meet our expert chefs</h2>
                    </div>
                </div>
            </div>

            <div class="row team_slider">
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/chef_1.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>Lasith Rahaman</h4>
                            <p>senior chef</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/chef_2.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>Reshani Silva</h4>
                            <p>senior chef</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/chef_3.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>Nuwan Chamara</h4>
                            <p>senior chef</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/chef_4.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>Aruni Chandra</h4>
                            <p>senior chef</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/chef_5.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>naurin nipu</h4>
                            <p>senior chef</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TEAM END
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


<!-- Mirrored from html.themefax.com/regfood/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:23 GMT -->
</html>