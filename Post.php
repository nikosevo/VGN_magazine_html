<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "connect.php";
include "article.php";

?>

<head>

    <title>Post</title>
    <link rel="stylesheet" href="css/Post.css">
</head>
<header class="zoom">
    <?php 
        include("navbar.html"); 
    ?>
    <img src="assets/photo1.jpg">
</header>

<nav class="nav">
    <a href="#s1" class="active">Introduction</a>
    <a href="#s2">Something</a>
    <a href="#s3">Lorem</a>
    <a href="#s4">Credits</a>
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
                            <img class="author-avatar" src="assets/profiles/default.jpg" alt="DesignRevision Editorial">
                        </div>
                        <div class="author-details vcard author author_name">
                            <p class="fn"><?php echo $_SESSION['postID']; ?></p>
                        </div>
                    </a>
                </div>

                <div class="updated-date">
                    <p>Last Updated <span class="updated">September 9, 2019</span></p>
                </div>

            </div>

            <article id="s2">
                <a>View Tutorial</a>
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                    amet
                    risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget
                    risus
                    varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a
                    ante
                    venenatis dapibus posuere velit aliquet. lorem lorem</p>
                <p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit
                    aliquet.
                    Duis
                    mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    justo
                    odio,
                    dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur
                    et.</p>
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                    amet
                    risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget
                    risus
                    varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a
                    ante
                    venenatis dapibus posuere velit aliquet. lorem lorem</p>
                <p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit
                    aliquet.
                    Duis
                    mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    justo
                    odio,
                    dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur
                    et.</p>
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                    amet
                    risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget
                    risus
                    varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a
                    ante
                    venenatis dapibus posuere velit aliquet. lorem lorem</p>
                <p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit
                    aliquet.
                    Duis
                    mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    justo
                    odio,
                    dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur
                    et.</p>
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                    amet
                    risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget
                    risus
                    varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a
                    ante
                    venenatis dapibus posuere velit aliquet. lorem lorem</p>
                <p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit
                    aliquet.
                    Duis
                    mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                    justo
                    odio,
                    dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur
                    et.</p>
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