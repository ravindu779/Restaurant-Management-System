<?php
session_start();
$page = "menu";
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/regfood/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:34 GMT -->
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
                    <h1>Foods menu</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">menu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        MENU ITEM START
    ==============================-->
    <section class="tf__menu mt_95 xs_mt_65 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading mb_25">
                        <h4>food Menu</h4>
                        <h2>Popular Delicious Foods</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_filter d-flex flex-wrap">
                        <button class=" active" data-filter="*">all menu</button>
                        <button data-filter=".Burger">burger</button>
                        <button data-filter=".Pizza">pizza</button>
                        <button data-filter=".Pressure">pressure</button>
                        <button data-filter=".Diabetic">diabetic </button>
                    </div>
                </div>
            </div>

            <div class="row grid">

           
            <?php
                $conn=new mysqli("Localhost","root","","restaurant");
                $sql = "SELECT * FROM foods ORDER BY ID DESC";
                //'$_REQUEST[id]'
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc())
                {
            ?>
                <div class="col-xxl-3 col-sm-6 col-lg-4 <?php echo $row["category"]; ?> wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="admin/action/images/<?php echo $row["Image1"]; ?>" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="#"><?php echo $row["category"]; ?></a>
                            <a class="title" href="menu_details.php?id=<?php echo $row["id"] ?>"><?php echo $row["name"]; ?></a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </p>
                            <h5 class="price">Rs.<?php echo $row["price"]; ?>.00 <del>Rs.<?php echo $row["maxprice"]; ?>.00</del></h5>
                            <a class="tf__add_to_cart" href="menu_details.php?id=<?php echo $row["id"] ?>">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.php?id=<?php echo $row["id"] ?>"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            <?php } ?>
            
            </div>
        </div>
    </section>

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
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                        checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ Rs.350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ Rs.250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
                                    <label class="form-check-label" for="small">
                                        small <span>+ Rs.150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                    <label class="form-check-label" for="coca-cola">
                                        coca-cola <span>+ Rs.10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up">
                                    <label class="form-check-label" for="7up">
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
        MENU ITEM END
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


<!-- Mirrored from html.themefax.com/regfood/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:34 GMT -->
</html>