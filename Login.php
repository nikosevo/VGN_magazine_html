<!DOCTYPE html>


<html lang="en">
<?php
session_start();
include("functions.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/input.css" />
    <link rel="stylesheet" href="css/flashyButton.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>Contact Form</title>
</head>

<?php
    print_message();
    
?>

<body>

    <!--Navbar-->
	<header>
        <?php 
        include("navbar.html"); 
        ?>
    
	</header>
	

    <form name="login" method="post" action="phplogin.php">
        <div class="container-box">
            <div class="wrapper">
                <h1>Log In</h1>

                <div class="form">
                    <input type="text" name="username" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">Username</span>
                    </label>
                </div>
                <div class="form">
                    <input type="password" name="password" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">password</span>
                    </label>
                </div>

                <input type="checkbox" id="keep-me-logged" name="vehicle1" ><span>keep me logged in</span>
                <a href="register.php">What if I don't have an account</a>
                <div class="btnWrap">
                    <!-- <input class="glow-on-hover" type="submit" name="submit" value="Submit"> -->
                    <button class="glow-on-hover" type="submit">log in</button>
                </div>
            </div>
        </div>
    </form>

    <!--Scripts-->
    <script type="text/javascript" src="js/mobile.js"></script>
</body>

</html>