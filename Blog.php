<!DOCTYPE html>
<?php 
    $link = mysqli_connect("localhost","root","","database");
    if ($link===false){
        die("ERROR: Den egine sindesi sthn vasi");
    }
    session_start();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>VGN Magazine | Welcome</title>
</head>

<body>
    <!--Navbar-->
    <header>
    <?php 
        include("navbar.html"); 
    ?>
    </header>
    <div>
    <?php 
        include("burger.html");
    ?>
        

    </div>
    

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
        $_SESSION['postID'] = $usrRow['postID'];
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
                        <button onclick="idgiver(this.id)" id=<?php echo $_SESSION['postID']; ?> href="Post.php" class="readmore">Read More</button>
                        <!-- <button href="Post.php">Read More</button> -->
                    </div>
                </div>
            </div>
    <?php } ?>        
            
        
    </div>






    <!--Scripts-->
    <script>
       function idgiver(id) {
           
        window.location.href="Post.php?uid=" + id;
        }
           
    </script>
    <!-- <script type="text/javascript" src="js/mobile.js"></script> -->

</body>




</html>