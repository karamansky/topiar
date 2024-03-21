<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$shortcodes = get_field('shortcodes');
	$slider_class = '';
	if ( count($shortcodes) > 1 ) {
		$slider_class = 'before-after__slider';
	}

	if( empty($shortcodes) ) return false;
?>
<section class="before-after">
	<div class="wrapper">
		<div class="before-after__inner">
			<div class="before-after__gallery">
				<div class="before-after__items <?php echo $slider_class; ?>">
					<?php foreach ($shortcodes as $item) {
						if( !empty($item['shortcode']) ) { ?>
							<div class="before-after__item">
								<?php echo do_shortcode($item['shortcode']); ?>
							</div>
					<?php }} ?>
				</div>
				<div class="before-after__pagination"></div>
			</div>
		</div>
	</div>
</section>
