<?php
	/*
	 * Template name: Page: Blog
	 */
	get_header();

	$text = get_field('blog_seo_text', 'option');
?>

<?php the_content(); ?>

	<section class="blog texture-bg">
		<div class="wrapper">
			<div class="blog__inner">
				<?php if( have_posts() ) { ?>
					<div class="blog__items">
						<?php
							$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'posts_per_page' => get_option('posts_per_page'),
								'paged'          => $current_page,
							);
							query_posts( $args );

							$wp_query->is_archive = true;
							$wp_query->is_home = false;

							while(have_posts()) {
								the_post();

								$date = get_the_date('d.m.Y');
								$title = get_the_title();
								$excerpt = get_the_excerpt();
								$link = get_the_permalink();
								$image = get_the_post_thumbnail_url();
						?>

							<a href="<?php echo $link; ?>" class="blog__item" data-aos="fade-up">
								<div class="blog__content">
									<div>
										<?php if( !empty($date) ) { ?>
											<div class="blog__date"><?php echo $date ?></div>
										<?php } ?>
										<?php if( !empty($title) ) { ?>
											<h2 class="blog__title"><?php echo $title; ?></h2>
										<?php } ?>
										<?php if( !empty($excerpt) ) { ?>
											<div class="blog__excerpt"><?php echo $excerpt; ?></div>
										<?php } ?>
									</div>
									<?php if( !empty($link) ) { ?>
										<div class="blog__link"><?php _e('Читати більше', 'tp'); ?></div>
									<?php } ?>
								</div>
								<div class="blog__image">
									<?php if( !empty($image) ) { ?>
										<img src="<?php echo $image ?>" alt="blog post" loading="lazy" />
									<?php } ?>
								</div>
							</a>
						<?php } if( function_exists('wp_pagenavi') ) { ?>

							<div class="blog__pagination">
								<?php wp_pagenavi(); ?>
							</div>

						<?php } ?>
					</div>
				<?php } else { ?>
					<?php _e('Немає записів.', 'tp'); ?>
				<?php } ?>
			</div>
		</div>
	</section>

<?php
	$args = [ 'text' => $text ];
	echo get_template_part('template-parts/partials/scrolling-text', null, $args);


	get_footer();
?>