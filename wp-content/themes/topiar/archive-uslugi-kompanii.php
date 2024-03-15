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
						<?php echo get_template_part('template-parts/partials/filter-bar'); ?>

						<?php
							if( !empty($_COOKIE['tp-view']) ) {
								$view_class = $_COOKIE['tp-view'] . '-view';
							} else {
								$view_class = 'grid-view';
							}
						?>
						<div id="tp-view" class="<?php echo $view_class; ?>">
							<div class="uslugi__items">
								<?php
									$taxonomy = 'catalog_category';
									$terms = get_terms(
										array(
											'taxonomy'   => $taxonomy,
											'hide_empty' => true,
											'hierarchical' => false,
											'orderby' => 'name',
											'order' => 'ASC',
										)
									);

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
