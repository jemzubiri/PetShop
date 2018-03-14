<?php
// Starting Session
session_start();

// Variable To Store Error Message
$error=''; 
if (isset($_POST['submit'])) {
	
	if (empty($_POST['email']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	
	else{
		// Define $username and $password
		$username=$_POST['email'];
		$password=$_POST['password'];
		
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = @mysqli_connect('localhost', 'root', '', 'petshopdb');

		
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);

		// SQL query to fetch information of registerd users and finds user match.
		$query = mysqli_query($connection,"select * from usertbl where userPassword='$password' AND userEmail='$username'");
		$rows = mysqli_num_rows($query);

		if ($rows == 1){
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: home-user.php"); // Redirecting To Other Page
		} 
		else{
			$error = "Username or Password is invalid";
		}
		mysqli_close($connection); // Closing Connection
	}
}
?>