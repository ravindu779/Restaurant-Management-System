<?php
session_start();
$page = "contact";
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/regfood/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:38 GMT -->
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
                    <h1>contact with us</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        CONTACT PAGE START
    ==============================-->
    <section class="tf__contact mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="tf__contact_form_area">
                <div class="row">
                    <div class="col-xl-5 col-md-6 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__contact_info_area">
                            <div class="tf__contact_info">
                                <h3>call</h3>
                                <p>055 2245789</p>
                                <p>077 5679874 </p>
                            </div>
                            <div class="tf__contact_info">
                                <h3>mail</h3>
                                <p>delights@gmail.com</p>
                                <p>delivarydelights@gmail.com</p>
                            </div>
                            <div class="tf__contact_info border-0 p-0 m-0">
                                <h3>location</h3>
                                <p>No 2, Main street , Badulla ,Sri lanka</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-md-6 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                        <form class="tf__contact_form">
                            <h3>contact us</h3>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="tf__contact_form_input">
                                        <span><i class="fas fa-user"></i></span>
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="tf__contact_form_input">
                                        <span><i class="fas fa-envelope"></i></span>
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="tf__contact_form_input">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                        <input type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__contact_form_input">
                                        <span><i class="fas fa-book"></i></span>
                                        <input type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__contact_form_input textarea">
                                        <span><i class="fas fa-pen"></i></span>
                                        <textarea rows="5" placeholder="Message"></textarea>
                                    </div>
                                    <button class="common_btn" type="submit">send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tf__contact_map_area">
                <div class="row mt_100 xs_mt_70">
                    <div class="col-12 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__contact_map">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=No%202,%20Main%20street%20,%20Badulla%20,Sri%20lanka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/124/"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1080px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1080px;}</style></div></div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        CONTACT PAGE END
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


<!-- Mirrored from html.themefax.com/regfood/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:38 GMT -->
</html>