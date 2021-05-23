<!DOCTYPE html>
<?php 
    $link = mysqli_connect("localhost","root","","database");
    if ($link===false){
        die("ERROR: Den egine sindesi sthn vasi");
    }
    $groupID = 0;
    session_start();
    if(isset($_GET["gid"])){
        $groupID = $_GET["gid"];

    }
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
        include "navbar.php";
        include "burger.php";
    ?>
    </header>



    

    <!--make it so it loads everything from the server--> 
    <?php 
        $sql = "SELECT * FROM posts";
        $all_posts_result = mysqli_query($link,$sql);
        
        if ($groupID != 0 ){
            $sql = "SELECT * FROM posts WHERE groupID=$groupID";
            $all_posts_result = mysqli_query($link,$sql);
        }
    ?>


    <div class="wrapper">

        <!--load data if groupID is not selected so it is unfiltered data-->
    <?php 
        $groupID = NULL;
        if ($groupID == 0 ){
            while ($post = mysqli_fetch_array($all_posts_result)) {?>
                <div class="card">
                    <div class="image">
                        <img <?php echo "src=".$post['image'];?> />
                    </div>
                    <div class="content">
                        <div class="title"><?php echo $post['title']; ?></div>
                        <div class="subtitle"><?php echo $post['username'] , "  " ,date('d-m-Y',strtotime($post['date'])); ?></div>
                        <div class="bottom">
                            <p><?php echo $post['description']; ?></p>
                            <button onclick="idgiver(this.id)" id=<?php echo $post['postID']; ?> href="Post.php" class="readmore">Read More</button>
                            <!-- <button href="Post.php">Read More</button> -->
                        </div>
                    </div>
                </div>
    <?php }} ?>        
    </div>
        

    <!--Scripts-->
    <script>
       function idgiver(id) {window.location.href="Post.php?uid=" + id;}     
    </script>
    <script type="text/javascript" src="js/mobile.js"></script> 

</body>




</html>