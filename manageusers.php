<!DOCTYPE html>

<?php 
session_start();
include "connect.php";
include "functions.php";

if(isset($_SESSION['userID'])){
    $loggedNow = $_SESSION['userID'];
    $sqlroles="SELECT roleId FROM hasrole WHERE userId='$loggedNow'";  
    $result = mysqli_query($link, $sqlroles) or die(mysqli_error($link));
    $row = [];
    while($row = $result->fetch_row()){
    
        if(in_array(6,$row) || in_array(1,$row)){
            $hasPrivilages = true;
            break;
        }
        else{
            $hasPrivilages=false;
        }
    }


}
else{
    $hasPrivilages=false;
}

if(!$hasPrivilages){
    header("LOCATION: priv.php");
    exit();
}

?>

<?php 
if(isset($_GET["uid"]) && $_GET["action"]=="delete"){
    $userID = $_GET["uid"];
    $error = 0;

    
    $sql = "DELETE FROM users
    WHERE userID = '$userID'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    
    if($result){
            mysqli_commit($link);
            send_message('User Deleted !', 'notice');
        }
    
}

?>
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
    include("navbar.php"); 
    ?>
</header>

<body>
    
    <div class="admin-wrapper">
        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="graphpage.php">Main Page</a></li>
                <li><a href="adminpage.php">Manage Posts</a></li>
                <li><a href="manageusers.php">Manage Users</a></li>
                <li><a href="managecategories.php">Manage Categories</a></li>
            </ul>
        </div>
        <!-- Left Sidebar -->

        <!-- Admin Content -->
        <?php 
        $sql1 = "SELECT * FROM users";
        $result1 = mysqli_query($link,$sql1);
        ?>

    
        <div class="admin-content">
            
            <div class="admContent">
                <h2 class="page-title">Manage Users</h2>
                <table>
                    <thead>
                        <th>N</th>
                        <th>Fullname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>  
                    <tbody>
                    <?php 
                    while ($row = mysqli_fetch_array($result1)) {
                    $userID = $row['userID'];
                    $sql2 = "SELECT  *
                    FROM  users 
                    WHERE users.userID=$userID";
                    //  AND hasrole.userID = users.userID;
                    $result2 = mysqli_query($link,$sql2);
                    $usrRow = mysqli_fetch_array($result2);
                    $_SESSION['userID'] = $usrRow['userID'];
                    ?>
                        <tr>
                            <td><?php echo $usrRow['userID']; ?></td>
                            <td><?php echo $usrRow['fullname']; ?></td>
                            <td><?php echo $usrRow['username']; ?></td>
                            <td><?php echo $usrRow['email']; ?></td>
                            <td><button onclick="idgiver(this.id)" id=<?php echo $_SESSION['userID']; ?> href="editPost.php" class="edit">edit</button></td>
                            <td><button onclick="idgiver2(this.id)" id=<?php echo $_SESSION['userID']; ?> href="manageusers.php" name="del" class="delete">delete</button></td>
                            
                        </tr>
                    <?php }?>
                        
                    </tbody>
                </table>
                
            </div>
        </div>
        <!-- Admin Content -->
    </div>
    <script>
       function idgiver(id) {
           
        window.location.href="editPost.php?uid=" + id;
        }
        function idgiver2(id) {
        window.location.href="manageusers.php?uid=" + id + "&action=delete";
        }
           
    </script>
</body>
    
</html>