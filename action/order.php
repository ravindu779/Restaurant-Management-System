<html>
  <head>
    <link rel="icon" href="assets/img/new/logo.jpg" type="image/png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="j25FcvEA"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  </head>
  <body>
<?php
	
    $conn=new mysqli("Localhost","root","","restaurant");
  
        $total=$_REQUEST["total"];
		$name=$_REQUEST["name"];
        $address=$_REQUEST["address"];
		$phone=$_REQUEST["phone"];
        $randomNumber = rand();
        $date = date("Y-m-d");
        $status="Pending";

        session_start();
        $email= $_SESSION["email"]  ;

        $sql = "SELECT * FROM cart ";
        //'$_REQUEST[id]'
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc())
        {

        $sql2="UPDATE cart SET order_states='$randomNumber' WHERE useremail='$email' && order_states=0";
        
        }

        $sql3="insert into orders(ref_number,name,email,address,phone,total,date,status) values('$randomNumber','$name','$email','$address','$phone','$total','$date','$status')";


        if($conn->query($sql2)== true && $conn->query($sql3)== true)
        {
            echo '<script language="javascript">';
            echo 'swal({
            title: "Success!",
            text: "Order Placed Succesfull",
            type: "success",
            timer: 2000,
            showConfirmButton: false
            }, function(){
                window.location.href = "http://localhost/restaurant/dashboard_order.php";
            });';
            echo '</script>';
        }
        else{

            echo '<script language="javascript">';
            echo 'swal({
            title: "Error!",
            text: "Try AGAIN !",
            type: "error",
            timer: 2000,
            showConfirmButton: false
            }, function(){
                    window.location.href = "http://localhost/restaurant/cart_view.php";
            });';
            echo '</script>';

        } 
	
?>
    </body>
</html>