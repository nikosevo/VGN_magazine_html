<!DOCTYPE html>

<?php 
session_start();
include "connect.php";
include "functions.php";
//defining variables
$fullname = "";
$username = "";
$password = "";
$password2 = "";
$email = "";
?>

<?php 
if(isset($_POST['submit']) && $_POST['submit']== "Insert"){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    $avatar = "assets/profiles/default.jpg";
    $error = 0;

    if($fullname == ""){
        echo "<font color=\"#FF0000\">Πρεπει να συμπληρώσετε το Όνομα!<br></font>";
        $error = 1;
    }
    if($username == ""){
        

        echo "<font color=\"#FF0000\">Username cannot be empty!<br></font>";
        $error = 1;

    }else{
        $sql = "SELECT * FROM users WHERE username='$username'";
		$result = mysqli_query($link, $sql) or die(mysqli_error($link));
		$count = mysqli_num_rows($result);
        if($count > 0 ){
            echo "<font color=\"#FF0000\">Username already exist. Please try something else<br></font>";
            $error = 1;
        }
        $sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($link, $sql) or die(mysqli_error($link));
		$count = mysqli_num_rows($result);
        if($count > 0 ){
            echo "<font color=\"#FF0000\">Email already exist. Please try something else<br></font>";
            $error = 1;
        }
    }
    if($password == ""){
        echo "<font color=\"#FF0000\">Πρεπει να συμπληρώσετε τον κωδικό!<br></font>";
        $error = 1;
    }
    if($password != $password2){
        echo "<font color=\"#FF0000\">Οι κωδικοί δεν ειναι ίδιοι!<br></font>";
        $error = 1;
    }
    if($email == ""){
        echo "<font color=\"#FF0000\">Πρεπει να συμπληρώσετε το mail!<br></font>";
        $error = 1;
    }
    if($error){
        echo "<font color=\"#FF0000\">Η εγγραφή ακυρώθηκε λόγω λαθών στα στοιχεία εισόδου!<br></font>" ;
    }else{
        mysqli_autocommit($link, false);
        $sql = "insert into users(userID,avatar,fullname,username,email,passwd,bio,roleID) values('','$avatar','$fullname','$username','$email','$password','','1')";
        $result = mysqli_query($link,$sql) ;
        if($result){
            mysqli_commit($link);
            echo"<font color=\"#3300FF\"><strong><br>Η εγγραφή ολοκληρώθηκε με επιτυχία!<br></font>";
        }else{
            mysqli_rollback($link);
            echo"<font color=\"#FF0000\"><strong><br>Η εγγραφή ακυρώθηκε λόγω λαθών !<br></font>";
        }
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/input.css" />
    <link rel="stylesheet" href="css/flashyButton.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>Registration</title>
</head>

<body>

    <!--Navbar-->
	<header>
    <?php 
        include("navbar.php"); 
        ?>
	</header>
	


    <div class="container-box">
        <form class="wrapper" method="post" action="register.php">
            <h1>Register</h1>

            <div class="form">
                <input type="text" name="fullname" autocomplete="off" required value=<?php echo $fullname ?>>
                <label for="name" class="label-name">
                    <span class="content-name">full name</span>
                </label>
            </div>
            <div class="form">
                <input type="text" name="username" autocomplete="off" required value=<?php echo $username ?>>
                <label for="name" class="label-name">
                    <span class="content-name">username</span>
                </label>
            </div>
            <div class="form">
                <input type="text" name="email" autocomplete="off" required value=<?php echo $email ?>>
                <label for="name" class="label-name">
                    <span class="content-name">email</span>
                </label>
            </div>
            <div class="form">
                <input type="password" name="password" autocomplete="off" required value=<?php echo $password ?>>
                <label for="name" class="label-name">
                    <span class="content-name">password</span>
                </label>
            </div>
            <div class="form">
                <input type="password" name="password2" autocomplete="off" required value=<?php echo $password2 ?>>
                <label for="name" class="label-name">
                    <span class="content-name">confirm password</span>
                </label>
            </div>

           
            <div class="btnWrap">
                <button class="glow-on-hover" type="submit" name="submit" value="Insert" >register</button>
            </div>
        </form>
    </div>

    <!--Scripts-->
    <script type="text/javascript" src="js/mobile.js"></script>
</body>

</html>