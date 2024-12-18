<?php
session_start();
if( !isset($_SESSION["email"]) ){
header("location:http://localhost/restaurant/sign_in.php");
}
?>