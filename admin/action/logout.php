<?php
session_start();
unset($_SESSION["adminemail"]);
header("Location:http://localhost/restaurant/admin/login.php");
?>