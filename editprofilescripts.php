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
        $password = md5($password);
        $email = $_POST['email'];
        $bio = $_POST['fewWords'];

        echo $username;
        echo $password;
        echo $email;
        echo $bio;
        echo $userID;

        //first checking if the user has updates his profile image or not

        if($fileName != ''){
            //croping the image to be rectangle



            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg','jpeg','png');

            if(in_array($fileActualExt,$allowed)){
                if($fileError === 0){
                    if($fileSize < 5000000){
                        $fileNameNew = uniqid('',true).".".$fileActualExt;
                        $fileDestination='assets/profiles/'.$fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDestination);
                        
                        if($fileActualExt == 'jpg' || $fileActualExt =='jpeg'){
                            $im = imagecreatefromjpeg($fileDestination);
                        }else if($fileActualExt == 'png'){
                            $im = imagecreatefrompng($fileDestination);
                        }
                       
                        $size = min(imagesx($im) , imagesy($im));
                        if(imagesx($im) > imagesy($im)){
                            $xoffset = (imagesx($im) - imagesy($im)) / 2;
                            $yoffset = 0;
                        }else{
                            $yoffset = (imagesy($im) - imagesx($im)) / 2;
                            $xoffset = 0;
                        }
                        $im2 = imagecrop($im, ['x' => $xoffset, 'y' => $yoffset, 'width' => $size, 'height' => $size]);
                        imagepng($im2, $fileDestination);
                        
                        if($password == ''){
                            $sql = "UPDATE users 
                            SET 
                            avatar = '$fileDestination',
                            bio = '$bio',
                            email = '$email',
                            username = '$username'
                            WHERE userID = '$userID'";
                        }else{
                            $sql = "UPDATE users 
                            SET 
                            avatar = '$fileDestination',
                            passwd = '$password',                
                            bio = '$bio',
                            email = '$email',
                            username = '$username'
                            WHERE userID = '$userID'";

                        }
                        $result = mysqli_query($link,$sql);
                        header("LOCATION: viewProfile.php");
                        exit();
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
            
            if($password == ''){
                $sql = "UPDATE users 
                SET 
                bio = '$bio',
                email = '$email',
                username = '$username'
                WHERE userID = '$userID'";
            }else{
                $sql = "UPDATE users 
                SET 
                passwd = '$password',                
                bio = '$bio',
                email = '$email',
                username = '$username'
                WHERE userID = '$userID'";

            }
            $result = mysqli_query($link,$sql);
            header("LOCATION: viewProfile.php");
            exit();

        }



    }

?>
    