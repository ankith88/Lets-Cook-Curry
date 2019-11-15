<!-- Comments
	================================================== -->
	<section class="section section_contact">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Heading -->
					<h2 class="section__heading text-center">
						Comments
					</h2>

					<!-- Subheading -->
					<!-- <p class="section__subheading text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
					</p> -->

				</div>
			</div> <!-- / .row -->
		<div class="row">
			<div class="col-md-10 order-md-2">
						<!-- Contact form -->
					<form class="section_contact__form" name="myComments" ng-controller="mainController">
						<ul class="list-group">
			                <li class="list-group-item" style="border-bottom: 2px solid rgba(0, 0, 0, 0.21) !important;" ng-repeat="user in users track by $index"> 
			                    <blockquote class=" mx-auto">
										<p>
											{{user.Message}}
										</p>
										<footer class="text-muted">
											{{user.Name}}
										</footer>
									</blockquote>
			                </li>
			            </ul>
			            <hr/>
						<div class="form-group">
							<label for="contact__form__name" class="sr-only">Full name</label>
							<input type="text" class="form-control" id="contact__form__name" ng-model="cmtName" name="contact__form__name" placeholder="Full name" required>
							<div class="invalid-feedback"></div>
						</div>
						<div class="form-group">
							<label for="contact__form__email" class="sr-only">E-mail address</label>
							<input type="email" class="form-control" id="contact__form__email" ng-model="cmtEmail" name="contact__form__email" placeholder="E-mail address" required><span ng-show="myComments.contact__form__email.$error.email">Not a valid e-mail address</span>
							<div class="invalid-feedback"></div>
						</div>
						<div class="form-group">
							<label for="contact__form__email" class="sr-only">Comment</label>
							<textarea class="form-control" id="contact__form__message" ng-model="cmtMessage" name="contact__form__message" rows="9" placeholder="Message" required></textarea>
							<div class="invalid-feedback"></div>
						</div>
						<button class="btn btn-sm btn-primary" ng-disabled="myComments.$invalid" style="width: -webkit-fill-available;" ng-click='btn_post();'>
							Comment
						</button>
						<div class="g-recaptcha" id="html_element" data-callback="verifyCaptcha" data-sitekey="6LeDObcUAAAAAB5hZsJ8h5NASDTEFj0kG8p3SHpo"></div>
			            <br/>
			            <hr/>
			            <!-- <ul class="list-group">
			                <li class="list-group-item" style="border-bottom: 2px solid rgba(0, 0, 0, 0.21) !important;" ng-repeat="user in users track by $index"> 
			                    <blockquote class=" mx-auto">
										<p>
											{{user.Message}}
										</p>
										<footer class="text-muted">
											{{user.Name}}
										</footer>
									</blockquote>
			                </li>
			            </ul> -->

            		</form>
    			</div>
			</div>
		</div>
		</div> <!-- / .container -->
	</section>