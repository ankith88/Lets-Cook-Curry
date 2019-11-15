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

	<!-- HEADER
	================================================== -->
	<section class="section section_header" data-parallax="scroll" data-image-src="images/lamb_curry_2048.jpg">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Heading -->
					<h1 class="section__heading section_header__heading text-center">
						Lamb Curry
					</h1>

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- INFO
	================================================== -->
	<section class="section section_info section_info_opposite section_no-padding_bottom section_border_bottom">
		<div class="container">
			<div class="row">
				<div class="col">
					<h3 class="section__preheading text-primary text-center">
						<time datetime="2017-08-30">Aug 14, 2019</time>
					</h3>
					<!-- Heading -->
					<h2 class="section__heading text-center">
						Ingredients
					</h2>
					
					<!-- Subheading -->
					<p class="section__subheading text-center">
						
						1Kg Lamb Skanks<br>
						2 Onions<br>
						1 Tomato<br>
						2 Tablespoon Tomato Paste<br>
						2 Tablespoon Yoghurt<br>
						2 Teaspoon Turmeric Powder<br>
						2 Teaspoon Red Chili Powder<br>
						2 Teaspoon Coriander Powder<br>
						2 Teaspoon Garam Masala<br>
						1 Teaspoon Ginger-Garlic Paste<br>
						1/2 Teaspoon Pepper Powder<br>
						1 Teaspoon Cumin Seeds<br>
						2-3 Green Chillies<br>
						Salt to Taste<br>
						Oil<br>

					</p>
	
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>
	<section class="section section_info section_info_opposite section_no-padding_bottom">
		<div class="container">
			<div class="row align-items-justify">
				<div class="col-md-6 order-md-3">
					
					<div class="section_info__img">
						<img src="images/lamb_curry_marinade.jpg" alt="Marinate Mix">
					</div>

				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 order-md-1">

					<div class="section_info__body">
						
						<h3 class="section__heading">
							Marinade 
						</h3>
						<p class="section__subheading">
							1.	Add turmeric powder, red chili powder, ginger-garlic paste, yoghurt, salt & pepper powder to the lamb.<br>
							2.	Marinate the meat for at least an hour.<br>

						</p>
					</div>
					
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- INFO
	================================================== -->
	<section class="section section_info section_info_opposite section_no-padding_bottom">
		<div class="container">
			<div class="row align-items-justify">
				<div class="col-md-6 order-md-3">
					
					<div class="section_info__img">
						<img src="images/lamb_curry_onions.jpg" alt="Fry Spices">
					</div>

				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 order-md-1">

					<div class="section_info__body">
						<h3 class="section__heading">
							Method 
						</h3>
						<p class="section__subheading">
							3.	In a pan, add oil, and add thinly sliced onions and slit green chillies.<br>
							4.	Fry till the onions have become golden brown.<br>
							5.	Add coriander powder and garam masala and mix. Fry for 2-3 mins.<br>
							6.	Add chopped tomatoes and tomato paste. Add salt and mix.<br>

						</p>
						
					</div>
					
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- INFO
	================================================== -->
	<section class="section section_info section_info_opposite section_no-padding_top section_no-padding_bottom">
		<div class="container">
			<div class="row align-items-justify">
				<div class="col-md-6 order-md-3">
					
					<div class="section_info__img">
						<img src="images/lamb_curry_1024.jpg" alt="Fry onions & cocunut slices">
					</div>

				</div>
				<div class="col-md-1 "></div>
				<div class="col-md-5 order-md-1">

					<div class="section_info__body">

						<p class="section__subheading">
							7.	Add the marinated lamb and mix well.<br>
							8.	Cook covered for 20 mins and then uncovered for 30 mins.<br>

						</p>
					</div>
					
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>



	<!-- COMMENTS
	================================================== -->
	<?php include 'comments_section.php' ?>

	<!-- DISHES
	================================================== -->
	<?php include 'featured_dishes.php' ?>

	<!-- FOOTER
	================================================== -->
	<?php include 'footer.php'; ?>