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

<body>
    
    <div class="admin-wrapper">
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
                <h2 class="page-title">Manage Posts</h2>
                <table>
                    <thead>
                        <th>N</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="2">Action</th>
                    </thead>  
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>This is the first post</td>
                            <td>Gio</td>
                            <td><a href="" class="edit">edit</a></td>
                            <td><a href="" class="delete">delete</a></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
        <!-- Admin Content -->
    </div>

</body>
</html>