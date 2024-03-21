<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$description = get_field('description');
	$form = get_field('form_shortcode');

	if( empty($form) ) return false;
?>
<section class="archive-form" data-aos="fade-up">
	<div class="wrapper">
		<div class="archive-form__inner">
			<div class="archive-form__left">
				<?php if( !empty($title) ) { ?>
					<h2 class="archive-form__title"><?php echo $title; ?></h2>
				<?php } ?>
				<?php if( !empty($description) ) { ?>
					<div class="archive-form__description"><?php echo $description; ?></div>
				<?php } ?>
			</div>
			<div class="archive-form__right">
				<div class="archive-form__form">
					<?php echo do_shortcode($form); ?>
				</div>
			</div>
		</div>
	</div>
</section>
