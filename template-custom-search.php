<?php
/*
Template Name: Custom Search Page
*/

get_header(); ?>

	<?php require_once('navigation.php'); ?>

		<div class="container">

			<div class="row">
				<div class="col-md-4 sidebar hidden-xs hidden-sm">
					<?php get_sidebar(); ?>
				</div>

				<div class="col-md-8 main-inside-content-area">
					<div class="row">
						<div class="col-md-12">
							<h3>Custom Search</h3>
						</div>
					</div>
					<div class="row">

						<div class="col-md-12">
							<?php if( isset( $_GET ) && !empty( $_GET ) ): ?>

								<?php
								$keys = array_keys($_GET);
								$args = array(
										'post_type' => 'products',
										'posts_per_page' => -1,
										'tax_query' => array(
											'relation' => 'OR',
											array(
												'taxonomy' => 'product_features_options',
												'terms' => $keys,
												'field' => 'slug'
											)
										)
									);
								$query = new WP_Query($args);
								$results = $query->get_posts();
								wp_reset_query();
								?>

								<?php if ( !empty( $results ) ) : foreach( $results as $row ): ?>
									<div class="custom_search_listing">
										<h3><a href="<?php echo $row->guid; ?>"><?php echo $row->post_title; ?></a></h3>
										<?php echo $row->post_content; ?>
									</div>
								<?php endforeach; endif; ?>
							<?php endif; ?>
						</div>

					</div>

				</div>
			</div>
		</div>

<?php get_footer(); ?>
