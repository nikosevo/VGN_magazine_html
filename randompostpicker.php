
<?php 
include "common.php";
function pickapost() {  
    $link = mysqli_connect("localhost","root","","database");
    if ($link===false){
        die("ERROR: Den egine sindesi sthn vasi");
    }
  session_start(); 
  $sql = "SELECT COUNT(postID) FROM posts";
  $result = mysqli_query($link, $sql) or die(mysqli_error($link));
  $data = mysqli_fetch_assoc($result);  
  $id = rand(1,10);
  echo '<script>postpicker(<?php echo json_encode($id); ?>);</script>';}
pickapost();

?>
<script>
       function postpicker(id) {
           
        window.location.href="Post.php?uid=" + $id;}
           
    </script>