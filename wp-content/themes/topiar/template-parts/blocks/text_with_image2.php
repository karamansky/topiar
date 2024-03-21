<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$text_blocks = get_field('text_blocks');
	$image = get_field('image');

	if( empty($text_blocks) && empty($image) ) return false;
?>
<section class="text-image2">
	<div class="wrapper">
		<div class="text-image2__inner">
			<div class="text-image2__content">
			<?php if( !empty($title) ) { ?>
				<h2 class="text-image2__title"><?php echo $title; ?></h2>
			<?php } ?>
			<?php if( !empty($text_blocks) ) { ?>
				<?php foreach ($text_blocks as $item) { ?>
					<div class="text-image2__block">
						<?php echo $item['text']; ?>
					</div>
				<?php } ?>
			<?php } ?>
			</div>
			<?php if( !empty($image) ) { ?>
				<div class="text-image2__image">
					<?php DisplayGlobal::renderAcfImage($image); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
