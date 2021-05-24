<!DOCTYPE html>

<?php
    include "connect.php";
    session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/createPost.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/flashyButton.css">
    <link rel="stylesheet" href="css/textField.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title> VGN | Edit Categhories</title>
</head>

<header>
    <?php 
    include("navbar.php"); 
    include("functions.php"); 
    ?>
</header>
        <?php
        $group = $_GET["cid"];
        if(isset($_POST['submit'])){
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name']; 
            $fileTmpName = $_FILES['file']['tmp_name']; 
            $fileSize = $_FILES['file']['size']; 
            $fileError = $_FILES['file']['error']; 
            $fileType = $_FILES['file']['type']; 
            $fileDestination="";

            if($fileName != ''){
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
    
                $allowed = array('jpg','jpeg','png');
    
                if(in_array($fileActualExt,$allowed)){
                    if($fileError === 0){
                        if($fileSize < 5000000){
                            $fileNameNew = uniqid('',true).".".$fileActualExt;
                            $fileDestination='assets/'.$fileNameNew;
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
    
    
            
                $newtitle = $_POST['groupName'];
                $newdescription = $_POST['groupDescription'];


                $sql = "UPDATE groups SET groupName='$newtitle',groupDescription='$newdescription',groupImage='$fileDestination' WHERE groupID='$group'";

                $result = mysqli_query($link, $sql) or die(mysqli_error($link));
                header("LOCATION:viewProfile.php");
                exit();
            }else{
                $newtitle = $_POST['groupName'];
                $newdescription = $_POST['groupDescription'];
                $sql = "UPDATE groups SET groupName='$newtitle',groupDescription='$newdescription' WHERE groupID='$group'";
                


                $result = mysqli_query($link, $sql);
                header("LOCATION:viewProfile.php");
                exit();

            }

           
           
        }
        ?> 
<body>

    <?php 
        $groupID = $_GET["cid"];
        $sql2 = "SELECT * FROM groups WHERE groupID=$groupID";
        $result2 = mysqli_query($link,$sql2);

        $row = mysqli_fetch_array($result2);
        $title = $row['groupName'];
        $description = $row['groupDescription'];
    ?>

                
    <form class="wrapper" method="post" enctype="multipart/form-data" action="editCategory.php?cid=<?php echo $groupID?>">
        <div class="container">
            <div class="textFields">

                <div class="form">
                    <input type="text" name="groupName" value="<?php echo $title ; ?>" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">Group Name</span>
                    </label>
                </div>

                <div class="form">
                    <input type="text" name="groupDescription" value="<?php echo $description ; ?>" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">Description</span>
                    </label>
                </div>
                
            <div class="options">
               
                <input type="file" id="file" accept="image/*" name="file">
                <label for="file"><i class="fas fa-upload"></i></label>
                
                <div class="btnWrap">
                    
                    <button class="glow-on-hover" type="submit" name="submit" value="Insert">save</button>
                    
                </div>
                
            </div>
        </div>
    </form>
    
                
            </div>
        </div>
        <!-- Admin Content -->
    </div>
    

    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="js/scripts.js"></script>
    
    

    

</body>
</html>