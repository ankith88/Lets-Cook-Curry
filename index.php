<?php include 'header.php'; ?>

	<!-- NAVBAR
	================================================== -->
	<nav class="navbar navbar-light navbar-expand-lg fixed-top">
		<div class="container">

			<!-- Navbar: Brand -->
			<a class="navbar-brand d-lg-none" href="/">Let's Cook Curry</a>

			<!-- Navbar: Toggler -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<!-- Navbar: Collapse -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<!-- Navbar navigation: Left -->
				<!-- <ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">About Us</a>
					</li>
				</ul> -->

				<!-- Navbar: Brand -->
				<a class="navbar-brand d-none d-lg-flex" href="/">
					Let's Cook Curry
				</a>

				<!-- Navbar navigation: Right -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="recipes">
							Recipes
						</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" href="index.html">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html">About Us</a>
					</li> -->
				</ul>

			</div> <!-- / .navbar-collapse -->

		</div> <!-- / .container -->
	</nav> <!-- / .navbar -->

	<!-- WELCOME
	================================================== -->
	<section class="section section_welcome" data-parallax="scroll" data-image-src="images/main_image-V2-2048.jpg">

		<!-- Content -->
		<div class="section_welcome__main">
			<div class="container">
				<div class="row align-items-center">
					<div class="col">
						
						<!-- Heading -->
						<h2 class="section__preheading section_welcome__preheading text-center text-muted">
							<!-- <span class="text-primary">Café</span> / Restaurant -->
						</h2>
						<h1 class="section__heading section_welcome__heading text-center">
							Here's to All Curry Lovers
						</h1>
						<!-- <p class="section__subheading section_welcome__subheading text-center text-muted">
							Coming Soon!!!
						</p> -->

						<!-- Button -->
						<div class="text-center">
							<a href="recipes" class="btn btn-primary text-white">
								View Recipes
							</a>
						</div>
		
					</div>
				</div> <!-- / .row -->
			</div> <!-- / .container -->
		</div>

		<!-- Footer -->
		<div class="section_welcome__footer">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md">
						
						<!-- Social links -->
						<!-- <ul class="section_welcome__footer__social text-center text-lg-left">
							<li>
								<a href="https://www.facebook.com/letscookcurry/">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/letscookcurry/">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
						</ul>
 -->
					</div>
					<div class="col-md">
						
						<!-- Address -->
						<!-- <div class="section_welcome__footer__address text-center text-lg-right">
							<i class="fas fa-map-marker-alt"></i> 1234 Altschul, New York, NY 10027-0000
						</div> -->
<!-- 
						<div class="text-center text-lg-right">
							 &copy; <span id="js-current-year"></span> Let's Cook Curry. All rights reserved.
						</div> -->

					</div>
				</div> <!-- / .row -->
			</div> <!-- / .container -->
		</div>

	</section>

	<!-- DISHES
	================================================== -->
	<?php include 'featured_dishes.php' ?>

	<!-- FOOTER
	================================================== -->
	<?php include 'footer.php'; ?>