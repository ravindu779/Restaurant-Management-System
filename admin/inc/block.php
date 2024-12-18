<?php
session_start();
if( !isset($_SESSION["adminemail"]) ){
header("location:http://localhost/restaurant/admin/login.php");
}
?>