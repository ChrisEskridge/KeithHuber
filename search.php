<?php
/**
 * The template for displaying Search Results pages.
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

								<header class="page-header">
									<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'madebyc3' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
								</header><!-- .page-header -->

								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>

									<?php get_template_part( 'content', 'search' ); ?>

								<?php endwhile; ?>

								<?php madebyc3_content_nav( 'nav-below' ); ?>

							<?php else : ?>

								<?php get_template_part( 'no-results', 'search' ); ?>

							<?php endif; ?>
						</div>

					</div>

				</div>
			</div>
		</div>

<?php get_footer(); ?>
