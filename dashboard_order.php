<?php
session_start();
$page = "dashboard";
?>
<!DOCTYPE html>
<html lang="en">

<?php
    $pageName = 'dashboard_order';
?>
<!-- Mirrored from html.themefax.com/regfood/dashboard_order.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:42 GMT -->
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
                    <h1>user dashboard</h1>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#">dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        DASHBOARD START
    ==========================-->
    <section class="tf__dashboard mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="tf__dashboard_area">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <?php
                            include 'inc/dashboard_menu.php';
                        ?>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__dashboard_content">
                            <div class="tf_dashboard_body">
                                <h3>order list</h3>
                                <div class="tf_dashboard_order">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr class="t_header">
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Phone</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php
                                                    $conn=new mysqli("Localhost","root","","restaurant");
                                                    $email=$_SESSION["email"];
                                                    $AllTotal=0;
                                                    $sql = "SELECT * FROM orders WHERE email='$email' ORDER BY id DESC";
                                                    //'$_REQUEST[id]'
                                                    $result = $conn->query($sql);
                                                    while($row=$result->fetch_assoc())
                                                    {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <h5>#<?php echo $row["ref_number"]; ?></h5>
                                                    </td>
                                                    <td>
                                                        <p><?php echo $row["date"]; ?></p>
                                                    </td>
                                                    <td>
                                                        <h5><?php echo $row["phone"]; ?></h5>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            $status = $row["status"];

                                                            if ($status == "Pending") {
                                                                echo '<span class="active">' . $status . '</span>';
                                                            } elseif ($status == "Complete") {
                                                                echo '<span class="complete">' . $status . '</span>';
                                                            } elseif ($status == "Delivery") {
                                                                echo '<span class="cancel">' . $status . '</span>';
                                                            }
                                                        ?>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.php?id=<?php echo $row["ref_number"] ?>">View Details</a></td>
                                                </tr>
                                                <?php } ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        DASHBOARD END 
    ==========================-->


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


<!-- Mirrored from html.themefax.com/regfood/dashboard_order.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:43 GMT -->
</html>