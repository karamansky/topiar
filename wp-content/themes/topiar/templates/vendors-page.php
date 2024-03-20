<?php
	/*
	 * Template Name: Page: Vendors
	 */
	get_header();

?>
<main class="main">
	<div class="vendors">
		<div class="wrapper">
			<div class="vendors__inner">

				<?php get_template_part('template-parts/partials/breadcrumbs'); ?>

				<h1 class="page-title vendors__title" data-aos="fade-up"><?php the_title(); ?></h1>

				<div class="filter-bar" data-aos="fade-up">
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

					<div class="filter-bar__filter">
						<span><?php _e('За замовчуванням', 'tp'); ?></span>
						<ul class="filter-bar__dropdown">
							<li>
								<a href="#"><?php _e('Назва (А-Я)', 'tp'); ?></a>
							</li>
						</ul>
					</div>
				</div>

				<div id="tp-view" class="grid-view">
					<div class="vendors__items">
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="vendors__item">
							<div class="vendors__item-image">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/vendor-img.png" alt="vendor" loading="lazy" />
							</div>
							<div class="vendors__item-content">
								<div class="vendors__item-title-wrap">
									<h2 class="vendors__item-title">Сервісне обслуговування ділянки</h2>
								</div>
								<div class="vendors__item-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="vendors__item-button-wrap">
									<div class="vendors__item-button">
										<?php _e('Детальніше', 'tp'); ?>
										<i class="icon diagonal-arrow-icon"></i>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
