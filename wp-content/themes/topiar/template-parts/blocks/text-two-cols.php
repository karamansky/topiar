<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title_type = !empty(get_field('title_type')) ? get_field('title_type') : 'text';
	$title_image = get_field('title_image');
	$title = get_field('title');
	$left_column_text = get_field('left_column_text');
	$right_column_text = get_field('right_column_text');

	if( empty($left_column_text) && empty($right_column_text) ) return false;
?>
<section class="text-two-cols">
	<div class="wrapper">
		<div class="text-two-cols__inner">
			<?php if( !empty($title) && $title_type == 'text' ) { ?>
				<h2 class="text-two-cols__title"><?php echo $title; ?></h2>
			<?php } ?>
			<?php if( !empty($title_image) && $title_type == 'image' ) { ?>
				<div class="text-two-cols__title-image"><?php DisplayGlobal::renderAcfImage( $title_image ) ?></div>
			<?php } ?>

			<div class="text-two-cols__items">
				<?php if( !empty($left_column_text) ) { ?>
					<div class="text-two-cols__item text-two-cols__left"><?php echo $left_column_text ?></div>
				<?php } ?>
				<?php if( !empty($right_column_text) ) { ?>
					<div class="text-two-cols__item text-two-cols__right"><?php echo $right_column_text ?></div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
