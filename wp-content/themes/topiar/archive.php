<?php
	//tmp archive 

	get_header();

	$breadcrumbs = DisplayBreadcrumbs::prepareSubtitleItemsForAutomaticBreadcrumbs();
	$text = get_field('blog_seo_text', 'option');
?>
<section class="portfolio">
	<div class="wrapper">
		<div class="portfolio__inner">
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

			<div class="portfolio__content">
				<h1 class="portfolio__title"><?php the_archive_title(); ?></h1>

				<?php if( have_posts() ) { ?>
					<div class="portfolio__items">
						<?php
							while( have_posts() ) { the_post();

								$type = get_field('type', get_the_ID());
								$year = get_field('year', get_the_ID());
								?>
								<a href="<?php the_permalink(); ?>" class="portfolio__item">
									<div class="portfolio__item-image">
										<?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
									</div>
									<div class="portfolio__item-overlay">
										<?php if( !empty($type) ) { ?>
											<div class="portfolio__item-type"><?php echo $type ?></div>
										<?php } ?>
										<h2 class="portfolio__item-title"><?php  the_title(); ?></h2>
										<?php if( !empty($year) ) { ?>
											<div class="portfolio__item-year"><?php echo $year ?></div>
										<?php } ?>
										<div class="portfolio__item-more">
											<?php _e('Детальніше', 'tp'); ?>
										</div>
									</div>
								</a>
							<?php } ?>
					</div>

					<div class="portfolio__buttons-wrap">
						<a href="#" class="btn portfolio__more"><?php _e('Більше робіт', 'tp'); ?></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>


<?php
	$args = [ 'text' => $text ];
	echo get_template_part('template-parts/partials/scrolling-text', null, $args);


	get_footer();
?>