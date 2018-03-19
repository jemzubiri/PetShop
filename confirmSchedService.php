<?php
include('session.php');


$serv = $_GET['servId'];


$tablesql = mysqli_query($connection,"UPDATE servicestbl SET isActive='yes' WHERE serveId='$serv' ");


?>