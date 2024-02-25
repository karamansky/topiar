<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$image = get_field('image');

	if( empty($image) ) return false;
?>
<div class="image-banner" <?php echo DisplayGlobal::generateStyleWithBgImageOrNothing( $image ); ?> data-aos="fade-up">
	<div class="wrapper">
		<div class="image-banner__inner">
			<?php if( !empty($title) ) { ?>
				<div class="image-banner__title">
					<?php echo $title; ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
