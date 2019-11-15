<?php include 'header.php'; ?>
	<!-- NAVBAR
	================================================== -->
	<nav class="navbar navbar-light navbar-expand-lg fixed-top">
		<div class="container">

			<!-- Navbar: Brand -->
			<a class="navbar-brand navbar-brand_2 d-lg-none" href="/">Let's Cook Curry</a>

			<!-- Navbar: Toggler -->
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
	<section class="section section_header" data-parallax="scroll" data-image-src="images/main_image-V2-2048.jpg">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Heading -->
					<h1 class="section__heading section_header__heading text-center">
						Recipes
					</h1>

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<!-- MENU
	================================================== -->
	<section class="section section_menu section_border_bottom">
		<div class="container">
			<div class="row">
				<div class="col">
	
					<!-- Heading -->
					<h2 class="section__heading text-center">
						Browse by Categories
					</h2>
					<!-- p class="section__subheading text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Ratione numquam eos perferendis itaque hic unde, ad, laudantium minima.
					</p> -->
	
				</div>
			</div> <!-- / .row -->
			<div class="row">
				<div class="col">
					
					<!-- Navigation -->
					<nav class="section_menu__nav">
						<ul>
							<li class="active">
								<a href="#menu_images" data-filter=".beef">Beef</a>
							</li>
							<li class="">
								<a href="#menu_images" data-filter=".chicken">Chicken</a>
							</li>
							<li class="">
								<a href="#menu_images" data-filter=".lamb">Lamb</a>
							</li>
							<li class="">
								<a href="#menu_images" data-filter=".mutton">Mutton</a>
							</li>
							<li class="">
								<a href="#menu_images" data-filter=".pork">Pork</a>
							</li>
							<li class="">
								<a href="#menu_images" data-filter=".fish">Seafood</a>
							</li>
							<li class="">
								<a href="#menu_images" data-filter=".veg">Vegetarian</a>
							</li>
						</ul>
					</nav>

				</div>
			</div>
			<div class="row section_menu__grid" id="menu_images">
				
				<div class="col-md-12 section_menu__grid__item beef">
					<div class="section_menu__item">
						<div class="row">
							<a href="beef-pepper-fry"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/beef_pepper_fry_2048.jpg" class="recipe_image" alt="Let's Cook - Beef Pepper Fry">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="beef-pepper-fry">Beef Pepper Fry</a><div class="tooltip_div"> <img src="images/chili.png" class="chili_indicator"><img src="images/chili.png" class="chili_indicator"><img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Spicy</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 35min </span>
								<p>
									Beef Pepper Fry is a South Indian spicy dish that goes well with Parotha, Chappati or Rice. 
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 35min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
					
				</div>
				
			</div>
			<div class="row section_menu__grid" id="menu_images">
				
				<div class="col-md-12 section_menu__grid__item chicken">
					<div class="section_menu__item">
						<div class="row">
							<a href="murgh-malai"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/murgh_malai_2048.jpg" class="recipe_image" alt="Let's Cook - Murgh Tikka Masala">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="murgh-malai">Murgh Tikka Masala </a><div class="tooltip_div"> <img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Mild</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 60min </span>
								<p>
									Chicken tikka masala is a dish of chunks of grilled marinated chicken in a spiced creamy curry sauce.
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 60min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
					<div class="section_menu__item">
						<div class="row">
							<a href="kerala-pepper-chicken"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/kerala_pepper_chicken_2048.jpg" class="recipe_image" alt="Let's Cook - Kerala Pepper Chicken">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="kerala-pepper-chicken">Kerala Pepper Chicken</a><div class="tooltip_div"> <img src="images/chili.png" class="chili_indicator"><img src="images/chili.png" class="chili_indicator"><img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Spicy</span></div></h4>
									<span class="clock_text"><i class="fas fa-clock"></i> 40min </span>
								<p>
									Quick & easy kerala style dry roast from God's own country. 
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 40min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
					<div class="section_menu__item">
						<div class="row">
							<a href="hariyali-chicken"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/hariyali_chicken_2048.jpg" class="recipe_image" alt="Let's Cook - Hariyali Chicken">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="hariyali-chicken">Hariyali chicken</a><div class="tooltip_div"> <img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Mild</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 40min </span>
								<p>
									A delicious chicken green curry made with mint, coriander & spices. 
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 40min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
					<div class="section_menu__item">
						<div class="row">
							<a href="butter-chicken"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/butter_chicken_2048.jpg" class="recipe_image" alt="Let's Cook - Butter Chicken">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="butter-chicken">Butter chicken</a><div class="tooltip_div"> <img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Mild</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 60min </span>
								<p>
									Chicken in mildly spiced tomato sauce.
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 40min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
				</div>
				
			</div> <!-- / .row -->
			<div class="row section_menu__grid" id="menu_images">
				
				<div class="col-md-12 section_menu__grid__item lamb">
					<div class="section_menu__item">
						<div class="row">
							<a href="lamb-curry"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/lamb_curry_2048.jpg" class="recipe_image" alt="Let's Cook - Lamb Curry">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="lamb-curry">Lamb Curry</a><div class="tooltip_div"><img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Mild</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 50min </span>
								<p>
									A simple curry which isnt too spicy and perfect for a midweek cook. 
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 50min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
					<div class="section_menu__item">
						<div class="row">
							<a href="lamb-pepper-fry"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/lamb_pepper_fry_2048.jpg" class="recipe_image" alt="Let's Cook - Lamb Pepper Fry">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="lamb-pepper-fry">Lamb Pepper Fry </a><div class="tooltip_div"> <img src="images/chili.png" class="chili_indicator"><img src="images/chili.png" class="chili_indicator"><img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Spicy</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 50min </span>
								<p>
									This kerala style lamb fry has a good pungency from black peppercorns that compliments really well with lamb and the coconut oil gives in the rich flavour to the dish.
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 50min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div> <!-- / .row -->
				</div>
			</div> <!-- / .row -->
			<div class="row section_menu__grid" id="menu_images">
				
				<div class="col-md-12 section_menu__grid__item mutton">
					<div class="section_menu__item">
						<div class="row">
							<a href="kaju-gosht-masala"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/kaju_gosht_2048.jpg" class="recipe_image" alt="Let's Cook - Kaju Gosht Masala">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="kaju-gosht-masala">Kaju Gosht Masala </a><div class="tooltip_div"><img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Mild</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 50min </span>
								<p>
									Goat curry with a rich gravy consisting of Cashew paste. 
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 50min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
				</div>
				
			</div> <!-- / .row -->

			
			<div class="row section_menu__grid" id="menu_images">
				
				<div class="col-md-12 section_menu__grid__item fish">
					<div class="section_menu__item">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3"><a href="mangalorean-rava-fish-fry">
								
									<img src="images/mangalorean_rava_fish_fry_2048.jpg" class="recipe_image" alt="Let's Cook - Mangalorean Fish Fry">
								
							</a></div>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="mangalorean-rava-fish-fry">Mangalorean Rava Fish Fry </a><div class="tooltip_div"><img src="images/chili.png" class="chili_indicator"><img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Medium</span></div></h4>
								<!-- <div class=" text-center"> -->
										<span class="clock_text"><i class="fas fa-clock"></i> 20min </span>
									<!-- </div> -->
								<p>
									Enjoy this scrumptious, easy to cook, crispy delight, derived from a coastal region called Mangalore, in South India. <br>
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<div class=" text-center">
									<!-- <i class="fas fa-clock"></i> 20min -->
								</div>
							</div>
						</div> <!-- / .row -->
					</div>
				</div>
				
			</div> <!-- / .row -->
			<div class="row section_menu__grid" id="menu_images">
				<div class="col-md-12 section_menu__grid__item veg">
					<div class="section_menu__item">
						<div class="row">
							<a href="palak-paneer"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/palak_paneer_2048.jpg" class="recipe_image" alt="Let's Cook - Palak Paneer">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="palak-paneer">Palak Paneer </a> <div class="tooltip_div"><img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Mild</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 30min </span>
								<p>
									Palak paneer is a vegetarian dish consisting of paneer in a thick paste made from pureed spinach
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 30min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
				</div>
				<div class="col-md-12 section_menu__grid__item veg">
					<div class="section_menu__item">
						<div class="row">
							<a href="beans-fry"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/beans_fry_2048.jpg" class="recipe_image" alt="Let's Cook - Beans Fry">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="beans-fry">Beans Fry</a><div class="tooltip_div"> <img src="images/chili_no_spice.png" class="chili_indicator"><span class="tooltiptext">No Spice</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 30min </span>
								<p>
									Simple and flavour packed beans fry. 
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 30min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
				</div>
				<div class="col-md-12 section_menu__grid__item veg">
					<div class="section_menu__item">
						<div class="row">
							<a href="dal-fry"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/dal_fry_2048.jpg" class="recipe_image" alt="Let's Cook - Dal Fry">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="dal-fry">Dal Fry</a><div class="tooltip_div"> <img src="images/chili_no_spice.png" class="chili_indicator"><span class="tooltiptext">No Spice</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 30min </span>
								<p>
									 
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 30min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
				</div>

				<div class="col-md-12 section_menu__grid__item veg">
					<div class="section_menu__item">
						<div class="row">
							<a href="aloo-baingan-fry"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/aloo_baingan_2048_2.jpg" class="recipe_image" alt="Let's Cook - Aloo Baingan Fry">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="aloo-baingan-fry">Aloo Baingan Fry</a> <div class="tooltip_div"><img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Mild</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 30min </span>
								<p>
									 A quick and easy semi-dry recipe made with an equal proportion of potatoes and eggplant.
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 30min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
				</div>
				
				
			</div> <!-- / .row -->
			<div class="row section_menu__grid" id="menu_images">
				
				<div class="col-md-12 section_menu__grid__item pork">
					<div class="section_menu__item">
						<div class="row">
							<a href="coorgi-pork"><div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
								
									<img src="images/coorgi_pork_2048_2" class="recipe_image" alt="Let's Cook - Coorgi Pork">
								
							</div></a>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
								<h4><a href="coorgi-pork">Coorgi Pork </a> <div class="tooltip_div"><img src="images/chili.png" class="chili_indicator"><img src="images/chili.png" class="chili_indicator"><img src="images/chili.png" class="chili_indicator"><span class="tooltiptext">Spicy</span></div></h4>
								<span class="clock_text"><i class="fas fa-clock"></i> 45min </span>
								<p>
									This is a delicious semi-dry pork recipe, blended in rich spices, with a hint of tamarind, that would take your palette all the way to Coorg, Karnataka. <br>
									<small>Inspired by a Coorgi family traditional recipe </small>
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<!-- <div class=" text-center">
									<i class="fas fa-clock"></i> 45min
								</div> -->
							</div>
						</div> <!-- / .row -->
					</div>
					
				</div>
				
			</div>
		</div> <!-- / .container -->
	</section>

	<!-- DISHES
	================================================== -->
	

	<!-- RESERVATION
	================================================== -->
	

	<?php include 'footer.php'; ?>