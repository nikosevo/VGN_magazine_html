<!DOCTYPE html>

<?php 
session_start();
include "connect.php";
$_SESSION['postID'] = $_GET["pid"];

?>

<?php 
if(isset($_POST['submit']) ){
    $postID = $_SESSION['postID'];
    $error = 0;

    
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
    
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);
        
    
    else{
        mysqli_autocommit($link, false);
        $sql = "insert into users(userID,avatar,fullname,username,email,passwd,bio,roleID) values('','$avatar','$fullname','$username','$email','$password','','1')";
        $result = mysqli_query($link,$sql) ;
        if($result){
            mysqli_commit($link);
            echo"<font color=\"#3300FF\"><strong><br>Η εγγραφή ολοκληρώθηκε με επιτυχία!<br></font>";
        }else{
            mysqli_rollback($link);
            echo"<font color=\"#FF0000\"><strong><br>Η εγγραφή ακυρώθηκε λόγω λαθών !<br></font>";
        }
    }
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>Add Post</title>
</head>

<header>
    <?php 
    include("navbar.php"); 
    ?>
</header>

<body>
    
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
        <?php 
        $sql1 = "SELECT * FROM posts";
        $result1 = mysqli_query($link,$sql1);
        ?>

    
        <div class="admin-content">
            <div class="button-group">
                <a href="createPostAdmin.php"class="btn-big">Create Post</a>
                <a href="adminpage.php" class="btn-big">Manage Posts</a>
            </div>
            <div class="admContent">
                <h2 class="page-title">Manage Posts</h2>
                <table>
                    <thead>
                        <th>N</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="2">Action</th>
                    </thead>  
                    <tbody>
                    <?php 
                    while ($row = mysqli_fetch_array($result1)) {
                    $postid = $row['postID'];
                    $sql2 = "SELECT  *
                    FROM posts, users
                    WHERE postID=$postid
                    AND posts.userID = users.userID;";
                    $result2 = mysqli_query($link,$sql2);
                    $usrRow = mysqli_fetch_array($result2);
                    $_SESSION['postID'] = $usrRow['postID'];
                    ?>
                        <tr>
                            <td><?php echo $usrRow['postID']; ?></td>
                            <td><?php echo $usrRow['title']; ?></td>
                            <td><?php echo $usrRow['fullname']; ?></td>
                            <td><button onclick="idgiver(this.id)" id=<?php echo $_SESSION['postID']; ?> href="editPost.php" class="edit">edit</button></td>
                            <td><button onclick="idgiver2(this.id)" id=<?php echo $_SESSION['postID']; ?> href="adminpage.php" name="submit" class="delete">delete</button></td>
                            
                        </tr>
                    <?php }?>
                        
                    </tbody>
                </table>
                
            </div>
        </div>
        <!-- Admin Content -->
    </div>
    <script>
       function idgiver(id) {
           
        window.location.href="editPost.php?pid=" + id;
        }
        function idgiver2(id) {
        window.location.href="adminpage.php?pid=" + id;
        }
           
    </script>
</body>
</html>