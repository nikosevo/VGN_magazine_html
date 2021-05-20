<!DOCTYPE html>
<?php 
    $link = mysqli_connect("localhost","root","","database");
    if ($link===false){
        die("ERROR: Den egine sindesi sthn vasi");
    }

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>VGN Magazine | Welcome</title>
</head>

<body>
    <!--Navbar-->
    <!--Navbar-->
    <header>
    <?php 
        include("navbar.html"); 
        include("burger.html");
        ?>
        
    </header>
    

    <!--make it so it loads everything from the server-->
    <?php 
        $sql1 = "SELECT * FROM posts";
        $result1 = mysqli_query($link,$sql1);
        
    ?>


    <div class="wrapper">
    <?php 
    while ($row = mysqli_fetch_array($result1)) {
        $postid = $row['postID'];
        $sql2 = "SELECT  *
        FROM posts, users
        WHERE postID=$postid
        AND posts.userID = users.userID;";
        $result2 = mysqli_query($link,$sql2);
        $usrRow = mysqli_fetch_array($result2);
    ?>
            <!--first post-->
            <div class="card">
                <div class="image">
                    <img <?php echo "src=".$usrRow['image'];?> />
                </div>
                <div class="content">
                    <div class="title"><?php echo $usrRow['title']; ?></div>
                    <div class="subtitle"><?php echo $usrRow['username'] , "  " ,date('d-m-Y',strtotime($usrRow['date'])); ?></div>
                    <div class="bottom">
                        <p><?php echo $usrRow['description']; ?></p>
                        <a href="Post.php" style="text-decoration: none;">Read More</a>
                    </div>
                </div>
            </div>
    <?php } ?>        
            
        
    </div>






    <!--Scripts-->
    <!-- <script type="text/javascript" src="js/mobile.js"></script> -->

</body>

</html>