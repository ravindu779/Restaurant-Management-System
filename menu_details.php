<?php
session_start();
$page = "menu";
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/regfood/menu_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:35 GMT -->
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                    <h1>menu Details</h1>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#">menu Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        MENU DETAILS START
    ==============================-->
    <?php
        $conn=new mysqli("Localhost","root","","restaurant");

        $id = $_REQUEST["id"];

        $sql = "SELECT * FROM foods where id=$id";
        //'$_REQUEST[id]'
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc())
        {
    ?>
    <section class="tf__menu_details mt_100 xs_mt_75 mb_95 xs_mb_65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-10 col-md-9 wow fadeInUp" data-wow-duration="1s">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="admin/action/images/<?php echo $row["Image1"]; ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="admin/action/images/<?php echo $row["Image2"]; ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="admin/action/images/<?php echo $row["Image3"]; ?>" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_details_text">
                        <h2><?php echo $row["name"]; ?></h2>
                        <h3 class="price">$<?php echo $row["price"]; ?>.00 <del>$<?php echo $row["maxprice"]; ?>.00</del> </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </p>
                        <p class="short_description"><?php echo $row["descriptions"]; ?>.</p>

                        <form action="action/checkout.php" method="post" enctype="multipart/form">
                        <input type="hidden" name="foodid" value="<?php echo $row["id"]; ?>">
                        <input type="hidden" name="useremail" value="<?php echo $_SESSION["email"]; ?>">
                        <div class="details_size">
                            <h5>select size</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="large" checked value="large">
                                <label class="form-check-label" for="large">
                                    large <span>+ Rs.250 </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium" value="medium">
                                <label class="form-check-label" for="medium">
                                    medium <span>+ Rs.150</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="small" value="small">
                                <label class="form-check-label" for="small">
                                    small <span></span>
                                </label>
                            </div>
                        </div>

                        <div class="details_quentity">
                            <h5>Add Food quentity</h5>
                            <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                <div class="quentity_btn">
                                    <input type="text" placeholder="1" name="f_quentity" required>
                                </div>
                            </div>
                        </div>

                        <div class="details_extra_item">
                            <h5>select option <span>(optional)</span></h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="coca-cola" name="cocacola">
                                <label class="form-check-label" for="coca-cola">
                                    coca-cola <span>+ Rs.10</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="7up" name="7up">
                                <label class="form-check-label" for="7up">
                                    7up <span>+ Rs.15</span>
                                </label>
                            </div>
                        </div>

                        <div class="details_quentity">
                            <h5>Add Drink quentity</h5>
                            <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                <div class="quentity_btn">
                                    <input type="text" placeholder="1" name="d_quentity" required>
                                </div>
                            </div>
                        </div>
                        <ul class="details_button_area d-flex flex-wrap">
                            <li> <button class="common_btn" type="submit" > add to cart</button></li>
                        </ul>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

    <?php } ?>

    <!-- CART POPUT START -->
    <div class="tf__cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="tf__cart_popup_img">
                            <img src="images/popup_cart_img.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">Rs.320.00 <del>Rs.350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large01"
                                        checked>
                                    <label class="form-check-label" for="large01">
                                        large <span>+ Rs.350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium01">
                                    <label class="form-check-label" for="medium01">
                                        medium <span>+ Rs.250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small01">
                                    <label class="form-check-label" for="small01">
                                        small <span>+ Rs.150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola01">
                                    <label class="form-check-label" for="coca-cola01">
                                        coca-cola <span>+ Rs.10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up01">
                                    <label class="form-check-label" for="7up01">
                                        7up <span>+ Rs.15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>Rs.320.00</h3>
                                </div>
                            </div>

                            <ul class="details_button_area d-flex flex-wrap">
                                <li><a class="common_btn" href="#">add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->

    <!--=============================
        MENU DETAILS END
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


<!-- Mirrored from html.themefax.com/regfood/menu_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:35 GMT -->
</html>