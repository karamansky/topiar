<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$text = get_field('text');
	$button = get_field('button');
	$clients = get_field('clients');

	if( empty($clients) ) return false;
?>
<section class="clients">
	<div class="wrapper">
		<div class="clients__inner">
			<div class="clients__left">
				<div class="clients__content">
					<?php if( !empty($title) ) { ?>
						<h2 class="section-title clients__title"><?php echo sanitize_text_field($title) ?></h2>
					<?php } ?>
					<?php if( !empty($text) ) { ?>
						<div class="clients__text">
							<?php echo $text ?>
						</div>
					<?php } ?>
				</div>
				<?php DisplayGlobal::renderAcfLink($button, 'btn btn--green clients__button'); ?>
			</div>
			<div class="clients__right">
				<div class="clients__items">
					<?php foreach ($clients as $item) { ?>
						<div class="clients__item">
							<?php if( !empty($item['image']) ) { DisplayGlobal::renderAcfImage($item['image']); } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
