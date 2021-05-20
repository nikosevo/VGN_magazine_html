<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="styles/basic/style.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

    <?php
		session_start();
		include "connect.php";
		include "functions.php";
		include "common.php";
        $postID=$_SESSION['postID'];
        $sql = "SELECT * FROM posts WHERE postID='$postID'";
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        $role = $row['roleID'];

        $

        ?>
