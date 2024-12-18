<?php
session_start();
$page = "about";
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/regfood/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:32 GMT -->
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
    <section class="tf__breadcrumb" style="background: url(images/breadcrumb_bg.jpg);">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="tf__breadcrumb_text">
                    <h1>about us</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a>about us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        ABOUT PAGE START
    ==============================-->
    <section class="tf__about_us mt_100 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="tf__about_us_img">
                        <div class="img">
                            <img src="images/about_chef.jpg" alt="about us" class="img-fluid w-100">
                        </div>
                        <h3>12+ <span>Years experience</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate officiis architecto
                            reiciendis.
                            <span>jhon deo</span>
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="tf__section_heading mb_25">
                        <h4>About Company</h4>
                        <h2>Helathy Foods Provider</h2>
                    </div>
                    <div class="tf__about_us_text">
                        <p>At Deliver Delights we take pride in our diverse menu that caters to every palate. Whether you're craving
                            classic comfort food, exotic international flavors, or health-conscious options, we've got something for everyone. Our culinary team is passionate about
                            crafting mouthwatering dishes using only the freshest, highest-quality ingredients.
                        </p>
                        <ul>
                            <li>
                                <h4>Fast and Reliable Delivery</h4>
                                <p>Our delivery team is dedicated to getting your food to you as quickly as possible. We understand that when hunger strikes, you want your meal promptly. Count on us to deliver your order piping hot and on time.
                                </p>
                            </li>
                            <li>
                                <h4>Quality and Safety</h4>
                                <p>Your safety and satisfaction are our top priorities. We adhere to the strictest hygiene standards to ensure that every dish is prepared and delivered with the utmost care. From our kitchen to your table, we guarantee a safe and delightful dining experience.</p>
                            </li>
                            <li>
                                <h4>Community and Sustainability</h4>
                                <p>We believe in giving back to the community that has supported us throughout our journey. We actively participate in local initiatives and promote sustainability by sourcing our ingredients responsibly and reducing our carbon footprint.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf__mission mt_100 xs_mt_70" style="background: url(images/mission_bg.png);">
        <div class="tf__mission_overlay pt_70 xs_pt_40 pb_100 xs_pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-10 col-lg-7">
                        <div class="tf__mission_text">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-bullseye-arrow"></i>
                                    </div>
                                    <div class="text">
                                        <h4>vision</h4>
                                        <p>We are committed to powering businesses around the globe with the best digital data.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-lightbulb-on"></i>
                                    </div>
                                    <div class="text">
                                        <h4>mission</h4>
                                        <p>To create the most accurate, comprehensive, and actionable Digital Data, so every business can win their market.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-gem"></i>
                                    </div>
                                    <div class="text">
                                        <h4>goals</h4>
                                        <p>Timely and efficient delivery is crucial. Restaurants aim to minimize delivery times and ensure that the food arrives fresh and in good condition.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf__about_choose mt_100 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7 wow fadeInLeft" data-wow-duration="1s">
                    <div class="tf__section_heading mb_25">
                        <h4>Why choose us</h4>
                        <h2>Why we are the best</h2>
                    </div>
                    <div class="tf__about_choose_text">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="tf__about_choose_text_box">
                                    <span><i class="fas fa-burger-soda"></i></span>
                                    <h4>Fresh food</h4>
                                    <p>From our kitchen to your table, we guarantee a safe and delightful dining experience.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tf__about_choose_text_box">
                                    <span><i class="fal fa-truck"></i></span>
                                    <h4>Fast Delivery</h4>
                                    <p>Our delivery team is dedicated to getting your food to you as quickly as possible.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tf__about_choose_text_box">
                                    <span><i class="fas fa-file-certificate"></i></span>
                                    <h4>Quality Maintain</h4>
                                    <p>We understand that when hunger strikes, you want your meal promptly. </p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tf__about_choose_text_box">
                                    <span><i class="fas fa-headset"></i></span>
                                    <h4>24/7 Service</h4>
                                    <p>We actively participate in local initiatives and promote sustainability by sourcing our ingredients responsibly and reducing our carbon footprint.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5 wow fadeInRight" data-wow-duration="1s">
                    <div class="tf__about_choose_img">
                        <img src="images/why_choose_img.jpg" alt="about us" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf__counter mt_100 xs_mt_70" style="background: url(images/counter_bg.jpg);">
        <div class="tf__counter_overlay pt_120 xs_pt_90 pb_100 xs_pb_0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="text">
                                <h2 class="counter">85,000</h2>
                                <span><i class="fas fa-user"></i></span>
                            </div>
                            <p>customer serve</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="text">
                                <h2 class="counter">120</h2>
                                <span><i class="fas fa-hat-chef"></i></span>
                            </div>
                            <p>experience chef</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="text">
                                <h2 class="counter">72,000</h2>
                                <span><i class="fas fa-users"></i></span>
                            </div>
                            <p>happy customer</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="text">
                                <h2 class="counter">30</h2>
                                <span><i class="fas fa-trophy"></i></span>
                            </div>
                            <p>winning award</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf__testimonial pt_95 xs_pt_65 mb_100 xs_mb_70">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="tf__section_heading mb_20">
                        <h4>testimonial</h4>
                        <h2>our customar feedbacks</h2>
                    </div>
                </div>
            </div>

            <div class="row testi_slider">
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="images/testimonial_img_2.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>Dinithi Abesinghe</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">I love ordering from this restaurant! The food always arrives hot and fresh, and the delivery is super fast.Keep up the great work!</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="images/testimonial_img_3.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>Lahiru Gamage</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">The variety of food options is amazing. I can always find something I'm in the mood for. Plus, the portion sizes are generous. Highly recommended!</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="images/testimonial_img_1.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>Ravindu Rathnayaka</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">The food is great, but the last couple of times, my order arrived later than the estimated time. Please work on improving the delivery times.</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="images/testimonial_img_1.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>Kavindu Weerasinghe</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">The quality of the food has gone downhill recently. It used to be much better. I hope they can get back to their old standards.</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="images/testimonial_img_1.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>Amani Perera</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">The packaging for the desserts needs improvement.My cheesecake arrived completely smushed, and it looked nothing like the picture on the menu.</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        ABOUT PAGE END
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


<!-- Mirrored from html.themefax.com/regfood/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:34 GMT -->
</html>