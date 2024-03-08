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
								<a href="#" class="uslugi__item">
									<div class="uslugi__image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/tmp.png" alt="" loading="lazy" />
									</div>
									<div class="uslugi__item-content">
										<h3 class="uslugi__item-title">Сільськогосподарський полив</h3>
										<div class="uslugi__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, snmnmned do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
										<div class="uslugi__item-more">Детальніше <i class="icon diagonal-arrow-icon"></i></div>
									</div>
								</a>
								<a href="#" class="uslugi__item">
									<div class="uslugi__image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/tmp.png" alt="" loading="lazy" />
									</div>
									<div class="uslugi__item-content">
										<h3 class="uslugi__item-title">Сільськогосподарський полив</h3>
										<div class="uslugi__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, snmnmned do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
										<div class="uslugi__item-more">Детальніше <i class="icon diagonal-arrow-icon"></i></div>
									</div>
								</a>
								<a href="#" class="uslugi__item">
									<div class="uslugi__image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/tmp.png" alt="" loading="lazy" />
									</div>
									<div class="uslugi__item-content">
										<h3 class="uslugi__item-title">Сільськогосподарський полив</h3>
										<div class="uslugi__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, snmnmned do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
										<div class="uslugi__item-more">Детальніше <i class="icon diagonal-arrow-icon"></i></div>
									</div>
								</a>
								<a href="#" class="uslugi__item">
									<div class="uslugi__image">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/tmp.png" alt="" loading="lazy" />
									</div>
									<div class="uslugi__item-content">
										<h3 class="uslugi__item-title">Сільськогосподарський полив</h3>
										<div class="uslugi__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, snmnmned do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
										<div class="uslugi__item-more">Детальніше <i class="icon diagonal-arrow-icon"></i></div>
									</div>
								</a>
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
