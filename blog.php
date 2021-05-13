<!DOCTYPE html>
<?php 
    $link = mysqli_connect("localhost","root","","database2");
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
        <a class="logo" href="/"><img src="assets/logo.png" alt="logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="index.html" style="font-weight: 600;">home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <a class="cta" href="login.html"><i class="fa fa-user" style="font-size:30px;"></i></a>
        <p class="menu"><i class="fa fa-bars" style="font-size:30px;"></i></p>
    </header>
    <div class="overlay">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="index.html">home</a>
            <a href="blog.php">Blog</a>
            <a href="contact.html">Contact</a>
        </div>
    </div>

    <!--make it so it loads everything from the server-->
    <?php 
        $sql1 = "SELECT * FROM posts";
        $result1 = mysqli_query($link,$sql1);

        $sql2 = "SELECT * FROM users WHERE userID=";
    ?>


    <div class="wrapper">
    <?php 
    while ($row = mysqli_fetch_array($result1)) {
    ?>
            <!--first post-->
            <div class="card">
                <div class="image">
                    <img <?php echo "src=".$row['image'];?> />
                </div>
                <div class="content">
                    <div class="title"><?php echo $row['title']; ?></div>
                    <div class="subtitle"><?php echo $row['userID']; ?></div>
                    <div class="bottom">
                        <p><?php echo $row['description']; ?></p>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
    <?php } ?>        
            
        
    </div>






    <!--Scripts-->
    <script type="text/javascript" src="js/mobile.js"></script>

</body>

</html>