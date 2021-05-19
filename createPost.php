<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>Add Post</title>
</head>

<header>
    <?php 
    include("navbar.html"); 
    ?>
</header>

<body><div class="admin-wrapper">
        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="#">Manage Posts</a></li>
                <li><a href="#">Manage Users</a></li>
                <li><a href="#">Manage Categories</a></li>
            </ul>
        </div>
        <!-- Left Sidebar -->

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="createPost.php"class="btn-big">Create Post</a>
                <a href="adminpage.php" class="btn-big">Manage Posts</a>
            </div>
            <div class="admContent">
                <h2 class="page-title">New Post</h2>
                <form action="createPost.php" method="post">
        <div>
            <label>Title</label>
            <input type="text" name="title" class="text-input">
        </div>
        <div>
            <label>Body</label>
            <textarea name="body" id="body" ></textarea>
        </div>
        <div>
            <label>Topic</label>
            <select name="topic" >
                <option value="Sports">Sports</option>
                <option value="Technology">Technology</option>
                <option value="Lifestyle">Lifestyle</option>
                <option value="Art">Art</option>
                <option value="Politics">Politics</option>
                <option value="Nature">Nature</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn-big">Add post</button>
        </div>
    </form>
                
            </div>
        </div>
        <!-- Admin Content -->
    </div>
    

    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="js/scripts.js"></script>

</body>
</html>