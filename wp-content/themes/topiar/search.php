<?php get_header(); ?>
	<section class="search-results">
		<div class="wrapper">
			<div class="search-results__inner">

				<?php get_template_part('template-parts/partials/breadcrumbs'); ?>

				<h1 class="search-results__title">
					<?php _e('Результат пошуку', 'tp'); ?> «<span><?php echo get_query_var('s') ?></span>»
				</h1>

				<?php if (have_posts()) {

						get_template_part('template-parts/partials/filter-bar');

						if (!empty($_COOKIE['tp-view'])) {
							$view_class = $_COOKIE['tp-view'] . '-view';
						}
						else {
							$view_class = 'grid-view';
						}

						$posts_per_page = 6;
						$search_query = get_search_query();
						$types_queries = [];
						$total_pages = 1;
						$type_queries = [
							'uslugi-kompanii' => __('Послуги', 'tp'),
							'portfolio' => __('Портфоліо', 'tp'),
							'post' => __('Блог', 'tp'),
							'page' => __('Сторінки', 'tp'),
						];

						$args = [
							's' => $search_query,
							'posts_per_page' => count($type_queries) * $posts_per_page,
							'post__not_in' =>
							[
								7, //home page
							],
							'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
						];
						$the_main_query = new WP_Query($args);
						wp_reset_postdata();

						//get queries by each post_type
						foreach ($type_queries as $post_type => $type_name) {
							$args = [
								's' => $search_query,
								'post_type' => $post_type,
								'posts_per_page' => $posts_per_page,
								'post__not_in' =>
									[
										7, //home page
									],
								'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
							];

							$the_query = new WP_Query($args);
							$types_queries[$post_type] = $the_query;

							wp_reset_postdata();
						}
					?>
					<div id="tp-view" class="<?php echo $view_class; ?>">

						<?php if( !empty($types_queries) ) { ?>
							<div class="search-result__type-filter">
								<div class="search-result__type-filter-main-item"><?php _e('Всі', 'tp'); ?><span class="item-count">(<?php echo $the_main_query->found_posts; ?>)</span></div>
								<div class="search-result__type-filter-drop">
									<a href="#" class="search-result__type-filter-item tp-active">
										<?php _e('Всі', 'tp'); ?><span class="item-count">(<?php echo $the_main_query->found_posts; ?>)</span>
									</a>
									<?php foreach ($type_queries as $post_type => $type_name) { ?>
										<?php if( !empty($types_queries[$post_type]->posts) ) { ?>
											<a href="#<?php echo $post_type ?>" class="search-result__type-filter-item">
												<?php echo $type_name ?><span class="item-count">(<?php echo $types_queries[$post_type]->found_posts; ?>)</span>
											</a>
										<?php } ?>
									<?php } ?>
								</div>
							</div>
						<?php } ?>

						<?php foreach ($type_queries as $post_type => $type_name) {
							$the_query = $types_queries[$post_type];

							if( $total_pages < $the_query->max_num_pages ) {
								$total_pages = $the_query->max_num_pages;
							}

							if ($the_query->have_posts()) { ?>

								<div class="search-result__type-box" id="<?php echo $post_type ?>">
									<h2 class="search-result__type"><?php echo $type_name ?></h2>
									<div class="search-result__items">
										<?php

											while ($the_query->have_posts()) {
												$the_query->the_post();

												$image_url = !empty(get_the_post_thumbnail_url(get_the_ID(), 'large')) ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_template_directory_uri() . '/assets/img/no-image.svg';
												$excerpt = get_the_excerpt(get_the_ID());

												?>

													<a href="<?php the_permalink(); ?>" class="search-result__item">
														<div class="search-result__item-top">
															<div class="search-result__image">
																<img src="<?php echo $image_url ?>" alt="post image" loading="lazy"/>
															</div>
															<div class="search-result__item-title"><?php the_title(); ?></div>
														</div>
														<div class="search-result__item-bottom">
															<div>
																<div class="search-result__item-title"><?php the_title(); ?></div>
																<div class="search-result__item-desc">
																	<?php echo $excerpt; ?>
																</div>
															</div>
															<div class="search-result__item-link">
																<?php _e('Детальніше', 'tp'); ?>
															</div>
														</div>
													</a>

												<?php
											} ?>
									</div>
									<?php
										$count = count($the_query->posts);
										$see = 3;

										if( $count < $see ) {
											$see = $count;
										}
									?>
										<a href="#" class="search-result__more" data-see="<?php echo $see; ?>" data-count="<?php echo $count ?>">
											<div><?php _e('Показати ще', 'tp'); ?></div>
											<div>
												<?php _e('Переглянуто', 'tp'); echo ' <span class="see">' . $see . '</span> '; _e('з', 'tp'); ?> <span class="count"><?php echo $count;?></span>
											</div>
										</a>
								</div>

								<?php
								wp_reset_postdata();
							}
						}
						?>

					</div>

					<?php if ( $total_pages > 1 ) { ?>
						<div class="tp__pagination">
							<div class="wp-pagenavi">
								<?php echo paginate_links(['total' => $total_pages]); ?>
							</div>
						</div>
					<?php } ?>

					<?php
				}
				else {
					get_template_part('template-parts/partials/content', 'search-none');
				}
				?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>