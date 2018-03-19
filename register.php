<?php 	
	
	$conn = mysqli_connect('localhost', 'root', '', 'petshopdb') or die("CONNCECTION FAILED".mysqli_connect_error());
	$petFile = $_FILES['userImage']['name'];
	$temp = $_FILES['userImage']['tmp_name'];

	$file_to_be_saved = "uploadedImages/".$petFile; //Documents folder, should exist in      your host in there you're going to save the file just uploaded
	move_uploaded_file($temp, $file_to_be_saved);




	if(isset($_POST["regSubmit"])){
			$sql_insert =  "INSERT INTO usertbl(userName,userAge,userAddress,userBirthday,userEmail,userPassword,userImage,userPetName,userPetBreed,userPetSize,userPetColor,userRole) 
			VALUES ('$_POST[userName]','$_POST[userAge]','$_POST[userAddress]','$_POST[userBirthday]','$_POST[userEmail]','$_POST[userPassword]','.$file_to_be_saved','$_POST[userPetName]','$_POST[userPetBreed]','$_POST[userPetSize]','$_POST[userPetColor]','Member')";

		if ($conn->query($sql_insert) === TRUE) {
			echo "New record created successfully";
			header("location: confirmation.html");
		} else {
			echo mysqli_error($conn);
		}
	}
		
?>

