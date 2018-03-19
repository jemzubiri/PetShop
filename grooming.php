<?php 	
	include 'session.php';
	$_SESSION["id"] = $id;
	$conn = mysqli_connect('localhost', 'root', '', 'petshopdb') or die("CONNCECTION FAILED".mysqli_connect_error());
	if(isset($_POST["groomSubmit"])){
			$sql_insert =  "INSERT INTO groomingtbl(groomBranch,groomDate,groomPetAge,groomPetGender,groomPetSize,groomList,userId,referenceNo) 
			VALUES ('$_POST[branch]','$_POST[date]','$_POST[petage]','$_POST[petgender]','$_POST[petsize]','$_POST[checkbox]','$id','$_POST[groomingreferenceNo]')";
			echo $sql_insert;
		if ($conn->query($sql_insert) === TRUE) {
			header("location: groomingConfirmation.php");
		} else {
			echo mysqli_error($conn);
		}
	}
		
?>

