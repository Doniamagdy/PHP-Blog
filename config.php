<?php

$servername="localhost";
$username="root";
$pw="";
$db="un_women_blog";
$conn=mysqli_connect($servername,$username,$pw,$db);
if(!$conn){
	die('Connection Failed: '.mysqli_connect_error());
}else{
	echo "Connected Successfully";
}

?>