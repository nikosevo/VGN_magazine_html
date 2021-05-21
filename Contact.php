<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/input.css" />
    <link rel="stylesheet" href="css/flashyButton.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>Contact Form</title>
</head>

<body>
    <!--Navbar-->
	<!--Navbar-->
	<header>
		<?php 
        include("navbar.php"); 
        ?>
	</header>
	


    <div class="container-box">
        <form id="form" class="wrapper" action="mail.php" method="POST">
            <h1>Contact Us</h1>

            <div class="form">
                <input type="text" name="name" autocomplete="off" required />
                <label for="name" class="label-name">
                    <span class="content-name">name</span>
                </label>
            </div>
            <div class="form">
                <input type="text" name="email" autocomplete="off" required />
                <label for="name" class="label-name">
                    <span class="content-name">email</span>
                </label>
            </div>
            <div class="form">
                <input type="text" name="subject" autocomplete="off" required />
                <label for="name" class="label-name">
                    <span class="content-name">subject</span>
                </label>
            </div>
            <div class="form">
                <input type="text" name="thoughts" autocomplete="off" required />
                <label for="name" class="label-name">
                    <span class="content-name">tell us your thoughts</span>
                </label>
            </div>
            <div class="btnWrap">
                <button class="glow-on-hover" type="button" onclick="document.getElementById('form').submit();">Sent</button>
            </div>
        </form>
    </div>

    <!--Scripts-->
    <script type="text/javascript" src="js/mobile.js"></script>

</body>

</html>