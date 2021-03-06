<!DOCTYPE html>
<?php 
require_once "connect.php";
session_start(); 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VGN | new article</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<link rel="stylesheet" href="css/flashyButton.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/createPost.css">
	<link rel="stylesheet" href="css/input.css">

</head>

<?php
        

        
        if(isset($_SESSION['userID'])){
           
            $loggedNow = $_SESSION['userID'];
            $sqlroles="SELECT roleId FROM hasrole WHERE userId='$loggedNow'";  
            $result = mysqli_query($link, $sqlroles) or die(mysqli_error($link));
            $row = [];
            while($row = $result->fetch_row()){
                if(in_array(4,$row) || in_array(1,$row) || in_array(3,$row)){
                    $hasPrivilages = true;
                    break;
            
                }
                else{
                    $hasPrivilages = false;
                }
            }
            
        
        
        }
        else{
            $hasPrivilages=false;
        }
        
        if($hasPrivilages==false){
            header("LOCATION: priv.php");
            exit();
        }
        

        

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
                    if($fileSize < 5000000){
                        $fileNameNew = uniqid('',true).".".$fileActualExt;
                        $fileDestination='assets/'.$fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDestination);
                                
                        $newtitle = $_POST['title'];
                        $newdescription = $_POST['description'];
                        $newcontent = $_POST['content'];
                        $currentDate = date('Y-m-d');
                        if(!empty($_POST["select"])){
                            $category=$_POST["select"];
                        }else{
                            $category= NULL;
                        }
                        $author = $_SESSION['userID'];
                        if($category!=NULL ){
                        $sql = "INSERT INTO `posts` (`postID`, `date`, `title`, `description`, `content`, `image`, `userID`, `groupID`) VALUES (NULL, '$currentDate', '$newtitle', '$newdescription', '$newcontent', '$fileDestination', '$author', '$category')";
                        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
                        }
                        else{echo '<script>alert("Please select a category")</script>';}
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
<body>
    <header>
		<?php 
        include("navbar.php"); 
        ?>
	</header>
    <!-- we add the function to the action an we are done...well after we do all the checks and stuff-->
    <form action="createPost.php" method="post" enctype="multipart/form-data" >
        <div class="container">
            <div class="textFields">
                <div class="form">
                    <input type="text" name="title" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">Title</span>
                    </label>
                </div>
                <div class="form">
                    <input type="text" name="description" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">description</span>
                    </label>
                </div>
                
                <div class="toolbar">
                    <ul class="tool-list">
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command='justifyLeft'
                                class="tool--btn">
                                <i class=' fas fa-align-left'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command='justifyCenter' 
                                class="tool--btn">
                                <i class=' fas fa-align-center'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="bold" 
                                class="tool--btn">
                                <i class=' fas fa-bold'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="italic"
                                class="tool--btn">
                                <i class=' fas fa-italic'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="underline"
                                class="tool--btn">
                                <i class=' fas fa-underline'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="insertOrderedList"
                                class="tool--btn">
                                <i class=' fas fa-list-ol'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="insertUnorderedList"
                                class="tool--btn">
                                <i class=' fas fa-list-ul'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="createlink" 
                                class="tool--btn">
                                <i class=' fas fa-link'></i>
                            </button>
                        </li>
                    </ul>
                </div>

                <textarea id="output" name="content" contenteditable="true" required></textarea>
            </div>
            <div class="options">
                <input type="file" id="file" accept="image/*" name="file">
                <label for="file"><i class="fas fa-upload"></i></label>
                <div class="custom-select" style="width:200px;">
                    <select name="select" >
                        <option value="">Select category</option>
                        <?php 
                            $sql1 = "SELECT groupName,groupID FROM groups";
                            $categories = mysqli_query($link,$sql1);
                            while ($row =  mysqli_fetch_array($categories)) 
                            {?>
                                <option value=<?php echo $row['groupID']?>><?php echo $row['groupName']?></option>
                            
                        <?php }?>
                    </select>
                </div>
                <div class="btnWrap">
                    <button class="glow-on-hover" type="submit" name="submit" value="Insert">save</button>
                </div>
                
            </div>
        </div>
    </form>

    <script type="text/javascript" src="js/createPost.js"></script>"

    
</body>
</html>