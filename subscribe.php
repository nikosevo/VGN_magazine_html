<?php 
    require_once "connect.php";

    $userID = $_GET["uid"];
    $groupID = $_GET["gid"];
    echo $userID;
    echo $groupID;

    if(isset($userID) && isset($groupID)){
        $sql = "INSERT INTO subscribedto (UserId  , GroupId) VALUES ($userID,$groupID)";
        $result = mysqli_query($link,$sql);
    }

    header("LOCATION:Blog.php");
    exit();
?>