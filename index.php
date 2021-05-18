<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="css/card.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="css/scroll.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">

</head>

<body>
	<!--Navbar-->
	<header>
		<?php 
        include("navbar.html"); 
        ?>
	</header>
	

	<div class="container">
		<div class="container__item">
			<h2>Science to Fasion</h2>
			<h1>More that just your usual<br> Magazine</h1>
			<div id="links">
				<a href="#" id="container__item__cta">Sign up now</a>
				<a href="#">Read a post</a>
			</div>
		</div>
		<div>
			<div class="card">
				<div class="image">
					<img src="assets/photo1.jpg" />
				</div>
				<div class="content">
					<div class="title">Title</div>
					<div class="subtitle">Some stuff</div>
					<div class="bottom">
						<p>Here we just add a description</p>
						<button>Read More</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll">
		<div class="mouse">
		</div>
	</div>

		<div class="carousel">
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



	<!--Scripts-->
	<script type="text/javascript" src="js/mobile.js"></script>
	<script type="text/javascript" src="js/authorsScroll.js"></script>
</body>

<footer>This is a temp footer</footer>

</html>