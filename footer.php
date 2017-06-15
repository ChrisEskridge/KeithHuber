<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package madebyc3
 */
?>

<?php //if( is_front_page() ): ?>

		<div class="site-footer bg-black">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="site-footer-content">
							<?php the_field('home_footer_left', 'option'); ?>
						</div>
					</div>

					<div class="col-md-4 site-footer-logo text-center">
						<div class="site-footer-content">
							<!--<img src="<?php echo get_template_directory_uri(); ?>/assets/images/holmac_company.png" class="img-responsive"><br>-->
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/holmac_company2.png" class="img-responsive"><br>
							&copy;<?php echo date('Y'); ?> Hol-Mac Corporation. All rights reserved.
						</div>
					</div>

					<div class="col-md-4 text-right">
						<div class="site-footer-content">
							<?php the_field('home_footer_right', 'option'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-former-statement" style="width:100%; float:left; padding:10px 0; font-size:14px; font-style:italic; text-align:center; background-color:#0b0a4d; color:#5469a4;">
			Formerly known as Keith Huber Corporation, we are now operating as "Huber".
		</div>

		<script type="text/javascript">
		jQuery(document).ready( function() {
			jQuery('.dropdown-toggle').dropdown();
		});
		</script>

		<?php wp_footer(); ?>
	</body>
</html>

<?php /*else: ?>

		<div class="bg-white">
			<div class="container">
				<div class="row inside-footer">
					<div class="col-md-4">
						<?php the_field('inside_footer_left', 'option'); ?>
					</div>

					<div class="col-md-4 side-grey-border">
						<?php
							query_posts('posts_per_page=1');
							if(have_posts());
							while(have_posts()) :
							the_post();
						?>

						<em>Latest News:</em> <strong><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></strong>
						<?php the_excerpt(); ?>
						<em><a href="<?php echo get_permalink(); ?>">continue reading &raquo;</a></em>
						<?php
						endwhile;
						wp_reset_query();
						?>
					</div>

					<div class="col-md-4 side-grey-border">
						<strong><a href="/features-and-options">FEATURES &amp; OPTIONS &raquo;</a></strong><br>
						<?php the_field('inside_footer_right_features_text', 'option'); ?>

						<br><br>

						<strong><a href="/get-a-quote">GET A QUOTE &raquo;</a></strong><br>
						<?php the_field('inside_footer_right_quote_text', 'option'); ?>
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>

<?php endif;*/ ?>