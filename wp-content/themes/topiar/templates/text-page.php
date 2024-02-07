<?php
/*
 * Template Name: Text Page
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
						<?php the_content(); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
