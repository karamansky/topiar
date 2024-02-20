<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$services_items = get_field('services_categories');
	$button_more = get_field('button_more');

	if( empty($services_items) ) return false;
?>
<div class="services-block">
	<div class="wrapper">
		<div class="services-block__header">
			<?php if( !empty($title) ) { ?>
				<h2 class="section-title services-block__title">
					<?php echo $title; ?>
				</h2>
			<?php } ?>
		</div>
		<div class="wrapper--small">
			<div class="services-block__inner">
				<?php if( !empty($services_items) ) { ?>
					<div class="services-block__items">
						<?php
							foreach ($services_items as $item) {
								$style = '';
//								$title = $item['taxonomy']->name;
//								$image = get_field( 'image', 'term_'.$item['taxonomy']->term_id );
								if( !empty($image) ) {
									$style = 'background-image: url('. $image['url'] .')';
								}
								?>
								<a href="<?php //echo get_term_link( $item['taxonomy']->term_id ); ?>" class="services-block__item" style="<?php echo $style; ?>">
									<div class="services-block_item-content">
										<?php if( !empty($title) ) { ?>
											<div class="services-block__item-title"><?php echo $title; ?></div>
										<?php } ?>
									</div>
								</a>
							<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php DisplayGlobal::renderAcfLink($button_more, 'btn btn--white services-block__more'); ?>
	</div>
</div>
