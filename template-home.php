<?php
/*
Template Name: Home Page
*/

get_header(); ?>

		<?php require_once('navigation.php'); ?>


		<?php // Begin slider block ?>
		<?php if( have_rows('home_slider') ): ?>
		<div class="bg-black">
			<div class="container">
				<div class="row slider-home">
					<div class="col-md-12">
						<div class="flexslider">
							<ul class="slides">
								<?php while ( have_rows('home_slider') ) : the_row(); ?>
								<li>
									<?php $the_link = get_sub_field('home_slider_url'); ?>
									<?php if( !empty( $the_link ) ): ?>
									<a href="<?php the_sub_field('home_slider_url'); ?>">
									<?php endif; ?>
										<img src="<?php the_sub_field('home_slider_image'); ?>" class="img-responsive">
									<?php if( !empty( $the_link ) ): ?>
									</a>
									<?php endif; ?>
								</li>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php // End slider block ?>


		
		<?php // Home buttons redesign ?>
		<div class="container home-blocks-container">
			<div class="row">
				<div class="home-blocks-button">
					<a href="/product_type/industrial/"><h3 style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/icon-products.png');">Products</h3></a>
				</div>
				<div class="home-blocks-button">
					<a href="/service"><h3 style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/icon-service.png');">Service</h3></a>
				</div>
				<div class="home-blocks-button">
					<a href="/contact"><h3 style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/icon-quote.png');">Get a Quote</h3></a>
				</div>
			</div>
		</div>
		<?php // End home buttons redesign ?>
		
		<!--

		<?php // Begin home buttons block ?>
		<div class="container home-blocks">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<a href="/product_type/industrial/"><h3 class="home-products-block">Products</h3></a>
				</div>

				<div class="col-md-5 col-md-offset-1">
					<a href="/service"><h3 class="home-service-block">Service</h3></a>
				</div>
				<div class="col-md-5">
					<a href="/contact"><h3 class="home-quote-block">Get a Quote</h3></a>
				</div>
			</div>
		</div>
		<?php // End home buttons block ?>
		
		-->
		
		


		<!--
		<?php // Begin custom search block ?>
		<form action="/custom-search/" method="GET">
		<div class="bg-black">
			<div class="container home-search">

				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h3>Find the right Huber for you</h3>
						<p>Select the features you need and get a custom recommendation for your perfect HUBER.</p>
					</div>


					<div class="col-md-5 col-md-offset-1">
						<div class="home-search-header">
							<strong>Features</strong> | Select all that apply
						</div>
						<div class="home-search-body">
							<table class="table">
								<tr>
									<td><input type="checkbox" name="3300_Gallon"></td>
									<td>3300 Gallon (75 bbl) capacity barbon steel tank with 5/16" shell for long life</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="20_Top_manway"></td>
									<td>20" Top manway</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Hydraulic_tank_lift"></td>
									<td>Hydraulic tank lift</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Full_opening_hydraulically_operated_rear_door"></td>
									<td>Full opening hydraulically operated rear door</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="PTO_Driven"></td>
									<td>PTO Driven, hydraulically operated vacuum / pressure system</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Liquid_cooled_high_performance_pump"></td>
									<td>Liquid cooled high performance pump</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Full_length_body_trays_for_hose_storage"></td>
									<td>Full length body trays for hose storage</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="4_inlet_with_internal_standpipe"></td>
									<td>4" inlet wiht internal standpipe for easy dacanting</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="6_discharge valve"></td>
									<td>6" discharge valve for direct pressureizing or gravity unloading</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Rear_work_lights"></td>
									<td>Rear work lights, LED running lights</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Back_up_alarm"></td>
									<td>Back-up alarm, Grouding Reel</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Tandem_Axle"></td>
									<td>Tandem Axle</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Rear_door_safety_prop_bar"></td>
									<td>Rear door safety prop bar</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Tank_lift_safety_prop_bar"></td>
									<td>Tank lift safety prop bar</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Hydraulically_operated_full_opening_rear_door"></td>
									<td>Hydraulically operated, full opening rear door with holding valve</td>
								</tr>
							</table>
						</div>
					</div>


					<div class="col-md-5">
						<div class="home-search-header">
							<strong>Options</strong> | Select all that apply
						</div>
						<div class="home-search-body">
							<table class="table">
								<tr>
									<td><input type="checkbox" name="Multiple_compartment_tank_volumes"></td>
									<td>Multiple compartment tank volumes</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="ASME_DOT_412"></td>
									<td>ASME/DOT 412</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Stainless_steel_tank_with_wetted_stainless_parts"></td>
									<td>Stainless steel tank with wetted stainless parts</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="High_pressure_jetting_systems"></td>
									<td>High pressure jetting systems with integral water compartment</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Auxilary_transfer_pump"></td>
									<td>Auxilary transfer pump</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Top_mounted_hydraulically_operated_4_boom<"></td>
									<td>Top mounted hydraulically operated 4' boom</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="Pump_Sizes_440_730_CFM"></td>
									<td>Pump Sizes 440-730 CFM</td>
								</tr>
							</table>
						</div>
						<button id="find_my_huber" class="btn btn-huber btn-lg btn-block">Find my huber</button>
					</div>
				</div>
			</div>
		</div>
		</form>
		<?php // End custom search block ?>
		-->



		<?php // Begin about block ?>
		<?php $about_content = get_field('home_about_box'); ?>
		<?php if(!empty($about_content)): ?>
		<div class="home-about">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<?php the_field('home_about_box'); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php // End about block ?>




		<?php // Begin testimonials block ?>
		<?php if( have_rows('home_testimonials') ): ?>
		<div class="home-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h4>Testimonials</h4>
						<div class="home-testimonials-slider">
							<ul class="slides">
								<?php while ( have_rows('home_testimonials') ) : the_row(); ?>
								<li>
									<div class="home-testimonials-content">
										<?php the_sub_field('home_testimonial'); ?>
									</div>
									<div class="home-testimonials-author">
										<?php the_sub_field('home_testimonial_author'); ?>
									</div>
								</li>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php // End testimonials block ?>

<?php get_footer(); ?>