
<!doctype html>
<?php

  require_once("connect.php");

  echo"<script> alert(".$_SESSION['userID']."</script>";
  

  $sql = "SELECT  groupName
  FROM groups,subscribedto,users
  WHERE groups.groupID=subscribedto.GroupId AND users.userID = subscribedto.UserId AND users.userID=1"
  $var = 3;

  $result = mysql_query($link,$sql);
  echo"<script> alert(".$var.")</script>";

?>
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
      <?php while($row = mysql_fetch_array($result)){?>
        <a href="#"><?php $row['groupName']?></a>
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