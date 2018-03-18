<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = @mysqli_connect('localhost', 'root', '', 'petshopdb');

// Starting Session
session_start();

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User

$ses_sql = mysqli_query($connection,"select username,id from usertbl where userEmail='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
$id=$row['id'];
if(!isset($login_session)){
	mysql_close($connection); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
}
?>