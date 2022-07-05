<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["firstname"]);
header("Location:login.php");
?>