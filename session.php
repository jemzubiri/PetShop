<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = @mysqli_connect('localhost', 'root', '', 'petshopdb');

// Starting Session
session_start();

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User

$ses_sql = mysqli_query($connection,"select userName,id,userRole,userPassword,userEmail from usertbl where userEmail='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$userName = $row['userName'];
$id=$row['id'];
$userPass= $row['userPassword'];
$userRole = $row['userRole'];
$userEmail = $row['userEmail'];
if(!isset($userName)){
	mysql_close($connection); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
}
?>