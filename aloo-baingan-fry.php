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
	<section class="section section_header" data-parallax="scroll" data-image-src="images/aloo_baingan_2048.jpg">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Heading -->
					<h1 class="section__heading section_header__heading text-center">
						Aloo Baingan Fry
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
						<time datetime="2017-08-30">Oct 14, 2019</time>
					</h3>
					<!-- Heading -->
					<h2 class="section__heading text-center">
						Ingredients
					</h2>
					
					<!-- Subheading -->
					<p class="section__subheading text-center">
						
						1/2 Kg Baingan (Egg Plant)<br>
						1/2 Kg Aloo (Potato) <br>
						1 Tablespoon Red Chilli Powder <br>
						1 Tablespoon Turmeric Powder <br>
						2 Tablespoon Toasted Peanut Powder <br>
						1 and 1/2 Tablespoon Coriander Powder <br>
						1 Tablespoon Cumin Seeds <br>
						2 Tablespoon Dry Mango Powder <br>
						2 Tablespoon Olive Oil <br>
						Salt to Taste <br>
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
						<img src="images/aloo_baingan_1.jpg" alt="Marinate Mix">
					</div>

				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 order-md-1">
					<div class="section_info__body">
						
						<h3 class="section__heading">
							Method 
						</h3>
						<p class="section__subheading">
							1.	In pan add oil and cumin seeds. Once the cumin seeds start fluttering, add a pinch of aesophotida.<br>
							2.	Add the diced potatoes,turmeric powder and fry for 2 mins<br>
							3.	Add 1 cup water and salt and let the potatoes get cooked.<br>
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
						<img src="images/aloo_baingan_2.jpg" alt="Marinated Fish">
					</div>

				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 order-md-1">

					<div class="section_info__body">
						<p class="section__subheading">
							4.	Once the potatoes are half cooked, and the diced brinjal into the pan.<br>
							5.	Cook for 10 mins.<br>
						</p>
						
					</div>
					
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>


	<section class="section section_info section_info_opposite section_no-padding_top section_border_bottom">
		<div class="container">
			<div class="row align-items-justify">
				<div class="col-md-6 order-md-3">
					
					<div class="section_info__img">
						<img src="images/aloo_baingan_2048.jpg" alt="Marinated Fish coated in Rava">
					</div>

				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 order-md-1">

					<div class="section_info__body">

						<p class="section__subheading">
							6.	Add salt, red chilli powder and dry mango powder and fry for 2 mins.<br>
							7.	Add coriander powder and toasted peanut powder and fry for 2 mins. <br>
							8. Garnish with Coriander Leaves
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