<?php session_start(); ?>
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
            require_once "connect.php";
            include("navbar.php"); 
            if(isset($_GET['uid'])) {
                $usr = $_GET['uid'];
                $viewer = true;
                if($usr['userID'] == $_SESSION['userID'])
                    $viewer =false;
            }else{
                $usr = $_SESSION['userID'];
                $viewer = false;
            }




            $sql = "SELECT * FROM users WHERE userID=$usr";
            $result = mysqli_query($link,$sql);
            $user = mysqli_fetch_array($result);

            $sql = "SELECT * FROM posts WHERE userID=$usr";
            $result = mysqli_query($link,$sql);


        
  
        ?>
    </header>
    <!-- if i am logged in...i can edit my profile and my posts -->
    <?php if($viewer == false){ ?>
    <!-- profile sections-->
    <div class="container">
        <div class="container__profile">
            <div class="black-box">
                <span>author</span>
                <div class="img-container"><img src=<?php echo $user['avatar'];?> alt=""></div>
                <a href="editProfile.php"><i class="fas fa-user-edit"></i></a>
            </div>
            <div class="details">
                <h1><?php echo $user['fullname'];?></h1>
                <h2><?php echo $user['username'];?></h2>
                <p><?php echo $user['bio'];?></p>
            </div>
        </div>
        <!-- my arcticles section -->
        <div class="container__articles">
            <div class="head">
                <h2>your articles</h2>
                <a href="createPost.php"><i class="fas fa-plus"></i></a>
            </div>

            <!--The articles beggin to unravel-->
            <div class="articles-wrapper">
                <?php 
                    while($usr_articles = mysqli_fetch_array($result)) { ?>
                    <a href="editPost.php?pid=<?php echo $usr_articles['postID'];?>" id=<?php echo $usr_articles['postID'];?> class="article">
                    <h1 class="title"><?php echo $usr_articles['title'];?><i class="fas fa-edit"></i></h1>
                    <h2><?php echo $usr_articles['description'];?></h2>
                </a>
                    
                <?php } ?> 
               
            </div>
        </div>
    </div>
    <!-- otherwise i can only see the other author posts-->
    <?php }else{ ?>
        <div class="container">
        <div class="container__profile">
            <div class="black-box">
                <span>author</span>
                <div class="img-container"><img src=<?php echo $user['avatar'];?> alt=""></div>
            </div>
            <div class="details">
                <h1><?php echo $user['fullname'];?></h1>
                <h2><?php echo $user['username'];?></h2>
                <p><?php echo $user['bio'];?></p>
            </div>
        </div>
        <!-- my arcticles section -->
        <div class="container__articles">
            <div class="head">
                <h2><?php echo $user['username']; ?>'s articles</h2>
            </div>

            <!--The articles beggin to unravel-->
            <div class="articles-wrapper">
                <?php 
                    while($usr_articles = mysqli_fetch_array($result)) { ?>
                    <a href="Post.php?pid=<?php echo $usr_articles['postID'];?>" id=<?php echo $usr_articles['postID'];?> class="article">
                    <h1 class="title"><?php echo $usr_articles['title'];?><i class="fas fa-quote-right"></i></h1>
                    <h2><?php echo $usr_articles['description'];?></h2>
                </a>
                    
                <?php } ?> 
               
            </div>
        </div>
    </div>
    <?php } ?>
    
</body>
</html>