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
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/editProf.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/input.css" />
    <link rel="stylesheet" href="css/flashyButton.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Edit your profile</title>
</head>

<body>
    <!--Navbar-->
    <header>
        <?php 
        include("navbar.php"); 
        ?>
    </header>
    


        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="gridContent">
                   <input type="file" name="file" class="uploadPhoto"> <img src="assets/profiles/default.jpg" alt="avatar" class="avatar">
                    <button type="submit" name="submit" class="glow-on-hover" id="uploadBtn">save Changes</button>
                </div>
                
                <div id="wrap">
                    <div class="grid">
                        <div class="form">
                            <input type="text" name="name" autocomplete="off" required />
                            <label for="name" class="label-name">
                                <span class="content-name">Username</span>
                            </label>
                        </div>
                        <div class="form">
                            <input type="text" name="email" autocomplete="off" required />
                            <label for="name" class="label-name">
                                <span class="content-name">email</span>
                            </label>
                        </div>
                        <div class="form">
                            <input type="text" name="password" autocomplete="off" required />
                            <label for="name" class="label-name">
                                <span class="content-name">new password</span>
                            </label>
                        </div>
                        <div class="form">
                            <input type="text" name="fewWords" autocomplete="off" required />
                            <label for="name" class="label-name">
                                <span class="content-name">fewWords</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>


</body>

</html>