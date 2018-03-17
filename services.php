<?php 	
	
	$conn = mysqli_connect('localhost', 'root', '', 'petshopdb') or die("CONNCECTION FAILED".mysqli_connect_error());
	if(isset($_POST["serveSubmit"])){
			$sql_insert =  "INSERT INTO servicestbl(serveBranch,serveDate,servePetAge,servePetGender,servePetSize,serveList) 
			VALUES ('$_POST[serveBranch]','$_POST[serveDate]','$_POST[servePetAge]','$_POST[servePetGender]','$_POST[servePetSize]','$_POST[checkbox]')";
// ,serveList
// ,'$_POST[serveList]'
		if ($conn->query($sql_insert) === TRUE) {
			header("location: servicesConfirmation.php");
		} else {
			echo mysqli_error($conn);
		}
	}
		
?>

