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

        $id=$_REQUEST["id"];
        $name=$_REQUEST["name"];
		$email=$_REQUEST["email"];
        $phone=$_REQUEST["phone"];

        $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($checkEmailQuery);

        if($result->num_rows > 0){

            $sql="UPDATE users SET name='$name',phone='$phone'  WHERE id='$id'";
    
            if($conn->query($sql)== true)
                {
                    echo '<script language="javascript">';
                    echo 'swal({
                    title: "Success!",
                    text: "Email address already exists. But Anathor informations are Updated",
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false
                    }, function(){
                        window.location.href = "http://localhost/restaurant/dashboard_info_edit.php";
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
                        window.location.href = "http://localhost/restaurant/dashboard_info_edit.php";
                });';
                echo '</script>';

            } 
            
        }
        else{

            $sql="UPDATE users SET name='$name', email='$email',phone='$phone'  WHERE id='$id'";
    
                if($conn->query($sql)== true)
                    {
                        echo '<script language="javascript">';
                        echo 'swal({
                        title: "Success!",
                        text: "Redirecting in 2 seconds.",
                        type: "success",
                        timer: 2000,
                        showConfirmButton: false
                        }, function(){
                            window.location.href = "http://localhost/restaurant/dashboard.php";
                        });';
                        echo '</script>';
                    }
                else{

                    echo '<script language="javascript">';
                    echo 'swal({
                    title: "Error!",
                    text: "Email address already exists.",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                    }, function(){
                            window.location.href = "http://localhost/restaurant/dashboard_info_edit.php";
                    });';
                    echo '</script>';

                }           

        }
	
?>
    </body>
</html>