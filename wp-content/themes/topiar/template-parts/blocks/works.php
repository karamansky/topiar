<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$text = get_field('text');
	$services = get_field('works');

	if( empty($services) ) return false;
?>
<section class="works">
	<div class="wrapper">
		<div class="works__inner">
			<?php if(!empty($title) || !empty($text)) { ?>
				<div class="works__top">
					<?php if( !empty($title) ) { ?>
						<h2 class="works__title"><?php echo $title ?></h2>
					<?php } ?>
					<?php if( !empty($text) ) { ?>
						<div class="works__text">
							<?php echo $text; ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<div class="works__items">
				<?php foreach ($services as $item) {
						$excerpt = get_the_excerpt($item->ID);
						$image = get_the_post_thumbnail_url($item->ID);
					?>
					<div class="works__item">
						<?php if( !empty($image) ) { ?>
							<div class="works__item-image">
								<img src="<?php echo $image ?>" alt="services" loading="lazy" />
							</div>
						<?php } ?>
						<div class="works__item-content">
							<div>
								<a href="<?php echo get_the_permalink($item->ID); ?>"><h3 class="works__item-title"><?php echo $item->post_title; ?></h3></a>
								<?php if( !empty($excerpt) ) { ?>
									<div class="works__item-description">
										<?php echo get_the_excerpt($item->ID); ?>
									</div>
								<?php } ?>
							</div>
							<a href="<?php echo get_the_permalink($item->ID); ?>" class="btn btn--small btn--orange-dark works__item-link"><?php _e('Детальніше', 'tp'); ?><i class="icon diagonal-arrow-icon"></i></a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
