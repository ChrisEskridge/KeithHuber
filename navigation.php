<?php //if( is_front_page() ): ?>

		<div class="navbar navbar-default hidden-lg hidden-md" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<!--<li class="active"><a href="/">Home</a></li>-->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/product_type/industrial/">Industrial</a></li>
								<li><a href="/product_type/portable-restroom-septic/">Portable Restroom / Septic</a></li>
							</ul>
						</li>
						<li class=""><a href="/stock-units">Stock Units</a></li>
						<li class=""><a href="/parts">Parts</a></li>
						<li class=""><a href="/service">Service</a></li>
						<li class=""><a href="/about">About</a></li>
						<li class=""><a href="/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="bg-black">
			<div class="container">
				<div class="row header-home">
					<div class="col-xs-6">
						<?php the_field('home_header_left', 'option'); ?>
					</div>
					<div class="col-xs-6 text-right">
						<?php the_field('home_header_right', 'option'); ?>
					</div>
					<div class="col-md-4">
						<nav class="navbar hidden-sm hidden-xs" role="navigation">
							<ul class="nav navbar-nav">
								<!--<li class="active"><a href="/">Home</a></li>-->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li class="menu-item dropdown dropdown-submenu">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Industrial</a>
											<ul class="dropdown-menu">
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
												<li class="menu-item ">
													<a href="<?php echo $result->guid ?>"><?php echo $result->post_title ?></a>
												</li>
												<?php
												endforeach; endif;
												wp_reset_query();
												?>
											</ul>
										</li>
										<li class="menu-item dropdown dropdown-submenu">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portable Restroom / Septic</a>
											<ul class="dropdown-menu">
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
												<li class="menu-item ">
													<a href="<?php echo $result->guid ?>"><?php echo $result->post_title ?></a>
												</li>
												<?php
												endforeach; endif;
												wp_reset_query();
												?>
											</ul>
										</li>
										<!--
										<li class="menu-item dropdown dropdown-submenu">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Stock Units</a>
											<ul class="dropdown-menu">
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
												<li class="menu-item ">
													<a href="<?php echo $result->guid ?>"><?php echo $result->post_title ?></a>
												</li>
												<?php
												endforeach; endif;
												wp_reset_query();
												?>
											</ul>
										</li>
										-->
									</ul>
								</li>
								<li class=""><a href="/stock-units">Stock</a></li>
								<li><a href="/parts">Parts</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-4 header-logo">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/huber-logo-home.png" class="img-responsive"></a>
					</div>
					<div class="col-md-4 hidden-sm hidden-xs">
						<nav class="navbar" role="navigation">
							<ul class="nav navbar-nav">
								<li class=""><a href="/service">Service</a></li>
								<li class=""><a href="/about">About</a></li>
								<li class=""><a href="/contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>


<?php /*else: // any inside page ?>

			<div class="navbar navbar-default hidden-lg hidden-md" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="/product_type/industrial/">Industrial</a></li>
									<li><a href="/product_type/portable-restroom-septic/">Portable Restroom / Septic</a></li>
									<li><a href="/product_type/stock-units/">Stock Units</a></li>
								</ul>
							</li>
							<li class=""><a href="/parts">Parts</a></li>
							<li class=""><a href="/service">Service</a></li>
							<li class=""><a href="/about">About</a></li>
							<li class=""><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-4">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-home.png" class="img-responsive inside-logo"></a>
				</div>
				<div class="col-xs-8">
					<div class="inside-upper">
						<div class="row">
							<div class="col-sm-6">
								<div class="inside-upper-phone-number">800.334.8237</div>
							</div>
							<div class="col-sm-6 text-right hidden-xs">
								<form class="navbar-form" action="/" role="search">
									<div class="input-group add-on">
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit">
												<i class="glyphicon glyphicon-search"></i>
											</button>
										</div>
										<input type="text" class="form-control " placeholder="Search..." name="s">
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="inside-navigation hidden-sm hidden-xs">
						<div class="row">
							<div class="col-md-2 inside-navigation-element inside-navigation-border-right"><a href="/">Home</a></div>
							<div class="col-md-2 inside-navigation-element inside-navigation-border-right"><a href="/products">Products</a></div>
							<div class="col-md-2 inside-navigation-element inside-navigation-border-right"><a href="/parts">Parts</a></div>
							<div class="col-md-2 inside-navigation-element inside-navigation-border-right"><a href="/service">Service</a></div>
							<div class="col-md-2 inside-navigation-element inside-navigation-border-right"><a href="/about">About</a></div>
							<div class="col-md-2 inside-navigation-element"><a href="/contact">Contact</a></div>
						</div>
					</div>
				</div>
			</div>

<?php endif;*/ ?>