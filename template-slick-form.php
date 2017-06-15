<?php
/*
Template Name: Slick Form Page
*/
?>
<?php get_header(); ?>

<?php require_once('navigation.php'); ?>

<div class="container">
	<?php if($reduced != '') { ?><span class="unit-label">Price</span><?php } ?>
	<h1 class="entry-title">Stock Units</h1>
	<?php 
		$count = 0;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$inventory = new WP_Query(array('post_type'=>'stock', 'posts_per_page'=>8, 'paged'=>$paged));
		if($inventory->have_posts()) : while($inventory->have_posts()) : $inventory->the_post();
		$count++; 
	?>
	
	<div class="unit-listing">
		
		<?php
			$reduced = get_field('reduced_price');
			$year = get_field('stock_year');
			$make = get_field('stock_make');
			$model = get_field('stock_model');
			$tank = get_field('stock_tank');
			$additional_specs = get_field('stock_specs');
			$photo = get_field('stock_photo');
			$gallery = get_field('stock_gallery');
			$sales = get_field('stock_sales');
			$phone = get_field('stock_phone');
			$email = get_field('stock_email');
		?>
		
		<div class="unit-listing-tr">
		
			<div class="unit-details unit-listing-td">
				<h2><?php the_title(); ?></h2><?php if($reduced != '') { ?><span class="reduced-price">Reduced Price</span><?php } ?>
				<ul>
                	
					<?php if($year != '') { ?><li><span class="unit-label">Year</span> <span class="unit-data"><?php echo $year; ?></span></li><?php } ?>
					<?php if($make != '') { ?><li><span class="unit-label">Make</span> <span class="unit-data"><?php echo $make; ?></span></li><?php } ?>
					<?php if($model != '') { ?><li><span class="unit-label">Model</span> <span class="unit-data"><?php echo $model; ?></span></li><?php } ?>
					<?php if($tank != '') { ?><li><span class="unit-label">Tank</span> <span class="unit-data"><?php echo $tank; ?></span></li><?php } ?>
					<?php if(have_rows('stock_specs')) : ?>
					<li>
						<span class="unit-label">Additional Specs</span> 
						<ul class="unit-specs">
							<?php while(have_rows('stock_specs')) : the_row(); ?>
							<li><?php the_sub_field('spec_data'); ?></li>
							<?php endwhile; ?>
						</ul>
					</li>
					<?php endif; ?>
				</ul>
				<p class="unit-contact">Contact <?php if($sales != '') { echo $sales; } else { echo 'us'; } ?> at <?php echo $phone; if($email != ''){ echo ' or <a href="mailto:'.$email.'">'.$email.'</a>'; } ?> for more information.</p>
			</div>
			
			<div class="unit-photos unit-listing-td">
				<a class="unit-featured-photo" href="<?php echo $photo; ?>" rel="lightbox[gallery-<?php echo $count; ?>]"><img src="<?php echo $photo; ?>" /></a>
				<?php if($gallery) : ?>
				<div class="unit-photo-gallery">
					<?php foreach($gallery as $gallery_item) : ?>
						<a href="<?php echo $gallery_item['url']; ?>" rel="lightbox[gallery-<?php echo $count; ?>]">
							<img src="<?php echo $gallery_item['sizes']['thumbnail']; ?>" />
						</a>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
			
		</div>
		
	</div>
		
	<?php endwhile; endif; wp_reset_query(); ?>
	
	<div class="unit-page-numbers">
		<!--<span class="pages-more">View More Stock Units: </span>-->
		<?php global $inventory;
			$big = 999999999;
			echo paginate_links ( array (
			'base' => str_replace ( $big, '%#%', esc_url ( get_pagenum_link ( $big ) ) ) ,
			'format' => '?paged=%#%',
			'current' => max ( 1, get_query_var ( 'paged' ) ) ,
			'total' => $inventory->max_num_pages
			) );
		?>
	</div>

</div>

<?php get_footer(); ?>