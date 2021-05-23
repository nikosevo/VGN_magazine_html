<!DOCTYPE html>

<?php
session_start();
if(isset($_GET["pid"])){
    $_SESSION['postID'] = $_GET["pid"];   //the most important line ever dont move or change it thanks to this everythin works -valantis- :3
}


include "connect.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/createPost.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/flashyButton.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>Add Post</title>
</head>

<header>
    <?php 
    include("navbar.php"); 
    include("functions.php"); 
    ?>
</header>
        <?php
        if(isset($_POST['submit'])){
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name']; 
            $fileTmpName = $_FILES['file']['tmp_name']; 
            $fileSize = $_FILES['file']['size']; 
            $fileError = $_FILES['file']['error']; 
            $fileType = $_FILES['file']['type']; 
            $fileDestination="";

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg','jpeg','png');

            if(in_array($fileActualExt,$allowed)){
                if($fileError === 0){
                    if($fileSize < 500000){
                        echo $fileActualExt;
                        $fileNameNew = uniqid('',true).".".$fileActualExt;
                        echo $fileNameNew;
                        $fileDestination='assets/'.$fileNameNew;
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


        
            $newtitle = $_POST['title'];
            $newdescription = $_POST['description'];
            $newcontent = $_POST['content'];
            $currentDate = date("Y-m-d");
            
            $sql = "UPDATE posts SET date = '$currentDate' ,title = '$newtitle' , description = '$newdescription' ,  content = '$newcontent' , image = '$fileDestination' WHERE postID = 1;";
            $result = mysqli_query($link, $sql) or die(mysqli_error($link));
           
        }
        ?> 
<body>

    <?php 
        if (isset($_SESSION['postID'])){
            $postID = $_SESSION['postID'];
        $sql2 = "SELECT * FROM posts,users WHERE postID=$postID AND posts.userID = users.userID;";
        $result2 = mysqli_query($link,$sql2);
        }

        $row = mysqli_fetch_array($result2);
        $title = $row['title'];
        $description = $row['description'];
        $content = $row['content'];
    ?>
    
<div class="admin-wrapper">
        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="#">Manage Posts</a></li>
                <li><a href="#">Manage Users</a></li>
                <li><a href="#">Manage Categories</a></li>
            </ul>
        </div>
        <!-- Left Sidebar -->

        <!-- Admin Content -->
        <div class="admin-content">
            
            <div class="admContent">
                <h2 class="page-title">Edit Post</h2>
                
    <form class="wrapper" method="post" enctype="multipart/form-data" action="editPost.php">
        <div class="container">
            <div class="textFields">

                <div class="form">
                    <input type="text" name="title" value="<?php echo $title ; ?>" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">Title</span>
                    </label>
                </div>
                
                <div>
                    <label>Description</label>
                    
                    <textarea name="description" id="styled"  ><?php echo $description ; ?></textarea>
                </div>
                <div>
                    <label>Body</label>
                    <textarea name="content" id="body" ><?php echo $content ; ?></textarea>
                </div>

            </div>
            <div class="options">
                <!-- <div class="custom-select" style="width:200px;">
                    <select>
                    <option value="Sports">Sports</option>
                    <option value="Technology">Technology</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Art">Art</option>
                    <option value="Politics">Politics</option>
                    <option value="Nature">Nature</option>
                    </select>
                </div> -->
                
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