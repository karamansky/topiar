<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$text = get_field('text');
	$deadlines = get_field('deadlines');
	$image = get_field('image');
	$bottom_text = get_field('bottom_text');

	if( empty($deadlines) && empty($text) && empty($title) ) return false;
?>
<section class="deadlines">
	<div class="wrapper">
		<div class="deadlines__inner">
			<div class="deadlines__top">
				<?php if( !empty($title) ) { ?>
					<h2 class="deadlines__title"><?php echo $title ?></h2>
				<?php } ?>
				<?php if( !empty($text) ) { ?>
					<div class="deadlines__text"><?php echo $text ?></div>
				<?php } ?>
			</div>
			<div class="deadlines__center">
				<?php if( !empty($deadlines) ) { ?>
					<div class="deadlines__items">
						<?php foreach ($deadlines as $item) { if( !empty($item['text']) ) { ?>
							<div class="deadlines__item">
								<div class="deadlines__item-inner">
									<i class="icon ok-white-icon"></i>
									<span><?php echo $item['text']; ?></span>
								</div>
							</div>
						<?php }} ?>
					</div>
				<?php } ?>
				<?php if( !empty($image) ) { ?>
					<div class="deadlines__image">
						<?php DisplayGlobal::renderAcfImage($image); ?>
					</div>
				<?php } ?>
			</div>
			<?php if( !empty($bottom_text) ) { ?>
				<div class="deadlines__bottom">
					<div class="deadlines__bottom-text">
						<?php echo $bottom_text ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>