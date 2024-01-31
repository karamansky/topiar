<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$form_title = get_field('form_title');
	$form = get_field('form_shortcode');

	if( empty($form) ) return false;
?>
<section class="form-block">
	<div class="wrapper">
		<div class="form-block__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="form-block__title"><?php echo $title ?></h2>
			<?php } ?>
			<?php if( !empty($form) ) { ?>
				<div class="form-block__form">
					<?php if( !empty($form_title) ) { ?>
						<h3 class="form-block__form-title"><?php echo $form_title; ?></h3>
					<?php } ?>
					<?php echo do_shortcode( $form ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
