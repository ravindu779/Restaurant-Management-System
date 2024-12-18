<?php
session_start();
unset($_SESSION["email"]);
header("Location:http://localhost/restaurant/index.php");
?>