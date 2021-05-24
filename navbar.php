<?php
require_once("connect.php");
  if(isset($_SESSION['userID']))
  {
    $userID = $_SESSION['userID'];
    $sql = "SELECT avatar FROM users WHERE userID=$userID";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row == NULL){
      $avatar = "assets/SVG/default-user.svg";}
    else{
      $avatar = $row['avatar'];}
    
  }else{
    $avatar = "assets/SVG/default-user.svg";
  }

?>

<!DOCTYPE html>
<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/navbar.css">



<a class="logo" href="index.php"><img src="assets/logo.png" alt="logo"></a>
<ul class="nav__links">
  <li><a href="index.php">home</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>

<button id="desktop-cta" class="usr-avatar"><img src=<?php echo $avatar?> alt=""></button>

<div class="dropdown">
  <div class="dropdown__content">
    <a href="createPost.php">new Post  <i class="fas fa-plus"></i></a>
    <a href="viewProfile.php">View Profile  <i class="fas fa-address-card"></i></a>
    <a href="LogoutScript.php" >Log out  <i class="fas fa-sign-out-alt"></i></a>
    <a class="dropdown__close"><i class="fas fa-window-close"></i></a>
  </div>
</div>









<div class="menu"><button class="usr-avatar"><img src=<?php echo "$avatar"?> alt=""></button></div>


<div class="overlay">
  <a class="close">&times;</a>
  <div class="overlay__content">
    <a href="index.php">home</a>
    <a href="blog.php">Blog</a>
    <a href="contact.php">Contact</a>
    <a href="createPost.php">new Post  <i class="fas fa-plus"></i></a>
    <a href="editProfile.php">View Profile  <i class="fas fa-address-card"></i></a>
    <a href="#">logg out  <i class="fas fa-sign-out-alt"></i></a>
  </div>

</div>

<!-- CHECKS THE USER ID IN ORDER TO SHOW THE RIGHT DROPDOWN CONTENT OR REDIRECT TO SIGN IN -->

<?php 
error_reporting(0);
session_start();
if($_SESSION['roleID']==0)
{
  $loggedIn = "false";
}
elseif(!$_SESSION['roleID']==0){
  $loggedIn = "true";
}
?>
        <script id="searcher" loggedIn=<?php echo $loggedIn?> src="js/navbar.js" ></script>



        
