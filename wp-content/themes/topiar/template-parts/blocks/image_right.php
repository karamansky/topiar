<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$text = get_field('text');
	$image = get_field('image');

	if( empty($title) && empty($text) ) return false;
?>
<div class="image-right">
	<?php if( !empty($image) ) { ?>
		<div class="image-right__image">
			<?php DisplayGlobal::renderAcfImage( $image ); ?>
		</div>
	<?php } ?>
	<div class="wrapper">
		<div class="image-right__inner">
			<div class="image-right__content">
				<?php if( !empty($title) ) { ?>
					<h2 class="image-right__title"><?php echo $title ?></h2>
				<?php } ?>
				<hr>
				<?php if( !empty($text) ) { ?>
					<div class="image-right__text">
						<?php echo $text; ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
