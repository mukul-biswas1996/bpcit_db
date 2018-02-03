<?php
session_start();
session_destroy();
header('location:http://localhost/loginpage/login.php');
?>

if(!isset($_SESSION['username']))
	echo"your usename or password is incorrect";
	header('location:http://localhost/loginpage/login.php');