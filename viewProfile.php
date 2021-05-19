<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/viewProfile.css">
    <link rel="stylesheet" href="css/global.css">

    <title>VGN | View Profiles</title>
</head>
<body>

    <!--here we include the nav bar with php lata-->
    <header>
		<?php 
        include("navbar.html"); 
        include "common.php";
        require_once "connect.php";
        session_start();

        $var = $_SESSION['userID'];

        $sql1 = "SELECT * FROM users WHERE userID='$var'";
        $result1 = mysqli_query($link,$sql1);
        $user = mysqli_fetch_array($result1);
        
        ?>
    </header>
    <!-- profile sections-->
    <div class="container">
        <div class="container__profile">
            <div class="black-box">
                <span>author</span>
                <div class="img-container"><img src="assets/profiles/default.jpg" alt=""></div>
                <a href="editProfile.php"><i class="fas fa-user-edit"></i></a>
            </div>
            <div class="details">
                <?php echo"<h1> '$user[username]'</h1>"?>
                <h1><?php echo".$user['fullname'].";?></h1>
                <h2>username</h2>
                <p>some bullshit about you boring life we dont really care we just wanna show it to leoboomer</p>
            </div>
        </div>
        <!-- my arcticles section -->
        <div class="container__articles">
            <div class="head">
                <h2>your articles</h2>
                <a href="#"><i class="fas fa-plus"></i></a>
            </div>

            <!--The articles beggin to unravel-->
            <div class="articles-wrapper">
                <a href="#" class="article">
                    <h1 class="title">this is a title asdfasdf  <i class="fas fa-quote-right"></i></h1>
                    <h2>this is jsut a description</h2>
                </a>
                <a href="#" class="article">
                    <h1 class="title">this is a title asdfasdf  <i class="fas fa-quote-right"></i></h1>
                    <h2>this is jsut a description</h2>
                </a>
                <a href="#" class="article">
                    <h1 class="title">this is a title asdfasdf  <i class="fas fa-quote-right"></i></h1>
                    <h2>this is jsut a description</h2>
                </a>
                <a href="#" class="article">
                    <h1 class="title">this is a title asdfasdf  <i class="fas fa-quote-right"></i></h1>
                    <h2>this is jsut a description</h2>
                </a>
               
            </div>
        </div>
    </div>
    
</body>
</html>