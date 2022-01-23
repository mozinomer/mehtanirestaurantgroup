<?php 

/* Template Name: Contact us Template */

get_header(); ?>
<div class="reversed" id="locations">
	<div class="sliderHomePage">
		<div class="sliderContainerHome">
			<div class="slidesContainer">
				<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
				<div class="contentOnslide">
					<h2>
						Contact At - Mughlai Restaurant Group
					</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contactUs">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="boxContainercontact">
					<i class="fa fa-envelope"></i>
					<p>Email us at <a href="mailto:asd@gmail.com">whatever@gmail.com</a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainercontact">
					<i class="fa fa-phone"></i>
					<p>Call us at <a href="tel:+187263512">+87126357</a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainercontact">
					<i class="fa fa-location-arrow"></i>
					<p>laisjdlijaslid aslijdaisjd laisjd</p>
				</div>
			</div>
		</div>
		<div class="formContainer">
			<div class="innerForm">
				<div class="row  align-items-center">
					<div class="col-md-6">
						<div class="mapContaienr">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50470.02848609081!2d-122.47270520965532!3d37.757762652859306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1642962997877!5m2!1sen!2s" height="450" style="border:0;" allowfullscreen="" width="100%" loading="lazy"></iframe>
						</div>
					</div>
					<div class="col-md-6">
						<h4>Contact Us Form</h4>
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="" placeholder="Full name">
							</div>
							<div class="col-md-6">
								<input type="email" name="" placeholder="Email Address">
							</div>
							<div class="col-md-6">
								<input type="number" name="" placeholder="Phone Number">
							</div>
							<div class="col-md-6">
								<input type="text" name="" placeholder="Street Address">
							</div>
							<div class="col-md-6">
								<button type="submit" class="classicButton">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>