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
  
		$email=$_REQUEST["email"];
		$password=$_REQUEST["password"];

        $checkEmailQuery = "SELECT * FROM admins WHERE email = '$email' && password = '$password'";
        $result = $conn->query($checkEmailQuery);

        if($result->num_rows > 0){

            session_start();
            $_SESSION["adminemail"] = $email;

            echo '<script language="javascript">';
            echo 'swal({
            title: "Success!",
            text: "Redirecting in 2 seconds.",
            type: "success",
            timer: 2000,
            showConfirmButton: false
            }, function(){
                    window.location.href = "http://localhost/restaurant/admin/dashboard.php";
            });';
            echo '</script>';
   
        }
        else{
            echo '<script language="javascript">';
            echo 'swal({
            title: "Error!",
            text: "Check Your Password or Email",
            type: "error",
            timer: 2000,
            showConfirmButton: false
            }, function(){
                    window.location.href = "http://localhost/restaurant/admin/login.php";
            });';
            echo '</script>';

        }
	
?>
    </body>
</html>