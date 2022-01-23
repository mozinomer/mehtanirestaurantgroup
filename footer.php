

<footer id="footer">
	<div class="container">
		<div class="mainFooter">
			<div class="row">
				<div class="col-md-4">
					<div class="leftCol">
						<a href="<?php echo site_url(); ?>">
							<?php 
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

							if ( has_custom_logo() ) {
								echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
							} else {
								echo '<h1>' . get_bloginfo('name') . '</h1>';
							}
							?>
						</a>
						<h3>Connect with Us</h3>
						<ul>
							<li><a href="`3"><i class="fa fa-facebook"></i></a></li>
							<li><a href="`3"><i class="fa fa-instagram"></i></a></li>
							<li><a href="`3"><i class="fa fa-twitter"></i></a></li>
							<li><a href="`3"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blogContainerFooter">
						<h3>News & Reviews</h3>
						<ul>
							<li>
								<a href="<?php the_permalink(); ?>">
									<h4>Sneh Mehtani wins NJ hospitality award</h4>
									<p>2015-06-08 15:51:48</p>
								</a>
							</li>
							<li>
								<a href="<?php the_permalink(); ?>">
									<h4>Sneh Mehtani wins NJ hospitality award</h4>
									<p>2015-06-08 15:51:48</p>
								</a>
							</li>
							<li>
								<a href="<?php the_permalink(); ?>">
									<h4>Sneh Mehtani wins NJ hospitality award</h4>
									<p>2015-06-08 15:51:48</p>
								</a>
							</li>
							<li>
								<a href="<?php the_permalink(); ?>">
									<h4>Sneh Mehtani wins NJ hospitality award</h4>
									<p>2015-06-08 15:51:48</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="joinUs">
						<h3>Join Our Mailing List</h3>
						<p>Sign up below to get all of our latest news, deals and special offers</p>
						<div class="fromSignUp">
							<input type="email" name="" placeholder="Please proivde us with your Email">
							<button type="submit">Sign Up</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footerCopyRIght">
		<a href="#" class="backtoTop"></a>
		<div class="container">
			<?php 
			wp_nav_menu(array( 
				'theme_location' => 'header-menu', 
				'container_class' => 'footer-menu' 
			));
			?>
			<p>© 2015 Mehtani Restaurant Group. Site by: Lighthouse Digital LLC</p>
		</div>
	</div>
</footer>



<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

<?php wp_footer(); ?>
</body>
</html>