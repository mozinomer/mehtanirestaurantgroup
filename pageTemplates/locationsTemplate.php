<?php 

/* Template Name: Location Page */

get_header(); ?>
<div class="reversed" id="locations">
	<div class="sliderHomePage">
		<div class="sliderContainerHome">
			<div class="slidesContainer">
				<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
				<div class="contentOnslide">
					<h2>
						<span>Our Locations</span> - Mughlai Restaurant Group
					</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="section2">
	<div class="container">
		<!-- <h2><span class="boxo"></span>
			<span>Our</span> Locations
		</h2> -->
		<div class="row">
			<div class="col-md-4">
				<div class="boxContainer">
					<div class="imageBackgroundContainer">
						<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
					</div>
					<div class="contentboxContainer">
						<h3>Mirage</h3>
						<p>Mirage, where you experience only the best, and enjoy the top most quality and satisfaction.</p>
						<a href="#"  data-toggle="modal" data-target="#exampleModalLong" class="classicButton">View Details</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainer">
					<div class="imageBackgroundContainer">
						<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
					</div>
					<div class="contentboxContainer">
						<h3>Mirage</h3>
						<p>Mirage, where you experience only the best, and enjoy the top most quality and satisfaction.</p>
						<a href="#"  data-toggle="modal" data-target="#exampleModalLong" class="classicButton">View Details</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainer">
					<div class="imageBackgroundContainer">
						<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
					</div>
					<div class="contentboxContainer">
						<h3>Mirage</h3>
						<p>Mirage, where you experience only the best, and enjoy the top most quality and satisfaction.</p>
						<a href="#"  data-toggle="modal" data-target="#exampleModalLong" class="classicButton">View Details</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainer">
					<div class="imageBackgroundContainer">
						<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
					</div>
					<div class="contentboxContainer">
						<h3>Mirage</h3>
						<p>Mirage, where you experience only the best, and enjoy the top most quality and satisfaction.</p>
						<a href="#"  data-toggle="modal" data-target="#exampleModalLong" class="classicButton">View Details</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainer">
					<div class="imageBackgroundContainer">
						<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
					</div>
					<div class="contentboxContainer">
						<h3>Mirage</h3>
						<p>Mirage, where you experience only the best, and enjoy the top most quality and satisfaction.</p>
						<a href="#"  data-toggle="modal" data-target="#exampleModalLong" class="classicButton">View Details</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="boxContainer">
					<div class="imageBackgroundContainer">
						<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
					</div>
					<div class="contentboxContainer">
						<h3>Mirage</h3>
						<p>Mirage, where you experience only the best, and enjoy the top most quality and satisfaction.</p>
						<a href="#"  data-toggle="modal" data-target="#exampleModalLong" class="classicButton">View Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade modalLocations" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Mirage</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="locationModal">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="sliderContainerModal">
								<div class="slidesContainerModal">
									<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
								</div>
								<div class="slidesContainerModal">
									<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
								</div>
								<div class="slidesContainerModal">
									<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
								</div>
								<div class="slidesContainerModal">
									<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpeg">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="contentModalLocations">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<div class="addressAndNumber">
									<p>
										1655 Oak Tree Rd, Edison, NJ 08820
									</p>
									<a href="tel:732-947-3000">732-947-3000</a>
								</div>
								<a href="#" class="classicButton">Visit Website</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>