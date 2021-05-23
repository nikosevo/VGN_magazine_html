<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="styles/basic/style.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>



    <?php
		include "connect.php";
		include "functions.php";
		include "common.php";
        $postID=$_SESSION['postID'];
        $sql = "SELECT  *
        FROM posts, users
        WHERE postID=$postID
        AND posts.userID = users.userID";
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $image = $row['image'];
        $groupID= $row['groupID'];
        $description= $row['description'];
        $date= $row['date'];
        $content= $row['content'];
        $fullname=$row['fullname'];
        $avatar=$row['avatar'];
        $username=$row['username'];
    

    ?>