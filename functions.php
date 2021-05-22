<?php

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


function getpost(){
    require_once "connect.php";
    $postID=2;
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
    

    $_SESSION['title'] = $title;
    $_SESSION['username'] = $username;
    $_SESSION['image'] = $image;
    $_SESSION['groupID'] = $groupID;
    $_SESSION['description'] = $description;
    $_SESSION['date'] = $date;
    $_SESSION['content'] = $content;
    $_SESSION['fullname'] = $fullname;
    $_SESSION['avatar'] = $avatar;

}


?>