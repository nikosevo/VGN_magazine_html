<?php

    function getPost($postID){
        include "connect.php";
        
        $sql = "SELECT* FROM posts,users WHERE postID=$postID";
        $result = mysqli_query($link,$sql);
        $post = mysqli_fetch_array($result);
        
        return $post;
    }


?>