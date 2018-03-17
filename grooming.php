<?php 	
	error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
	$conn = mysqli_connect('localhost', 'root', '', 'petshopdb') or die("CONNCECTION FAILED".mysqli_connect_error());
	if(isset($_POST["groomSubmit"])){
			$sql_insert =  "INSERT INTO groomingtbl(groomBranch,groomDate,groomPetAge,groomPetGender,groomPetSize) 
			VALUES ('$_POST[branch]','$_POST[date]','$_POST[petage]','$_POST[petgender]','$_POST[petsize]')";
// ,groomList
// ,'$_POST[groomList]'
		if ($conn->query($sql_insert) === TRUE) {
			header("location: groomingConfirmation.php");
		} else {
			echo mysqli_error($conn);
		}
	}
		
?>

