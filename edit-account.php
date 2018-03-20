<?php
include('session.php');

// echo $_SESSION["userName"] = $userName;
// echo $_SESSION["userPassword"] = $userPass;
// echo $_SESSION["userRole"] = $userRole;

$emailSubmit = $_GET['emailSubmit'];
$passSubmit = $_GET['passSubmit'];
$id = $_GET['idSubmit'];

$update_sql = mysqli_query($connection,"UPDATE usertbl SET userEmail='$emailSubmit',userPassword = '$passSubmit' WHERE id='$id' ");

mysql_close($connection);
?>  