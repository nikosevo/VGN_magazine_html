<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/burger.css" />


</head>


<body>
  <div class="burger">
    <div class="cont">
    <?php 
    
    while ($row = mysqli_fetch_array($result2)) {
        $groupID = $_SESSION['groupID'];
        $postId = $row['postID'];
        $sql3 = "SELECT  *
        FROM posts,users
        WHERE groups.groupID=subscribedto.GroupId AND users.userID = subscribedto.UserId AND users.userID=$currentlyLoggedUserId;";
        $result3 = mysqli_query($link,$sql3);
        $usrRow = mysqli_fetch_array($result3);
    ?>
      
      <a href="">Sports</a>
      <?php }?>
    </div>
  </div>
  <div class="burger__toggler"><span></span></div>
  <script>
    const toggler = document.querySelector('.burger__toggler');
    const menu = document.querySelector('.burger');

    toggler.addEventListener('click', () => {
      toggler.classList.toggle('active');
      menu.classList.toggle('active');
    });
    document.addEventListener('scroll' , () => {
      toggler.classList.remove('active');
      menu.classList.remove('active');

    });
  </script>
</body>

</html>