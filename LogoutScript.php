<?php 
function Logout() {
session_start();    
  unset($_SESSION['username']);
  unset($_SESSION['passwd']);
  $_SESSION['roleID'] = 0;
  $_SESSION['userID']=0;
  //unset($_SESSION['userID']);
  header("LOCATION: index.php");
}
Logout();
?>