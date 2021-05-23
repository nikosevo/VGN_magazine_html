<?php
include "connect.php";
    if(isset($_POST['submit'])){
        session_start();
        $userID = $_SESSION['userID'];
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name']; 
        $fileTmpName = $_FILES['file']['tmp_name']; 
        $fileSize = $_FILES['file']['size']; 
        $fileError = $_FILES['file']['error']; 
        $fileType = $_FILES['file']['type']; 

        $username = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $bio = $_POST['fewWords'];

        echo $username;
        echo $password;
        echo $email;
        echo $bio;
        echo $userID;

        //first checking if the user has updates his profile image or not

        if($fileName != ''){
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg','jpeg','png');

            if(in_array($fileActualExt,$allowed)){
                if($fileError === 0){
                    if($fileSize < 5000000){
                        echo $fileActualExt;
                        $fileNameNew = uniqid('',true).".".$fileActualExt;
                        echo $fileNameNew;
                        $fileDestination='assets/profiles/'.$fileNameNew;
                        echo $fileDestination;
                        move_uploaded_file($fileTmpName,$fileDestination);
                        $sql = "UPDATE users 
                        SET 
                        avatar = '$fileDestination',
                        bio = '$bio',
                        email = '$email',
                        passwd = '$password',                
                        username = '$username'
                        WHERE
                        userID = '$userID'";
                        header("viewProfile.php");

                    $result = mysqli_query($link,$sql);
                    header("viewProfile.php");
                    }else{
                        echo "Very large file";
                    }
                    
                }else{
                    echo "There was an error uploading your file";
                }
            }else{
                echo "You cannot upload files of this type";
            }

        }else{
            
            $sql = "UPDATE users 
                SET 
                bio = '$bio',
                email = '$email',
                passwd = '$password',                
                username = '$username'
                WHERE
                userID = '$userID'";
            $result = mysqli_query($link,$sql);
            header("viewProfile.php");

        }



    }

?>
    