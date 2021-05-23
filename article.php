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

    $sql = "SELECT avatar , fullname FROM posts , users WHERE postID=$postID and posts.userID=users.userID";
    $result = mysqli_query($link,$sql);
    $author = mysqli_fetch_array($result);
    return $author;
}



?>