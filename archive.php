<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
							<?php if ( have_posts() ) : ?>

								<?php while ( have_posts() ) : the_post(); ?>

									<?php get_template_part( 'content', get_post_format() ); ?>

								<?php endwhile; ?>

								<?php madebyc3_content_nav( 'nav-below' ); ?>

							<?php else : ?>

								<?php get_template_part( 'no-results', 'index' ); ?>

							<?php endif; ?>
						</div>

					</div>

				</div>
			</div>
		</div>

<?php get_footer(); ?>
