<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$form = get_field('form_shortcode');

	if( empty($form) ) return false;
?>
<section class="bottom-form">
	<div class="bottom-form__wrap">
		<div class="wrapper">
			<div class="bottom-form__inner">
				<?php if( !empty($title) ) { ?>
					<h2 class="bottom-form__title"><?php echo $title ?></h2>
				<?php } ?>
				<?php if( !empty($form) ) { ?>
					<div class="bottom-form__form">
						<?php echo do_shortcode( $form ); ?>
					</div>
				<?php } ?>
				<a href="#" class="bottom-form__close">
					<svg xmlns="http://www.w3.org/2000/svg" width="31" height="29" viewBox="0 0 31 29" fill="none">
						<line x1="2.70711" y1="1.29289" x2="29.7071" y2="28.2929" stroke="white" stroke-width="2"/>
						<line x1="1.29289" y1="28.2929" x2="28.2929" y2="1.29289" stroke="white" stroke-width="2"/>
					</svg>
				</a>
			</div>
		</div>
	</div>
</section>
