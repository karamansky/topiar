<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$text = get_field('text_content');

	if( empty($text) ) return false;
?>
<section class="scrolling-text">
	<div class="wrapper">
		<div class="scrolling-text__inner">
			<div class="scrolling-text__header">
				<svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12" fill="none">
					<path d="M1.92643 12L10.5 3.94694L19.0736 12L21 10.1397L10.5 4.5897e-07L-4.43219e-07 10.1397L1.92643 12Z" fill="#C4C4C4"/>
				</svg>
			</div>
			<div class="text-content scrolling-text__content" data-simplebar data-simplebar-auto-hide="false">
				<?php echo $text; ?>
			</div>
			<a href="#" class="scrolling-text__footer">
				<svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12" fill="none">
					<path d="M19.0736 -2.29724e-08L10.5 8.05306L1.92643 -2.2745e-07L1.20914e-07 1.86032L10.5 12L21 1.86032L19.0736 -2.29724e-08Z" fill="#008237"/>
				</svg>
			</a>
		</div>
	</div>
</section>
