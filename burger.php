
<?php
  require_once "connect.php";
?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/burger.css" />


</head>
<?php
  $sqlburger = "SELECT * FROM groups";
  $result = mysqli_query($link, $sqlburger);
?>


<body>
  <div class="burger">
    <div class="cont">
      <?php while($row = mysqli_fetch_array($result)){ ?>
          <a onclick="idgiver4(this.id);"  <?php echo "id=".$row['groudID'];?> href=""><?php echo $row['groupName']?></a>
      <?php } ?>
    </div>
  </div>
  <div class="burger__toggler"><span></span></div>



  <script>

    function idgiver4(id) {window.location.href="Blog.php?uid=" + id;}

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