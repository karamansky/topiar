<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$text_blocks = get_field('text_blocks');

	if( empty($text_blocks) ) return false;
?>
<section class="chess-text">
	<div class="wrapper">
		<div class="chess-text__inner">
			<div class="chess-text__blocks">
				<?php foreach ($text_blocks as $block) { ?>
					<div class="chess-text__block">
						<?php if( !empty($block['image']) ) { ?>
							<div class="chess-text__image">
								<?php DisplayGlobal::renderAcfImage($block['image']); ?>
							</div>
						<?php } ?>
						<?php if( !empty($block['text']) ) echo $block['text']; ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
