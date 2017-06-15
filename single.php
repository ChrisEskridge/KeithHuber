<?php
/**
 * The Template for displaying all single posts.
 *
 * @package madebyc3
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
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'content', 'single' ); ?>

								<?php madebyc3_content_nav( 'nav-below' ); ?>

								<?php
									// If comments are open or we have at least one comment, load up the comment template
									if ( comments_open() || '0' != get_comments_number() )
										comments_template();
								?>

							<?php endwhile; // end of the loop. ?>
						</div>

					</div>

				</div>
			</div>
		</div>

<?php get_footer(); ?>
