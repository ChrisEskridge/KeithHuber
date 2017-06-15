<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
					<?php if( has_post_thumbnail() ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
						</div>
					</div>
					<?php endif; ?>

					<div class="row">

						<div class="col-md-12">
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'content', 'page' ); ?>

							<?php endwhile; ?>
						</div>

					</div>

				</div>
			</div>
		</div>

<?php get_footer(); ?>
