<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package madebyc3
 */

get_header(); ?>

		<div class="container">

			<?php require_once('navigation.php'); ?>

			<div class="row">
				<div class="col-md-4 sidebar hidden-xs hidden-sm">
					<?php get_sidebar(); ?>
				</div>

				<div class="col-md-8 main-inside-content-area">
					<div class="row">
						<div class="col-md-12">
							<h1>Page not found</h1>
						</div>
					</div>

					<div class="row">

						<div class="col-md-12">

							<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'madebyc3' ); ?></p>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						</div>

					</div>

				</div>
			</div>
		</div>

<?php get_footer(); ?>
