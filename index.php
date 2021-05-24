<!DOCTYPE html>
<html lang="en">
<?php 
    require_once "connect.php";
    session_start();
	include "functions.php";
	$randPost = getRandPost(); 
	$authors_result = getAuthorsResult();
	$categories_result = getCategoriesResult();
	$user = getLogedUser();
	$isAdmin = isAdmin();


?>
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>



	<link rel="stylesheet" href="css/card.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/cardCarousel.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="css/scroll.css">

</head>
<body>
	<!--Navbar-->
	<header>
		<?php 
        include("navbar.php"); 
        ?>
	</header>
	

	<div class="container">
		<div class="container__item">
			<h2>Science to Fashion</h2>
			<h1>More than just your usual<br> Magazine</h1>
			<div id="links">
				<?php if(isset($_SESSION['userID'])){ ?>
					<?php if($isAdmin){ ?>
						<a href="graphpage.php" id="container__item__cta">do admin stuff</a>
					<?php }else{ ?>
						<a href="createPost.php" id="container__item__cta">Publish now!</a>
				<?php }} ?>
				<?php if(!isset($_SESSION['userID'])){ ?>
					<a href="register.php" id="container__item__cta">Sign up now</a>

				<?php } ?>
				<a href="randompostpicker.php">Read a post</a>
			</div>
		</div>
		<!-- we get the random post in the top -->
		<div class="container__item-2">
			<div class="card">
				<div class="image">
					<img src=<?php echo $randPost['image']; ?> />
				</div>
				<div class="content">
					<div class="title"><?php echo $randPost['title']?></div>
					<div class="subtitle">Some stuff</div>
					<div class="bottom">
						<p><?php echo $randPost['description']; ?></p>
						<button onclick="idgiver2(this.id)" id=<?php echo $randPost['postID']; ?> href="Post.php" class="readmore">Read More</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll">
		<div class="mouse">
		</div>
	</div>

	<div class="authors-carousel">
		<div class="bluebox">
			<div class="svg"><img src="assets/SVG/dots.svg" alt="dots"></div>
			<div class="txt2">AUTHORS</div>
		</div>
		<div class="carousel__container">
			<div class="revolver" id="scroll_container" onmouseover="mouseStatus(true);"
				onmouseout="mouseStatus(false);">
				<?php while($authors = mysqli_fetch_array($authors_result)) { ?>
					<!--first post-->
					<div class="revolver__item">
							<img onclick="idgiver3(this.id)" id=<?php echo $authors['userID'];?> src=<?php echo $authors['avatar']; ?> class="revolver__image">
						</div>
				<?php } ?> 

			</div>
		</div>


	</div>

	<!-- the sider-->
	
	<div class="carousel">
		<h1 style="color: white;">categories</h1>
		<?php while ($categories = mysqli_fetch_array($categories_result)) { ?>


		<a   class="carousel-item">
			<div class="categories">
				<div>
					<img src=<?php echo $categories['groupImage']; ?> alt="other image">
				</div>
				<p><?php echo  $categories['groupDescription']; ?></p>
				<h3><?php echo  $categories['groupName']; ?></h3>
				<button onclick="idgiver(this.id)" id=<?php echo  $categories['groupID'];?> href="Blog.php"> take me to this category</button>
			</div>
		</a>
	<?php } ?> 

	</div>


	<?php include("footer.html"); ?>





	<!--Scripts-->

	<script>
       function idgiver(id) {window.location.href="Blog.php?gid=" + id;}
       function idgiver2(id) {window.location.href="Post.php?uid=" + id;}
       function idgiver3(id) {window.location.href="viewProfile.php?uid=" + id;}
           
    </script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
		integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
		integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="js/authorsScroll.js"></script>
	<script type="text/javascript" src="js/cardCarousel.js"></script>


</body>
</html>