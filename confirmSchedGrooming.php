<?php
include('session.php');


$groom = $_GET['groomId'];


$tablesql = mysqli_query($connection,"UPDATE groomingtbl SET isActive='yes' WHERE groomId='$groom' ");


?>