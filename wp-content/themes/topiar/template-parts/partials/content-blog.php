<?php
	$taxonomy = 'category';
	$terms = get_terms(
		array(
			'taxonomy'   => $taxonomy,
			'hide_empty' => true,
			'hierarchical' => false,
			'orderby' => 'name',
			'order' => 'ASC',
		)
	);

	$form = get_field('blog_form', 'option');
	$text = get_field('blog_seo_text', 'option');
?>
<section class="blog-home texture-bg">
	<div class="wrapper">
		<div class="blog-home__inner">

			<?php echo get_template_part('template-parts/partials/breadcrumbs'); ?>

			<div class="blog-home__content">
				<?php
					$the_term = get_queried_object();
					$archive_title = $menu_item = get_the_archive_title();
					if (!empty($archive_title) && $archive_title == 'Archives') {
						$archive_title = __('Блог' , 'tp');
						$menu_item = __('Всі' , 'tp');
					}
				?>
				<h1 class="blog-home__title"><?php _e('Блог' , 'tp'); //echo $archive_title ?></h1>

				<?php if( have_posts() ) { ?>
					<div class="blog-home__box">
						<h2 class="blog-home__category-title"><?php echo $menu_item; ?></h2>

						<div class="blog-home__category-menu-mob"><?php echo $menu_item ?><i class="icon arrow-down-gray-icon"></i></div>
						<div class="blog-home__category-wrap">
							<ul class="blog-home__category-menu">
								<li class="menu-item"><a href="#"><?php _e('Всі' , 'tp'); ?></a></li>
								<?php if( !empty($terms) && !is_wp_error($terms) ) { ?>
									<?php
									foreach ($terms as $item) {
										$current = '';
										if( $item->term_id == $the_term->term_id ) {
											$current = 'current-menu-item';
										} ?>
										<li class="menu-item <?php echo $current; ?>"><a href="<?php echo get_term_link($item); ?>"><?php echo $item->name; ?></a></li>
									<?php } ?>
								<?php } ?>
							</ul>
						</div>

						<div class="blog-home__items">
							<a href="#" class="blog-home__item" onclick="return false;"></a>
							<?php
								while( have_posts() ) { the_post();
									$excerpt = get_the_excerpt();
									?>
									<a href="<?php the_permalink(); ?>" class="blog-home__item">
										<div class="blog-home__item-top">
											<div class="blog-home__item-image">
												<?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
											</div>
										</div>
										<div class="blog-home__item-bottom">
											<h3 class="blog-home__item-title"><?php the_title(); ?></h3>
											<?php if( !empty($excerpt) ) { ?>
												<div class="blog-home__item-description"><?php echo $excerpt; ?></div>
											<?php } ?>
											<div class="blog-home__date"><?php the_date(); ?></div>
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

				<?php } else { ?>

					<?php _e('Немає записів!', 'tp'); ?>

				<?php } ?>
			</div>
		</div>
	</div>
</section>


<?php if( !empty($form['shortcode']) ) {
	echo get_template_part('template-parts/partials/form', null, ['form' => $form]);
} ?>


<?php
	$args = [ 'text' => $text ];
	echo get_template_part('template-parts/partials/scrolling-text', null, $args);
?>
