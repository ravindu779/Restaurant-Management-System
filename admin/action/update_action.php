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

    $target1= "images/".basename($_FILES['Image1']['name']);
    $target2= "images/".basename($_FILES['Image2']['name']);
    $target3= "images/".basename($_FILES['Image3']['name']);


    $tpic1=$_FILES["Image1"]["tmp_name"];
    $tpic2=$_FILES["Image2"]["tmp_name"];
    $tpic3=$_FILES["Image3"]["tmp_name"];
	
    $conn=new mysqli("Localhost","root","","restaurant");

        if($_FILES["Image1"]["name"] == ''){

            $pic1=$_REQUEST["Image1_old"];
        }
        else{

            $pic1=$_FILES["Image1"]["name"];
        }

        if($_FILES["Image2"]["name"] == ''){

            $pic2=$_REQUEST["Image2_old"];
        }
        else{

            $pic2=$_FILES["Image2"]["name"];
        }

        if($_FILES["Image3"]["name"] == ''){

            $pic3=$_REQUEST["Image3_old"];
            
        }
        else{

            $pic3=$_FILES["Image3"]["name"];
        }
  
        $id=$_REQUEST["id"];
        $name=$_REQUEST["name"];
        $category=$_REQUEST["category"];
		$price=$_REQUEST["price"];
        $maxprice=$_REQUEST["maxprice"];
		$descriptions=$_REQUEST["descriptions"];

        $sql="UPDATE foods SET name='$name', category='$category',price='$price',maxprice='$maxprice',Image1='$pic1',Image2='$pic2',Image3='$pic3',descriptions='$descriptions' WHERE id='$id'";

        if($conn->query($sql)== true)
        
		{

        $flag=move_uploaded_file($tpic1,"$target1");
        $flag=move_uploaded_file($tpic2,"$target2");
        $flag=move_uploaded_file($tpic3,"$target3");

		echo '<script language="javascript">';
    	echo 'alert("successfull!"); location.href="http://localhost/restaurant/admin/editfood.php?id=' . $id . '"';
    	echo '</script>';

		}
		else
		{
		echo "sorry".$sql ."<br>" . $conn->error;
		}

	
?>
    </body>
</html>