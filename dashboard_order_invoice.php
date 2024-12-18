<?php
session_start();
$page = "dashboard";
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/regfood/dashboard_order_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:43 GMT -->
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
                                <h3>invoice</h3>
                                <div class="tf__invoice">
                                    <div class="tf__invoice_header">

                                        <?php
                                                $conn=new mysqli("Localhost","root","","restaurant");

                                                $id1 = $_REQUEST["id"];

                                                $sql = "SELECT * FROM orders where ref_number=$id1";
                                                //'$_REQUEST[id]'
                                                $result = $conn->query($sql);
                                                while($row=$result->fetch_assoc())
                                                {
                                            ?>

                                        <div class="header_address">
                                            <h4><?php echo $row["name"]; ?></h4>
                                            <p><?php echo $row["address"]; ?></p>
                                            <p><?php echo $row["phone"]; ?></p>
                                        </div>
                                        <div class="header_address">
                                            <p><b>Order Status:</b> <span><?php $status=$row["status"]; echo $row["status"]; ?></span></p>
                                            <p><b>Order ID:</b> <span> #<?php echo $row["ref_number"]; ?></span></p>
                                            <p><b>date:</b> <span><?php echo $row["date"]; ?></span></p>
                                        </div>

                                        <?php } ?>
                                    </div>
                                    <div class="tf__invoice_body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr class="border_none">
                                                        <th class="sl_no">Item</th>
                                                        <th class="package">item description</th>
                                                        <th class="price">Price</th>
                                                        <th class="qnty">Quantity</th>
                                                        <th class="total">Total</th>
                                                    </tr>
                                                    <?php
                                                        $conn=new mysqli("Localhost","root","","restaurant");
                                                        $email=$_SESSION["email"];
                                                        $AllTotal=0;
                                                        $count=0;
                                                        $sql = "SELECT * FROM cart where useremail='$email' && order_states=$id1";
                                                        //'$_REQUEST[id]'
                                                        $result = $conn->query($sql);
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                    ?>

                                                    <tr>
                                                        <?php

                                                            $id = $row["foodid"];

                                                            $sql2 = "SELECT * FROM foods where id=$id";
                                                            

                                                            $total=0;
                                                            //'$_REQUEST[id]'
                                                            $result2 = $conn->query($sql2);
                                                            while($row2=$result2->fetch_assoc())
                                                            {
                                                                $count++;
                                                        ?>
                                                        <td class="tf__pro_img">
                                                            <?php echo $count; ?>
                                                        </td>
                                                        
                                                        <td class="tf__pro_name">
                                                            <a href="#"><?php echo $row2["name"]; ?>,</a>
                                                            <span><?php echo $row["size"]; ?></span>
                                                            <?php if($row["optional1"] != '0'){ echo "<p>coca-cola</p>";}  ?>

                                                            <?php if($row["optional2"] != '0'){ echo "<p>7up</p>";}  ?>
                                                            
                                                            
                                                        </td>
                                                        
                                                        
                                                        <td class="tf__pro_status">
                                                            <h6>Rs.<?php echo $row2["price"]; ?>.00</h6>
                                                        </td>

                                                        <td class="tf__pro_select">
                                                            <h6><?php if ($row["size"] == 'small') {
                                                                    echo 'Rs.' . $row2["price"] . '.00 * ' . $row["f_quentity"];
                                                                    $total=$row2["price"]*$row["f_quentity"];

                                                                } elseif ($row["size"] == 'medium') {
                                                                    echo '(Rs.' . $row2["price"] . '.00 + RS.150.00 )* ' . $row["f_quentity"];
                                                                    $total=($row2["price"]+150)*$row["f_quentity"];
                                                                } elseif ($row["size"] == 'large') {
                                                                    echo '(Rs.' . $row2["price"] . '.00 + RS.250.00 )* ' . $row["f_quentity"];
                                                                    $total=($row2["price"]+250)*$row["f_quentity"];
                                                                } ?>
                                                            </h6>
                                                            <h6><?php if ($row["optional1"] != '0') { echo 'Rs.10.00 * ' . $row["d_quentity"];  $total =  $total+ (10*$row["d_quentity"]); }?></h6>
                                                            <h6><?php if ($row["optional2"] != '0') { echo 'Rs.15.00 * ' . $row["d_quentity"];  $total =  $total+ (15*$row["d_quentity"]);}?></h6>
                                                        </td>

                                                        <td class="tf__pro_tk">
                                                            <h6>Rs.<?php echo $total; $AllTotal = $AllTotal+ $total?>.00</h6>
                                                        </td>
                                                    </tr>

                                                    <?php } ?>
                                                    <?php } ?>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td class="package" colspan="3">
                                                            <b>Total Paid</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b></b>
                                                        </td>
                                                        <td class="total">
                                                            <b>Rs.<?php echo $AllTotal; ?>.00</b>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <?php

                                        if ($status == "Delivery") {
                                            echo '<a class="print_btn common_btn" href="action/completed.php?id='.$id1.' "><i class="fas fa-business-time"></i> Order Deliverd</a>';
                                        }
                                    ?>
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


<!-- Mirrored from html.themefax.com/regfood/dashboard_order_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:43 GMT -->
</html>