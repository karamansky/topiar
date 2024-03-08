<?php
	//uslugi-kompanii archive template

	get_header();

	$breadcrumbs = DisplayBreadcrumbs::prepareSubtitleItemsForAutomaticBreadcrumbs();
	$text = get_field('blog_seo_text', 'option');
?>
<section class="uslugi">
	<div class="wrapper">
		<div class="uslugi__inner">
			<?php if( !empty($breadcrumbs) ) { ?>
				<ul class="breadcrumbs">
					<?php $i = 1; foreach ($breadcrumbs as $breadcrumb) { ?>
						<li class="breadcrumbs__item">
							<?php if( !empty($breadcrumb['url']) ) { ?>
								<a href="<?php echo $breadcrumb['url'] ?>"><?php echo $breadcrumb['title']; ?></a><?php if( $i < count($breadcrumbs) ) { ?>&nbsp;/&nbsp;<?php } ?>
							<?php } else { ?>
								<span><?php echo $breadcrumb['title']; ?></span><?php if( $i < count($breadcrumbs) ) { ?>&nbsp;/&nbsp;<?php } ?>
							<?php } ?>
						</li>
						<?php $i++; } ?>
				</ul>
			<?php } ?>

			<div class="uslugi__page">
				<h1 class="uslugi__title"><?php the_archive_title(); ?></h1>

				<div class="uslugi__block">
					<div class="uslugi__sidebar">
						<nav class="uslugi__menu">
							<?php
								wp_nav_menu(
									[
										'theme_location' => 'catalog-menu',
										'menu_class'     => 'uslugi-menu',
										'before'          => '<div class="menu-item__inner">',
										'after'           => '<span class="menu-item__opener"></span></div>',
									]
								);
							?>
						</nav>
					</div>
					<div class="uslugi__content">
						<div class="filter-bar">
							<div class="filter-bar__views">
								<a href="#" class="filter-bar__view filter-bar--table">
									<i class="icon table-view-icon"></i>
								</a>
								<a href="#" class="filter-bar__view filter-bar--grid tp-active">
									<i class="icon grid-view-icon"></i>
								</a>
								<a href="#" class="filter-bar__view filter-bar--list">
									<i class="icon list-view-icon"></i>
								</a>
							</div>
						</div>

						<div id="tp-view" class="grid-view">
							<div class="uslugi__items">
								<?php
									$taxonomy = 'catalog_category';
									$current_term = get_queried_object()->term_id;
									$child_taxonomies = get_term_children($current_term, $taxonomy);

//									echo "<pre>";
//									print_r($current_term);
//									print_r($child_taxonomies);
//									echo "</pre>";

									if( !empty($child_taxonomies) ) {
										//get all child taxonomies by this term
										$terms = [];
										foreach ($child_taxonomies as $item) {
											$terms[] = get_term($item);
										}

									} else {
										//get all posts by this term
										$query = new WP_Query( array(
											'tax_query' => array(
												array(
													'taxonomy' => 'catalog_category',
													'field'    => 'id',
													'terms'    => $current_term
												)
											)
										) );
									}

									if ( !empty($query) && $query->have_posts() ) {
										while ( $query->have_posts() ) {
											$query->the_post();

											?>

											<a href="<?php the_permalink(); ?>" class="uslugi__item">
												<div class="uslugi__image">
													<img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" loading="lazy" />
												</div>
												<div class="uslugi__item-content">
													<h3 class="uslugi__item-title"><?php the_title(); ?></h3>
													<div class="uslugi__item-description"><?php the_excerpt(); ?></div>
													<div class="uslugi__item-more"><?php _e('Детальніше', 'tp'); ?> <i class="icon diagonal-arrow-icon"></i></div>
												</div>
											</a>

											<?php

										}
									}


									//show child taxonomies
									if ( !empty($terms) ) {
										foreach ($terms as $item) {
												$image = get_field('image', 'term_' . $item->term_id);
											?>
											<a href="<?php echo get_term_link($item); ?>" class="uslugi__item">
												<div class="uslugi__image">
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $item->name; ?>" loading="lazy" />
												</div>
												<div class="uslugi__item-content">
													<h3 class="uslugi__item-title"><?php echo $item->name; ?></h3>
													<div class="uslugi__item-description"><?php echo $item->description; ?></div>
													<div class="uslugi__item-more"><?php _e('Детальніше', 'tp'); ?> <i class="icon diagonal-arrow-icon"></i></div>
												</div>
											</a>
										<?php }
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
	$args = [ 'text' => $text ];
	echo get_template_part('template-parts/partials/scrolling-text', null, $args);


	get_footer();
?>
