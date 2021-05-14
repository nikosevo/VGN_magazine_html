<?php
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name']; 
        $fileTmpName = $_FILES['file']['tmp_name']; 
        $fileSize = $_FILES['file']['size']; 
        $fileError = $_FILES['file']['error']; 
        $fileType = $_FILES['file']['type']; 


        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png');

        if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize < 500000){
                    echo $fileActualExt;
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    echo $fileNameNew;
                    $fileDestination='assets/profiles/'.$fileNameNew;
                    echo $fileDestination;
                    move_uploaded_file($fileTmpName,$fileDestination);
                }else{
                    echo "Very large file";
                }
                
            }else{
                echo "There was an error uploading your file";
            }
        }else{
            echo "You cannot upload files of this type";
        }


    }
?>