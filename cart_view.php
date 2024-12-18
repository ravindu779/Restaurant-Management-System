<?php
session_start();
$page = "cart";
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themefax.com/regfood/cart_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:35 GMT -->
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
                    <h1>cart view</h1>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#">cart view</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        CART VIEW START
    ==============================-->
    <section class="tf__cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__cart_list">
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="tf__pro_img">
                                            Image
                                        </th>

                                        <th class="tf__pro_name">
                                            details 
                                        </th>

                                        <th class="tf__pro_status">
                                            price
                                        </th>

                                        <th class="tf__pro_select">
                                            quantity
                                        </th>

                                        <th class="tf__pro_tk">
                                            total
                                        </th>

                                        <th class="tf__pro_icon">
                                            <a class="clear_all" href="#">Delete</a>
                                        </th>
                                    </tr>

                                    <?php
                                        $conn=new mysqli("Localhost","root","","restaurant");
                                        $email=$_SESSION["email"];
                                        $AllTotal=0;
                                        $sql = "SELECT * FROM cart where useremail='$email' && order_states=0";
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
                                        ?>
                                        <td class="tf__pro_img">
                                            <img src="admin/action/images/<?php echo $row2["Image1"]; ?>" alt="product" class="img-fluid w-100">
                                        </td>
                                        
                                        <td class="tf__pro_name">
                                            <a href="#"><?php echo $row2["name"]; ?></a>
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

                                        <td class="tf__pro_icon">
                                            <a href="action/delcartitem.php?id=<?php echo $row["id"] ?>"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__cart_list_footer_button mt_50">
                        <div class="row">
                            <div class="col-xl-7 col-md-6">
                                <div class="tf__cart_list_footer_button_img">
                                    <img src="images/cart_offer_img.jpg" alt="cart offer" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="tf__cart_list_footer_button_text">
                                <p class="total"><span>total:</span> <span>Rs.<?php echo $AllTotal; ?>.00</span></p>
                                    <form id="myForm" action="action/order.php" method="post" enctype="multipart/form">
                                        <input type="hidden" name="total" value="<?php echo $AllTotal; ?>">
                                        <div class="row mt_30">
                                            <div class="col-md-12 col-lg-12 col-xl-12 pb-2">
                                                <div class="tf__check_single_form">
                                                    <input type="text" placeholder="Name" name="name" id="name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12 col-xl-12 pb-2">
                                                <div class="tf__check_single_form">
                                                    <input type="text" placeholder="Phone *" name="phone"  id="phone" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12 col-xl-12">
                                                <textarea cols="3" rows="4" name="address" placeholder="Notes about your order Address for delivery" id="notes" required></textarea>
                                            </div>
                                        </div>
                                        <a class="common_btn" href="#" onclick="validateForm(event)">Place Order</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--============================
        CART VIEW END
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

    <script>
        function validateForm(event) {
            // Get form input values
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var notes = document.getElementById("notes").value;

            // Perform validation
            if (name === "" || phone === "" || notes === "") {
                alert("All fields are required!");
                event.preventDefault(); // Prevent form submission
            } else {
                // Form is valid, continue with form submission
                document.getElementById('myForm').submit();
            }
        }
    </script>

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


<!-- Mirrored from html.themefax.com/regfood/cart_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 08:34:36 GMT -->
</html>