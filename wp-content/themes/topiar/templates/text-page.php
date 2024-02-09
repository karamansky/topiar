<?php
/*
 * Template Name: Page: Text
 */
get_header();

?>
<main class="main">
	<div class="text-page">
		<div class="wrapper">
			<div class="text-page__inner">
				<div class="text-page__date"><?php _e('Останнє оновлення:', 'tp'); ?> <?php echo get_the_modified_date('d.m.Y', get_the_ID()); ?></div>
				<?php while( have_posts() ) { the_post(); ?>
					<div class="text-page__content">
						<h1 class="text-page__title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
