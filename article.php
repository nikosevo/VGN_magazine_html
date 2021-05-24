<?php

function getPost($postID){
    include "connect.php";
    
    $sql = "SELECT* FROM posts,users WHERE postID=$postID";
    $result = mysqli_query($link,$sql);
    $post = mysqli_fetch_array($result);
    
    return $post;
}

function getAuthor($postID){

    include "connect.php";

    $sql = "SELECT avatar , fullname , users.userID  FROM posts , users WHERE postID=$postID and posts.userID=users.userID";
    $result = mysqli_query($link,$sql);
    $author = mysqli_fetch_array($result);
    return $author;
}



?>


Notice: Undefined index: uid in C:\xampp\htdocs\VGN\Post.php on line 7

Warning: mysqli_fetch_array() expects parameter 1 to be mysqli_result, bool given in C:\xampp\htdocs\VGN\article.php on line 8

Warning: mysqli_fetch_array() expects parameter 1 to be mysqli_result, bool given in C:\xampp\htdocs\VGN\article.php on line 19

Notice: Undefined index: userID in C:\xampp\htdocs\VGN\Post.php on line 10