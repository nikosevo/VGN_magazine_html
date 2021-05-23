<?php

require_once "connect.php";

function print_message() {
    if ((isset($_SESSION['type_of_message'])) && (isset($_SESSION['message'])) && ($_SESSION['type_of_message'] != '') && ($_SESSION['message'] != '')) {
        echo "<center><div class=" . $_SESSION['type_of_message'] . ">";
        echo $_SESSION['message'];
        echo "</div></center>";
        unset($_SESSION['message']);
        unset($_SESSION['type_of_message']);
        return;
    }
}



function send_message($string, $type) {
    $_SESSION['message'] = $string;
    $_SESSION['type_of_message'] = $type;
}


function getRandPost(){
    include "connect.php";
    $postID = rand(1,13);
    $sql = "SELECT * FROM posts WHERE postID = $postID";

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $row = mysqli_fetch_array($result);
    return $row;
}

function getAuthorsResult(){
    include "connect.php";
    //4 is the id of the writer aka author...
    $sql = "SELECT *
    FROM users
    INNER JOIN hasrole
    ON users.userID = hasrole.userid 
    WHERE hasrole.roleid = 4";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    return $result;
}

function getCategoriesResult(){
    include "connect.php";
    //we named categories groups for some reason
    $sql = "SELECT * FROM groups";
    $result = mysqli_query($link,$sql) or die(mysqli_error($link));
    return $result;
}

function getLogedUser(){

    include "connect.php";
    $userID = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $userID";
    $result = mysqli_query($link,$sql);
    $loggedInUsr = mysqli_fetch_array($result);
    return $loggedInUsr;
}

?>