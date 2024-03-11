<?php
	//portfolio archive
	get_header();

	$taxonomy = 'portfolio_category';
	$terms = get_terms(
		array(
			'taxonomy'   => $taxonomy,
			'hide_empty' => true,
			'hierarchical' => false,
			'orderby' => 'name',
			'order' => 'ASC',
		)
	);

	$form = get_field('portfolio_form', 'option');
	$text = get_field('blog_seo_text', 'option');
?>
<section class="portfolio">
	<div class="wrapper">
		<div class="portfolio__inner">

			<?php echo get_template_part('template-parts/partials/breadcrumbs'); ?>

			<div class="portfolio__content">
				<h1 class="portfolio__title"><?php the_archive_title(); ?></h1>

				<?php if( have_posts() ) { ?>
					<div class="portfolio__box">
						<h2 class="portfolio__category-title"><?php _e('Всі', 'tp'); ?></h2>

						<div class="portfolio__category-wrap">
							<ul class="portfolio__category-menu">
								<li class="menu-item current-menu-item"><a href="#"><?php _e('Всі', 'tp'); ?></a></li>
								<?php if( !empty($terms) && !is_wp_error($terms) ) { ?>
									<?php foreach ($terms as $item) { ?>
										<li class="menu-item"><a href="<?php echo get_term_link($item); ?>"><?php echo $item->name; ?></a></li>
									<?php } ?>
								<?php } ?>
							</ul>
						</div>

						<div class="portfolio__items">
							<a href="#" class="portfolio__item"></a>
							<?php
								while( have_posts() ) { the_post();

									$status = get_field('status', get_the_ID());
									$type = get_field('type', get_the_ID());
									$year = get_field('year', get_the_ID());
							?>
								<a href="<?php the_permalink(); ?>" class="portfolio__item">
									<div class="portfolio__item-top">
										<div class="portfolio__item-image">
											<?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
										</div>
										<div class="portfolio__item-overlay">
											<div class="portfolio__item-more">
												<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
													<rect width="33" height="33" rx="4" fill="#484848"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M13.2902 11.1246C12.7029 11.1246 12.2268 10.649 12.2268 10.0623C12.2268 9.47562 12.7029 9 13.2902 9H22.9366C23.5239 9 24 9.47562 24 10.0623L24 19.6987C24 20.2854 23.5239 20.761 22.9366 20.761C22.3493 20.761 21.8732 20.2854 21.8732 19.6987L21.8732 12.5515L10.8154 23.6889C10.4001 24.1037 9.72676 24.1037 9.31147 23.6889C8.89618 23.274 8.89618 22.6014 9.31147 22.1865L20.2937 11.1246H13.2902Z" fill="#F8F8F8"/>
													<rect x="0.5" y="0.5" width="32" height="32" rx="3.5" stroke="#F8F8F8"/>
												</svg>
											</div>
											<div class="portfolio__info">
												<?php if( !empty($status) ) { ?>
													<div class="portfolio__info-item portfolio__item-status"><?php echo $status; ?></div>
												<?php } ?>
												<?php if( !empty($year) ) { ?>
													<div class="portfolio__info-item portfolio__item-year"><?php echo $year; ?></div>
												<?php } ?>
											</div>
										</div>
									</div>
									<div class="portfolio__item-bottom">
										<?php if( !empty($type) ) { ?>
											<div class="portfolio__item-type"><?php echo $type; ?></div>
										<?php } ?>
										<h3 class="portfolio__item-title"><?php the_title(); ?></h3>
									</div>
								</a>
							<?php } ?>
						</div>
					</div>

					<?php if( function_exists('wp_pagenavi') ) { ?>

						<div class="tp__pagination">
							<?php wp_pagenavi(); ?>
						</div>

					<?php } ?>

				<?php } ?>
			</div>
		</div>
	</div>
</section>


<?php if( !empty($form['shortcode']) ) { ?>
	<section class="archive-form" data-aos="fade-up">
		<div class="wrapper">
			<div class="archive-form__inner">
				<div class="archive-form__left">
					<?php if( !empty($form['title']) ) { ?>
						<h2 class="archive-form__title"><?php echo $form['title']; ?></h2>
					<?php } ?>
					<?php if( !empty($form['description']) ) { ?>
						<div class="archive-form__description"><?php echo $form['description']; ?></div>
					<?php } ?>
				</div>
				<div class="archive-form__right">
					<div class="archive-form__form">
						<?php echo do_shortcode($form['shortcode']); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>


<?php
	$args = [ 'text' => $text ];
	echo get_template_part('template-parts/partials/scrolling-text', null, $args);

	get_footer();
?>
