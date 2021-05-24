<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include "connect.php";
    include "article.php";
    $postID = $_GET["uid"];   
    $post = getPost($postID);
    $author = getAuthor($postID);
    $loggedUser = $_SESSION['userID'];

?>

<head>
    <title><?php echo $post['title'] ?></title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/Post.css">
</head>
<header>
    <?php include "navbar.php";?>
</header>
<div class="zoom">
    <img src=<?php echo $post['image'] ?>>
</div>
    
<body>
    <main role="main">

        <div class="content">
            <article id="s1">
                <div class="squeezed"><br>
                    <h1><?php echo $post['groupID']; ?></h1>
                    <h1 class="entry-title"><?php echo $post['title']; ?></h1>


                    <div class="entry-excerpt">
                        <p><?php echo $post['description']; ?></p>
                    </div>
            </article>
            <br>
            <br>
            <div class="post-meta">
                <div class="entry-author">
                        <div>
                            <img class="author-avatar" src=<?php echo $author['avatar']; ?> alt="DesignRevision Editorial">
                        </div>
                        <div class="author-details vcard author author_name">
                            <a href="viewProfile.php?uid=<?php echo $author['userID']; ?>" class="fn">By <span><?php echo $author['fullname']; ?></span></a>
                        </div>
                </div>

                <div class="updated-date">
                    <p>Last Edited on:  <span class="updated"> <?php echo $post['date']; ?> </span></p>
                </div>

            </div>

            <article id="s2"><p>
            <?php echo $post['content']; ?></p>
            </article>

            <article id="s3">
                <h3>Do you want to see more of these posts?</h3> <br><br>
                <a <?php echo "href=subscribe.php?uid=".$loggedUser."&gid=".$post['groupID']; ?> id=<?php echo $post['groupID']?> class="subBtn" >subscribe</a>
            </article>
            <br><br><br><br><br><br><br><br><br>
        </div>
        <!--Scripts-->
        <script type="text/javascript" src="js/Post.js"></script>
    </main>
</body>
</html>