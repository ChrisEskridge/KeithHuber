<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package madebyc3
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if( get_post_type() == 'products' ): ?>

			<aside id="recent-posts-2" class="widget widget_recent_entries">
				<h4 class="widget-title"><strong>Products</strong> <span class="grey-text">| Industrial Trucks</span></h4>

				<div class="sidebar-trucks">
					<div class="row">
						<?php
						$args = array(
								'post_type' => 'products',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'product_type',
										'terms' => array('industrial'),
										'field' => 'slug'
									)
								)
							);
						$query = new WP_Query($args);
						$results = $query->get_posts();
						if(!empty($results)): foreach($results as $result): ?>
							<a href="<?php echo $result->guid ?>">
								<div class="col-md-6">
									<?php $the_thumb = get_field('product_sidebar_thumbnail', $result->ID); ?>
									<?php if( !empty( $the_thumb ) ): ?>
									<img src="<?php echo $the_thumb; ?>" class="img-responsive">
									<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-truck.png" class="img-responsive">
									<?php endif; ?>
								</div>
							</a>
						<?php
						endforeach; endif;
						wp_reset_query();
						?>
					</div>
				</div>
			</aside>

			<aside id="recent-posts-2" class="widget widget_recent_entries">
				<h4 class="widget-title"><strong>Products</strong> <span class="grey-text">| Portable Restroom / Septic Trucks</span></h4>

				<div class="sidebar-trucks">
					<div class="row">
						<?php
						$args = array(
								'post_type' => 'products',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'product_type',
										'terms' => array('portable-restroom-septic'),
										'field' => 'slug'
									)
								)
							);
						$query = new WP_Query($args);
						$results = $query->get_posts();
						if(!empty($results)): foreach($results as $result): ?>
							<a href="<?php echo $result->guid ?>">
								<div class="col-md-6">
									<?php $the_thumb = get_field('product_sidebar_thumbnail', $result->ID); ?>
									<?php if( !empty( $the_thumb ) ): ?>
									<img src="<?php echo $the_thumb; ?>" class="img-responsive">
									<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-truck.png" class="img-responsive">
									<?php endif; ?>
								</div>
							</a>
						<?php
						endforeach; endif;
						wp_reset_query();
						?>
					</div>
				</div>
			</aside>

			<aside id="recent-posts-2" class="widget widget_recent_entries">
				<h4 class="widget-title"><strong>Products</strong> <span class="grey-text">| Stock Units</span></h4>

				<div class="sidebar-trucks">
					<div class="row">
						<?php
						$args = array(
								'post_type' => 'products',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'product_type',
										'terms' => array('stock-units'),
										'field' => 'slug'
									)
								)
							);
						$query = new WP_Query($args);
						$results = $query->get_posts();
						if(!empty($results)): foreach($results as $result): ?>
							<a href="<?php echo $result->guid ?>">
								<div class="col-md-6">
									<?php $the_thumb = get_field('product_sidebar_thumbnail', $result->ID); ?>
									<?php if( !empty( $the_thumb ) ): ?>
									<img src="<?php echo $the_thumb; ?>" class="img-responsive">
									<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail-truck.png" class="img-responsive">
									<?php endif; ?>
								</div>
							</a>
						<?php
						endforeach; endif;
						wp_reset_query();
						?>
					</div>
				</div>
			</aside>

		<?php else: ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'madebyc3' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'madebyc3' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		<?php endif; // end if products page ?>
	</div><!-- #secondary -->
