<?php 
	include 'connect.php';

	// initialize variables 
	$name = "";
	$age = "";
	$username = "";
	$address = "";
	$images = "";
	$id = 0;
	$update = false;

	//For Insert
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$username = $_POST['username'];
		$address = $_POST['address'];
		
		if (isset($_POST['file'])){
			$file = $_FILES['file'];
			
			$fileName = $_FILES['file']['name']; //File name
			$fileTmpName = $_FILES['file']['tmp_name']; // Temporary Storage
			$fileSize = $_FILES['file']['size']; // Size of File
			$fileError = $_FILES['file']['error']; // File Error
			$fileType = $_FILES['file']['type']; // TYpe of file
	
			$fileExt = explode('.', $fileName); // File Extensions
			$fileActualExt = strtolower(end($fileExt)); 
	
			$allowed = array('jpg','png','jpeg',);
	
			if(in_array($fileActualExt, $allowed)){
				 if($fileError === 0){
					if ($fileSize > 5000) {
						$fileNameNew = uniqid('', true).".".$fileActualExt;
						$filedestination = 'images/'.$fileNameNew; // File upload destination
						move_uploaded_file($fileTmpName, $filedestination);
						header("Loaction: index.php?uploadsuccess");
					} else {
						echo "Your file is too big";
					}
				 } else {
					 echo "There was an error uploading your file!";
				 }
			} else{
				echo "You cannot upload files of this type!";
			}
		}

		mysqli_query($con, "INSERT INTO crudtable (name, age, username, address, images) VALUES ('$name', '$age','$username','$address','$fileNameNew')"); 
		header('location: index.php');
	}

		//For Update
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$username = $_POST['username'];
		$address = $_POST['address'];

		if (isset($_POST['file'])){
			$file = $_FILES['file'];
			
			$fileName = $_FILES['file']['name']; //File name
			$fileTmpName = $_FILES['file']['tmp_name']; // Temporary Storage
			$fileSize = $_FILES['file']['size']; // Size of File
			$fileError = $_FILES['file']['error']; // File Error
			$fileType = $_FILES['file']['type']; // TYpe of file
	
			$fileExt = explode('.', $fileName); // File Extensions
			$fileActualExt = strtolower(end($fileExt)); 
	
			$allowed = array('jpg','png','jpeg',);
	
			if(in_array($fileActualExt, $allowed)){
				 if($fileError === 0){
					if ($fileSize > 5000) {
						$fileNameNew = uniqid('', true).".".$fileActualExt;
						$filedestination = 'images/'.$fileNameNew; // File upload destination
						move_uploaded_file($fileTmpName, $filedestination);
						header("Loaction: index.php?uploadsuccess");
					} else {
						echo "Your file is too big";
					}
				 } else {
					 echo "There was an error uploading your file!";
				 }
			} else{
				echo "You cannot upload files of this type!";
			}
		}

		mysqli_query($con, "INSERT INTO crudtable (name, age, username, address, images) VALUES ('$name', '$age','$username','$address','$fileNameNew')"); 
		header('location: index.php');
	}
	//For Delete
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM crudtable WHERE id=$id");
	header('location: index.php');
}

?>