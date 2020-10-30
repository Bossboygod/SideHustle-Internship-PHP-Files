<?php
    if (isset($_POST['submit'])){
        $file = $_FILES['file'];
        
        $fileName = $_FILES['file']['name']; //File name
        $fileTmpName = $_FILES['file']['tmp_name']; // Temporary Storage
        $fileSize = $_FILES['file']['size']; // Size of File
        $fileError = $_FILES['file']['error']; // File Error
        $fileType = $_FILES['file']['type']; // TYpe of file

        $fileExt = explode('.', $fileName); // File Extensions
        $fileActualExt = strtolower(end($fileExt)); 

        $allowed = array('avi','mp4','3gp',);

        if(in_array($fileActualExt, $allowed)){
             if($fileError === 0){
                if ($fileSize > 5000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $filedestination = 'uploads/'.$fileNameNew; // File upload destination
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
?>