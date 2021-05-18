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
	<link rel="stylesheet" href="css/footer.css">



</head>

<body>
	<!--Navbar-->
	<header>
<<<<<<< HEAD:index.html
		<a class="logo" href="/"><img src="assets/logo.png" alt="logo"></a>
		<div>
			<ul class="nav__links">
				<li><a href="index.html" style="font-weight: 600;">home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<a class="cta" href="editProfile.html"><i class="fa fa-user" style="font-size:30px;"></i></a>
		<p class="menu"><i class="fa fa-bars" style="font-size:30px;"></i></p>
=======
		<?php 
        include("navbar.html"); 
        ?>
>>>>>>> ff07d85b5e8e0cd5bec7905eb9afa6587ddf457e:index.php
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



	<!--Scripts-->
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

<footer id="dk-footer" class="dk-footer">
	<div class="container">
		<div class="row">

			<!-- End Col -->
			<div >
				<div class="row"></div>
					<div class="col-md-6">
						<div class="contact-us">
							<div class="contact-icon">
								<i class="fa fa-map-o" aria-hidden="true"></i>
							</div>
							<!-- End contact Icon -->
							<div class="contact-info">
								<h3>Jaipur India</h3>
								<p>5353 Road Avenue</p>
							</div>
							<!-- End Contact Info -->
						</div>
						<!-- End Contact Us -->
					</div>
					<!-- End Col -->
					<div class="col-md-6">
						<div class="contact-us contact-us-last">
							<div class="contact-icon">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<!-- End contact Icon -->
							<div class="contact-info">
								<h3>95 711 9 5353</h3>
								<p>Give us a call</p>
							</div>
							<!-- End Contact Info -->
						</div>
						<!-- End Contact Us -->
					</div>
					<!-- End Col -->
				</div>
				<!-- End Contact Row -->
				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="footer-widget footer-left-widget">
							<div class="section-heading">
								<h3>Useful Links</h3>
								<span class="animate-border border-black"></span>
							</div>
							<ul>
								<li>
									<a href="#">About us</a>
								</li>
								<li>
									<a href="#">Services</a>
								</li>
								<li>
									<a href="#">Projects</a>
								</li>
								<li>
									<a href="#">Our Team</a>
								</li>
							</ul>
							<ul>
								<li>
									<a href="#">Contact us</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li>
									<a href="#">Testimonials</a>
								</li>
								<li>
									<a href="#">Faq</a>
								</li>
							</ul>
						</div>
						<!-- End Footer Widget -->
					</div>
					<!-- End col -->
					<div class="col-md-12 col-lg-6">
						<div class="footer-widget">
							<div class="section-heading">
								<h3>Subscribe</h3>
								<span class="animate-border border-black"></span>
							</div>
							<p>
								<!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
								Reference site about Lorem Ipsum, giving information on its origins, as well.
							</p>
							<form action="#">
								<div class="form-row">
									<div class="col dk-footer-form">
										<input type="email" class="form-control" placeholder="Email Address">
										<button type="submit">
											<i class="fa fa-send"></i>
										</button>
									</div>
								</div>
							</form>
							<!-- End form -->
						</div>
						<!-- End footer widget -->
					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
			<!-- End Col -->
		</div>
		<!-- End Widget Row -->
	</div>
	<!-- End Contact Container -->


	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<span>Copyright © 2019, All Right Reserved Seobin</span>
				</div>
				<!-- End Col -->
				<div class="col-md-6">
					<div class="copyright-menu">
						<ul>
							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Terms</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>
							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- End col -->
			</div>
			<!-- End Row -->
		</div>
		<!-- End Copyright Container -->
	</div>
	<!-- End Copyright -->
	<!-- Back to top -->
	<div id="back-to-top" class="back-to-top">
		<button class="btn btn-dark" title="Back to Top" style="display: block;">
			<i class="fa fa-angle-up"></i>
		</button>
	</div>
	<!-- End Back to top -->
</footer>





</html>