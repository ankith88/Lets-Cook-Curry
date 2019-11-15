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
	<section class="section section_header" data-parallax="scroll" data-image-src="images/beans_fry_2048.jpg">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Heading -->
					<h1 class="section__heading section_header__heading text-center">
						Beans Fry
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
						<time datetime="2017-08-30">July 7, 2019</time>
					</h3>
					<!-- Heading -->
					<h2 class="section__heading text-center">
						Ingredients
					</h2>
					
					<!-- Subheading -->
					<p class="section__subheading text-center">
						
						500g Beans<br> 
						2 Tablespoon Turmeric Powder <br>
						1 Tablespoon Coriander Powder <br>
						Coconut Slices <br>
						1 Onion <br>
						Curry Leaves <br>
						Mustard Seeds <br>
						2 Tablespoon Coconut Oil<br>

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
						<img src="images/beans_fry_onions.jpg" alt="Marinate Mix">
					</div>

				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 order-md-1">
					<div class="section_info__body">
						
						<h3 class="section__heading">
							Method 
						</h3>
						<p class="section__subheading">
							1.	Add coconut oil to a hot pan.<br>
							2.	Add mustard seeds and wait till it starts popping.<br>
							3.	Add finely chopped onions and curry leaves. Cook till the onions becomes slightly golden brown.<br>

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
						<img src="images/beans_fry_add.jpg" alt="Marinated Fish">
					</div>

				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 order-md-1">

					<div class="section_info__body">
						<p class="section__subheading">
							4.	Add turmeric powder and coriander powder.<br>
							5.	Fry for 2-3 mins.<br>
							6.	Add the beans and mix well.<br>
							7.	Cover and cook for 15 mins.<br>
							8.	Add coconut slices and mix well<br>


						</p>
						
					</div>
					
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- INFO
	================================================== -->
	<section class="section section_info section_info_opposite section_no-padding_top section_border_bottom">
		<div class="container">
			<div class="row align-items-justify">
				<div class="col-md-6 order-md-3">
					
					<div class="section_info__img">
						<img src="images/beans_fry_1024.jpg" alt="Marinated Fish coated in Rava">
					</div>

				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 order-md-1">

					<div class="section_info__body">

						<p class="section__subheading">
							9.	Cook covered for another 10 mins or till the beans are fully cooked. <br>
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