<?php
    session_start();
    include("functions.php");
    $user = getLogedUser();
    $sql = "SELECT * FROM hasrole WHERE userId = $user AND roleId = 1";
    $result = mysqli_query($link,$sql);
    $row = mysqli_
?>
<!DOCTYPE html>
<html lang="en">

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
    

<!-- na painei ta panta  -->
        <form action="editprofilescripts.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="gridContent">
                   <input type="file" name="file" class="uploadPhoto" onclick="updateImage()"> <img src=<?php echo $user['avatar']; ?> alt="avatar" class="avatar"><br>
                    <button type="submit" name="submit" class="glow-on-hover" id="uploadBtn">save Changes</button>
                </div>
                
                <div id="wrap">
                    <div class="grid">
                        <div class="form">
                            <input type="text" name="name" autocomplete="off" required value="<?php echo $user['username']?>"/>
                            <label for="name" class="label-name">
                                <span class="content-name">Username</span>
                            </label>
                        </div>
                        <div class="form">
                            <input type="text" name="email" autocomplete="off"  required value="<?php echo $user['email']?>"/>
                            <label for="name" class="label-name">
                                <span class="content-name">email</span>
                            </label>
                        </div>
                        <i id="info" class="fa fa-info"><p>leave this field blank if you want to keep your current password</p></i>
                        <div class="form">
                            <input type="password" name="password" autocomplete="off" />
                            <label for="name" class="label-name">
                                <span class="content-name">new password</span>
                            </label>
                        </div>
                        <div class="form">
                            <input type="text" name="fewWords" autocomplete="off"  required value="<?php echo $user['bio']?>"/> />
                            <label for="name" class="label-name">
                                <span class="content-name">fewWords</span>
                            </label>
                        </div>
                        <?php if($user)
                    </div>
                </div>
            </div>
        </form>

</body>

</html>