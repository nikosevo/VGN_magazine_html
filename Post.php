<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$_SESSION['postID'] = $_GET["uid"];   //the most important line ever dont move or change it thanks to this everythin works -valantis- :3
include "connect.php";
include "article.php";
?>

<head>

    <title><?php echo $_SESSION['title'] ?></title>
    <link rel="stylesheet" href="css/Post.css">
</head>
<header class="zoom">
    
    <img src=<?php echo $_SESSION['image'] ?>>
</header>

<nav>
    <?php include "navbar.php";?>
</nav>

<body>
    <main role="main">

        <div class="content">
            <article id="s1">
                <div class="squeezed">
                    <h1 class="entry-title"><?php echo $_SESSION['title']; ?></h1>


                    <div class="entry-excerpt">
                        <p><?php echo $_SESSION['description']; ?></p>
                    </div>
            </article>
            <br>
            <br>
            <div class="post-meta">
                <div class="entry-author">
                    <a href="#author">
                        <div>
                            <img class="author-avatar" src=<?php echo $_SESSION['avatar']; ?> alt="DesignRevision Editorial">
                        </div>
                        <div class="author-details vcard author author_name">
                            <p class="fn">By <span><?php echo $_SESSION['fullname']; ?></span></p>
                        </div>
                    </a>
                </div>

                <div class="updated-date">
                    <p>Written <span class="updated"> <?php echo $_SESSION['date']; ?> </span></p>
                </div>

            </div>

            <article id="s2"><p>
            <?php echo $_SESSION['content']; ?></p>
                <footer>
                    <p>A <a href="http://www.webdeisgnerwall.com" alt="web designer wall"
                            target="_blank">webdesignerwall.com</a> Tutorial</p>
                </footer>
            </article>

            <article id="s3">
                Hello test
            </article>
        </div>
        <!--Scripts-->
        <script type="text/javascript" src="js/Post.js"></script>
    </main>
</body>
</html>