	<?php

        $email=$_SESSION["email"];

	  	$conn=new mysqli("Localhost","root","","restaurant");


		$sql = "SELECT * FROM users where email='$email'";
		$result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $user_id = $row["id"];
            $user_name = $row["name"];
            $user_email = $row["email"];
            $user_phone = $row["phone"];

            $conn->close();
        } else {

            header("Location: sign_in.php"); 
            exit();    
        }

	 ?>

<div class="tf__dashboard_menu">
    <div class="dasboard_header">
        <div class="dasboard_header_img">
            <img src="images/testimonial_img_3.jpg" alt="user" class="img-fluid w-100">
        </div>
        <h2><?php echo $user_name  ?></h2>
    </div>
    <ul>
        <li><a class="active" href="dashboard.php"><span><i class="fas fa-user"></i></span>
                Parsonal Info</a></li>
        <li><a href="dashboard_order.php"><span><i class="fas fa-bags-shopping"></i></span>
                Order</a></li>
        <li><a href="dashboard_change_password.php"><span><i
                        class="fas fa-user-lock"></i></span> Change Password</a></li>
        <li><a href="action/logout.php"><span> <i class="fas fa-sign-out-alt"></i></span> Logout</a></li>
    </ul>
</div>