<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$text = get_field('text');
	$image = get_field('image');

	if( empty($text) && empty($image) ) return false;
?>
<section class="text-image">
	<div class="wrapper">
		<div class="text-image__inner">
			<div class="text-image__top">
				<?php if( !empty($title) ) { ?>
					<h2 class="text-image__title"><?php echo $title; ?></h2>
				<?php } ?>
				<?php if( !empty($text) ) { ?>
					<div class="text-image__content">
						<?php echo $text; ?>
					</div>
				<?php } ?>
			</div>
			<?php if( !empty($image) ) { ?>
				<div class="text-image__bottom">
					<div class="text-image__image">
						<?php DisplayGlobal::renderAcfImage($image); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
