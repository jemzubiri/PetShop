<?php 	
	
	$conn = mysqli_connect('localhost', 'root', '', 'petshopdb') or die("CONNCECTION FAILED".mysqli_connect_error());
    echo $_POST['checkbox'];
	if(isset($_POST["groomSubmit"])){
			$sql_insert =  "INSERT INTO groomingtbl(groomBranch,groomDate,groomPetAge,groomPetGender,groomPetSize,groomList) 
			VALUES ('$_POST[branch]','$_POST[date]','$_POST[petage]','$_POST[petgender]','$_POST[petsize]'),'$_POST[checkbox]'";
// ,groomList
// ,'$_POST[groomList]'
		if ($conn->query($sql_insert) === TRUE) {
			echo "New record created successfully";
			header("location: groomingConfirmation.php");
		} else {
			echo mysqli_error($conn);
		}
	}
		
?>

