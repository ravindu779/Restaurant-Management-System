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

        $pic1=$_FILES["Image1"]["name"];
        $pic2=$_FILES["Image2"]["name"];
        $pic3=$_FILES["Image3"]["name"];
  
        $name=$_REQUEST["name"];
        $category=$_REQUEST["category"];
		$price=$_REQUEST["price"];
        $maxprice=$_REQUEST["maxprice"];
		$descriptions=$_REQUEST["descriptions"];

        $sql="insert into foods(name,category,price,maxprice,Image1,Image2,Image3,descriptions) values('$name','$category','$price','$maxprice','$pic1','$pic2','$pic3','$descriptions')";

        if($conn->query($sql)== true)
		{
		echo '<script language="javascript">';
    	echo 'alert("successfull!"); location.href="http://localhost/restaurant/admin/addfood.php"';
    	echo '</script>';

		}
		else
		{
		echo "sorry".$sql ."<br>" . $conn->error;
		}

		$flag=move_uploaded_file($tpic1,"$target1");
		if($flag)
			{
			echo '<script language="javascript">';
    		echo 'alert("successfull!"); ';
    		echo '</script>';
			}
		else
			echo "Sorry".$sql ."<br>" . $conn->error;
		$flag=move_uploaded_file($tpic2,"$target2");
		if($flag)
			{
			echo '<script language="javascript">';
    		echo 'alert("successfull!"); ';
    		echo '</script>';
			}
		else
			echo "Sorry".$sql ."<br>" . $conn->error;
		$flag=move_uploaded_file($tpic3,"$target3");
		if($flag)
			{
			echo '<script language="javascript">';
    		echo 'alert("successfull!"); ';
    		echo '</script>';
			}
		else
			echo "Sorry".$sql ."<br>" . $conn->error;

	
?>
    </body>
</html>