<?php

session_start();

include 'config.php';

$id = $_SESSION['user_id']; 

$query = "delete from users where user_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: registrationform.php"); 


 ?>