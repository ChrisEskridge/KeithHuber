<?php

$pagetitle = get_the_title();

get_header(); ?>

	<?php require_once('navigation.php'); ?>

		<div class="container">

			<div class="row">
				<div class="col-md-4 sidebar hidden-xs hidden-sm">
					<?php get_sidebar(); ?>
				</div>

				<div class="col-md-8 main-product-content-area">
					<?php while ( have_posts() ) : the_post(); ?>

					<div class="row main-product-header-bg">
						<div class="col-md-4 main-product-header-content">
							<span class="product-title"><?php the_title(); ?></span>
							<?php the_content(); ?>
						</div>

						<div class="col-md-8">
							<?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
						</div>
					</div>

<?php /* This was a test to show full width image
					<div class="row main-product-header-bg">
						<div class="col-md-12">
							<?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
						</div>
					</div>

					<div class="row main-product-header-bg">
						<div class="col-md-12 main-product-header-content">
							<?php the_content(); ?>
						</div>
					</div>
*/ ?>

					<div class="row">
						<div class="col-xs-6">
							<a href="#features_options" aria-controls="profile" role="tab" data-toggle="tab" class="tab tab-active">Features &amp; Options</a>
						</div>

						<div class="col-xs-6">
							<a href="#photo_gallery" aria-controls="profile" role="tab" data-toggle="tab" class="tab tab-inactive">Photo Gallery</a>
						</div>
					</div>


					
					<div class="tab-product-content-area">
						<div class="row tab-content">

							<div role="tabpanel" class="tab-pane active" id="features_options">
							
								<!--
								<div class="col-md-12">
									<p>Select the features you need and get a custom recommendation for your perfect HUBER.</p>
									
									<?php if(have_rows('product_features')) : ?>
									<div class="col-md-6">	
										<div class="product-search-header">
											<strong>Features</strong>
										</div>
										<div class="product-search-body">
											<table class="table table-temp">
												<?php while(have_rows('product_features')) : the_row(); ?>
												<tr><td><?php the_sub_field('product_feature'); ?></td></tr>
												<?php endwhile; ?>
											</table>
										</div>
									</div>
									<?php endif; ?>
								
									<?php if(have_rows('product_options')) : ?>
									<div class="col-md-6">
										<div class="product-search-header">
											<strong>Options</strong>
										</div>
										<div class="product-search-body">
											<table class="table table-temp">
												<?php while(have_rows('product_options')) : the_row(); ?>
												<tr><td><?php the_sub_field('product_option'); ?></td></tr>
												<?php endwhile; ?>
											</table>
										</div>										
									</div>
									<?php endif; ?>
							
								</div>
								-->
							
								<!-- <?php // THIS FORM WILL NEED TO BE FIXED TO WORK CORRECTLY FOR INDIVIDUAL PRODUCTS ?>
								<form>
									<div class="col-md-12">
										<p>Select the features you need and get a custom recommendation for your perfect HUBER.</p>

										<?php
										$terms = get_terms( 'product_features_options' );
										if(!empty($terms)) {
											foreach($terms as $term) {
												$keys[] = $term->slug;
											}
										}
										?>
									</div>

									<div class="col-md-6">
										<div class="product-search-header">
											<strong>Features</strong> | Select all that apply
										</div>
										<div class="product-search-body">
											<table class="table">
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="3300 Gallon (75 bbl) capacity barbon steel tank with 5/16 shell for long life" <?php if(in_array('3300_gallon', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>3300 Gallon (75 bbl) capacity barbon steel tank with 5/16" shell for long life</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="20 Top manway" <?php if(in_array('20_top_manway', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>20" Top manway</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Hydraulic tank lift" <?php if(in_array('hydraulic_tank_lift', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Hydraulic tank lift</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Full opening hydraulically operated rear door" <?php if(in_array('full_opening_hydraulically_operated_rear_door', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Full opening hydraulically operated rear door</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="PTO Driven, hydraulically operated vacuum / pressure system" <?php if(in_array('pto_driven', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>PTO Driven, hydraulically operated vacuum / pressure system</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Liquid cooled high performance pump" <?php if(in_array('liquid_cooled_high_performance_pump', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Liquid cooled high performance pump</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Full length body trays for hose storage" <?php if(in_array('full_length_body_trays_for_hose_storage', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Full length body trays for hose storage</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="4 inlet wiht internal standpipe for easy dacanting" <?php if(in_array('4_inlet_with_internal_standpipe', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>4" inlet wiht internal standpipe for easy dacanting</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="6 discharge valve for direct pressureizing or gravity unloading" <?php if(in_array('6_discharge', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>6" discharge valve for direct pressureizing or gravity unloading</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Rear work lights, LED running lights" <?php if(in_array('rear_work_lights', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Rear work lights, LED running lights</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Back-up alarm, Grouding Reel" <?php if(in_array('back_up_alarm', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Back-up alarm, Grouding Reel</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Tandem Axle" <?php if(in_array('tandem_axle', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Tandem Axle</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Rear door safety prop bar" <?php if(in_array('rear_door_safety_prop_bar', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Rear door safety prop bar</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Tank lift safety prop bar" <?php if(in_array('tank_lift_safety_prop_bar', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Tank lift safety prop bar</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Hydraulically operated, full opening rear door with holding valve" <?php if(in_array('hydraulically_operated_full_opening_rear_door', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Hydraulically operated, full opening rear door with holding valve</td>
												</tr>
											</table>
										</div>
									</div>

									<div class="col-md-6">
										<div class="product-search-header">
											<strong>Options</strong> | Select all that apply
										</div>
										<div class="product-search-body">
											<table class="table">
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Multiple compartment tank volumes" <?php if(in_array('multiple_compartment_tank_volumes', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Multiple compartment tank volumes</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="ASME/DOT 412" <?php if(in_array('asme_dot_412', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>ASME/DOT 412</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Stainless steel tank with wetted stainless parts" <?php if(in_array('stainless_steel_tank_with_wetted_stainless_parts', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Stainless steel tank with wetted stainless parts</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="High pressure jetting systems with integral water compartment" <?php if(in_array('high_pressure_jetting_systems', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>High pressure jetting systems with integral water compartment</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Auxilary transfer pump" <?php if(in_array('auxilary_transfer_pump', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Auxilary transfer pump</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Top mounted hydraulically operated 4' boom" <?php if(in_array('top_mounted_hydraulically_operated_4_boom', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Top mounted hydraulically operated 4' boom</td>
												</tr>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="Pump Sizes 440-730 CFM<" <?php if(in_array('pump_sizes_440_730_cfm', $keys)) { echo 'checked="true"'; } ?>></td>
													<td>Pump Sizes 440-730 CFM</td>
												</tr>
											</table>
										</div>
									</div>

									<div class="col-md-12">
										<div class="product-rfq">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="name">Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control" name="name" id="name" placeholder="" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="email">Email address <span class="text-danger">*</span></label>
														<input type="email" class="form-control" name="email" id="email" placeholder="" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="company">Company</label>
														<input type="text" class="form-control" name="company" id="company" placeholder="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="phone_number">Phone Number <span class="text-danger">*</span></label>
														<input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="" required>
													</div>
												</div>
											</div>
											<div class="btn-product-rfq-container">
												<button class="btn btn-product-rfq">Request a Quote</button>
											</div>
										</div>
									</div>
								</form>
								-->
								
								
								<?php // -------------------- FORM -------------------- ?>
								
								
								<?php // if(current_user_can('administrator')) { ?>
								
								<form method="post">
								
									<div class="col-md-12">
										<p>Select the options you need and get a custom recommendation for your perfect HUBER.</p>
									</div>
									
									<?php if(have_rows('product_features')) : ?>
									
									<div class="col-md-6">	
										<div class="product-search-header">
											<strong>Standard Features</strong>
										</div>
										<div class="product-search-body">
											<table class="table table-temp">
												<?php while(have_rows('product_features')) : the_row(); ?>
												<tr><td><?php the_sub_field('product_feature'); ?></td></tr>
												<?php endwhile; ?>
											</table>
										</div>
									</div>
									
									<?php endif; ?>
									
									<?php if(have_rows('product_options')) : ?>
									
									<div class="col-md-6">
										<div class="product-search-header">
											<strong>Options</strong> | Select all that apply
										</div>
										<div class="product-search-body">
											<table class="table">
												<?php while(have_rows('product_options')) : the_row(); ?>
												<?php $inputname = get_sub_field('product_option'); ?>
												<tr>
													<td><input type="checkbox" name="features_and_options[]" value="<?php echo $inputname; ?>"></td>
													<td><?php echo $inputname; ?></td>
												</tr>
												<?php endwhile; ?>
											</table>
										</div>
									</div>
									
									<?php endif; ?>
									
									<div class="col-md-12">
										<div class="product-rfq">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="name">Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control" name="formname" id="name" placeholder="" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="email">Email address <span class="text-danger">*</span></label>
														<input type="email" class="form-control" name="formemail" id="email" placeholder="" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="company">Company</label>
														<input type="text" class="form-control" name="formcompany" id="company" placeholder="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="phone_number">Phone Number <span class="text-danger">*</span></label>
														<input type="text" class="form-control" name="formphonenumber" id="phone_number" placeholder="" required>
													</div>
												</div>
											</div>
											<div class="btn-product-rfq-container">
												<button class="btn btn-product-rfq">Request a Quote</button>
											</div>
										</div>
									</div>
								</form>
												
								<?php // } ?>
								
								<?php
								//	if( isset( $_GET ) && !empty( $_GET ) ) {
										// $to			= 'hodo.heather@keithhuber.com, felsher.charles@keithhuber.com';
								//		$to			= 'crystal@robertscreative.com';
								//		$subject 	= 'Website RFQ';
								//		$body 		= "<p>Name: " . $_GET['formname'] . "</p>";
								//		$body 		.= "<p>Email: " . $_GET['formemail'] . "</p>";
								//		$body 		.= "<p>Company: " . $_GET['formcompany'] . "</p>";
								//		$body 		.= "<p>Phone: " . $_GET['formphonenumber'] . "</p>";
								//		$body 		.= "<p><strong>".$pagetitle."</strong> | Options requested: </p>";
								//		if(!empty($_GET['features_and_options'])) {
								//			$body .= "<ul>";
								//			foreach($_GET['features_and_options'] as $option) {
								//				$body .= "<li>" . $option  . "</li>";
								//			}
								//			$body .= "</ul>";
								//		}

								//		$headers = "From: " . strip_tags($_GET['formemail']) . "\r\n";
								//		$headers .= "MIME-Version: 1.0\r\n";
								//		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

								//		mail($to, $subject, $body, $headers);
								//		echo "<p class='form-success'>Your request was successfully submitted. Thank you!</p>";
								//	}
								?>
								
								<?php 
									if(isset($_POST)) { 
									
										$name		= (isset($_POST['formname'])) ? strip_tags($_POST['formname']) : NULL;
										$mail		= (isset($_POST['formemail'])) ? strip_tags($_POST['formemail']) : NULL;
										$comp		= (isset($_POST['formcompany'])) ? strip_tags($_POST['formcompany']) : NULL;
										$phon		= (isset($_POST['formphonenumber'])) ? strip_tags($_POST['formphonenumber']) : NULL;
										if(empty($name) || empty($mail) || empty($phon)) {
											echo "<p class='form-success'>Please fill in all required fields.</p>";
										} else {
											$body = "<p>Name: " . $name . "</p>";
											$body .= "<p>Email: " . $mail . "</p>";
											if($comp != '') { $body .= "<p>Company: " . $comp . "</p>"; }
											$body .= "<p>Phone: " . $phon . "</p>";
											$body .= "<p><strong>".$pagetitle."</strong> | Options requested: </p>";
											if(!empty($_POST['features_and_options'])) {
												$body .= "<ul>";
												foreach($_POST['features_and_options'] as $option) {
													$body .= "<li>" . $option . "</li>";
												}
												$body .= "</ul>";
											}
											$to = 'hodo.heather@keithhuber.com, felsher.charles@keithhuber.com';
											$subject = 'Website RFQ';
											$headers = "From: " . $mail . "\r\n"; 
											$headers .= "MIME-Version: 1.0\r\n";
											$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
											
											if(mail($to, $subject, $body, $headers)) {
												echo "<p class='form-success'>Your request was successfully submitted. Thank you!</p>";
											} else {
												echo "<p class='form-success'>There was an error sending your form. Please try again.</p>";
											}
											
										}
									}
								?>
								
								
								<?php // -------------------- END FORM -------------------- ?>
								
								
							</div>

							<div role="tabpanel" class="tab-pane" id="photo_gallery">

								<div class="row">
									<?php if( have_rows('product_image_gallery') ): ?>
										<?php while ( have_rows('product_image_gallery') ) : the_row(); ?>
											<!-- <pre> -->
											<?php
											$gallery_image = get_sub_field('product_image_gallery_image');
											// print_r($gallery_image);
											?>
											<!-- </pre> -->
											<div class="col-md-4">
												<a href="<?php echo $gallery_image['url'] ?>" rel="lightbox[gallery-1]">
													<img class="img-responsive" src="<?php echo $gallery_image['url'] ?>" alt="" />
												</a>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<!-- <div class="col-md-4"><img class="img-responsive" src="http://placehold.it/400x300" alt="" /></div>
									<div class="col-md-4"><img class="img-responsive" src="http://placehold.it/400x300" alt="" /></div>
									<div class="col-md-4"><img class="img-responsive" src="http://placehold.it/400x300" alt="" /></div>
									<div class="col-md-4"><img class="img-responsive" src="http://placehold.it/400x300" alt="" /></div>
									<div class="col-md-4"><img class="img-responsive" src="http://placehold.it/400x300" alt="" /></div>
									<div class="col-md-4"><img class="img-responsive" src="http://placehold.it/400x300" alt="" /></div> -->
								</div>

							</div>
						</div>

					</div>

					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
