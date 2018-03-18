<?php
session_start();// Starting Session


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


		$ses_sql = mysqli_query($connection,"select userName,id,userRole from usertbl where userEmail='$username'");
		$row = mysqli_fetch_assoc($ses_sql);
		$userRole = $row['userRole'];

		// SQL query to fetch information of registerd users and finds user match.
		$query = mysqli_query($connection,"select * from usertbl where userPassword='$password' AND userEmail='$username' ");
		$rows = mysqli_num_rows($query);
		if ($rows == 1){
			$_SESSION['login_user']=$username;
			// Initializing Session
			// header("location: home-user.php"); // Redirecting To Other Page
			if($userRole == "Member"){
				echo "member login";
			}
			elseif($userRole == "Admin"){
				echo "admin login";
			}
			elseif($userRole == "Secretary"){
				echo "secretary login";
			}
			elseif($userRole == "Doctor"){
				echo "doctor login";
			}
			else{
				echo "error";
			}
		} 
		else{
			echo "error";
		}
		mysqli_close($connection); // Closing Connection
	
?>