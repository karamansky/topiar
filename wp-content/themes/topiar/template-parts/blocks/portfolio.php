<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$subtitle = get_field('subtitle');
	$button_more = get_field('button_more');
	$portfolio_items = get_field('portfolio_items');

	if( empty($portfolio_items) ) return false;
?>
<div class="portfolio-block">
	<div class="wrapper">
		<div class="portfolio-block__inner">
			<div class="portfolio-block__header">
				<?php if( !empty($title) ) { ?>
					<h2 class="section-title portfolio-block__title">
						<?php echo $title; ?>
					</h2>
				<?php } ?>
				<?php if( !empty($subtitle) ) { ?>
					<span class="portfolio-block__subtitle">
						<?php echo $subtitle; ?>
					</span>
				<?php } ?>
			</div>
			<?php if( !empty($portfolio_items) ) { ?>
				<div class="portfolio-block__items">
					<?php
						foreach ($portfolio_items as $item) {
							$style = '';
							$title = get_the_title( $item->ID );
							$type = get_field('type', $item->ID );
							$image = get_the_post_thumbnail_url( $item->ID );
							if( !empty($image) ) {
								$style = 'background-image: url('. $image .')';
							}
					?>
						<a href="<?php echo get_the_permalink( $item->ID ); ?>" class="portfolio-block__item" style="<?php echo $style; ?>">
							<div class="portfolio-block_item-content">
								<?php if( !empty($type) ) { ?>
									<div class="portfolio-block__item-type"><?php echo $type; ?></div>
								<?php } ?>
								<?php if( !empty($title) ) { ?>
									<div class="portfolio-block__item-title"><?php echo $title; ?></div>
								<?php } ?>
							</div>
						</a>
					<?php } ?>
					<?php if( !empty($button_more) ) { ?>
					<a href="<?php echo $button_more['url']; ?>" class="portfolio-block__item portfolio-block__more">
						<div class="portfolio-block_item-content">
							<?php if( !empty($button_more['title']) ) { ?>
								<div class="portfolio-block__item-title"><?php echo $button_more['title']; ?></div>
							<?php } ?>
						</div>
					<?php } ?>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
