<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
		integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />



	<link rel="stylesheet" href="css/card.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="css/scroll.css">
	<link rel="stylesheet" href="css/cardCarousel.css">



</head>
<?php 
include "functions.php";
getpost();


?>

<body>
	<!--Navbar-->
	<header>
		<?php 
        include("navbar.html"); 
        ?>
	</header>
	

	<div class="container">
		<div class="container__item">
			<h2>Science to Fashion</h2>
			<h1>More than just your usual<br> Magazine</h1>
			<div id="links">
				<a href="#" id="container__item__cta">Sign up now</a>
				<a href="#">Read a post</a>
			</div>
		</div>
		<div>
			<div class="card">
				<div class="image">
					<img src=<?php echo $_SESSION['image']; ?> />
				</div>
				<div class="content">
					<div class="title"><?php echo $_SESSION['title']?></div>
					<div class="subtitle">Some stuff</div>
					<div class="bottom">
						<p><?php echo $_SESSION['description']; ?></p>
						<button onclick="idgiver(this.id)" id=<?php echo 2; ?> href="Post.php" class="readmore">Read More</button>
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
			<div class="svg"><img src="assets/SVG/Asset 3.svg" alt="dots"></div>
			<div class="txt2">AUTHORS</div>
		</div>
		<div class="carousel__container">
			<div class="revolver" id="scroll_container" onmouseover="mouseStatus(true);"
				onmouseout="mouseStatus(false);">

				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>
				<div class="revolver__item">
					<img src="assets/random.jpg" class="revolver__image">
				</div>

			</div>
		</div>


	</div>

	<!-- the sider-->
	<div class="carousel">
		<a href="#one" class="carousel-item">
			<div class="categories">
				<div>
					<img src="assets/images2.jpg" alt="other image">
				</div>
				<p>merikes lepromeris gia thn malakia pou kanoyme</p>
				<h3>Titlos</h3>
			</div>
		</a>
		<a href="#two" class="carousel-item">
			<div class="categories">
				<div>
					<img src="assets/images2.jpg" alt="other image">
				</div>
				<p>merikes lepromeris gia thn malakia pou kanoyme</p>
				<h3>Titlos</h3>
			</div>
		</a>
		<a href="#three" class="carousel-item">
			<div class="categories">
				<div>
					<img src="assets/images2.jpg" alt="other image">
				</div>
				<p>merikes lepromeris gia thn malakia pou kanoyme</p>
				<h3>Titlos</h3>
			</div>
		</a>
		<a href="#four" class="carousel-item">
			<div class="categories">
				<div>
					<img src="assets/images2.jpg" alt="other image">
				</div>
				<p>merikes lepromeris gia thn malakia pou kanoyme</p>
				<h3>Titlos</h3>
			</div>
		</a>

	</div>


	<?php include("footer.html"); ?>





	<!--Scripts-->

	<script>
       function idgiver(id) {
           
        window.location.href="Post.php?uid=" + id;
        }
           
    </script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
		integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
		integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="js/mobile.js"></script>
	<script type="text/javascript" src="js/authorsScroll.js"></script>
	<script type="text/javascript" src="js/cardCarousel.js"></script>



</body>
</html>