<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$position_class = 'faq--left';
	$title = get_field('title');
	$faq_position = get_field('faq_position');
	$faq = get_field('faq');
	$background = get_field('background');

	if( !empty($faq_position) && $faq_position == 'right' ) {
		$position_class = 'faq--right';
	}

	if( empty($faq) ) return false;
?>
<section class="faq <?php echo $position_class; ?>" <?php echo DisplayGlobal::generateStyleWithBgImageOrNothing( $background ); ?> data-aos="fade-up">
	<div class="wrapper">
		<div class="faq__inner">
			<div class="faq__left">
				<?php if( !empty($title) ) { ?>
					<h2 class="faq__title"><?php echo $title ?></h2>
				<?php } ?>
				<div class="faq__items">
					<?php foreach ($faq as $item) { ?>
						<div class="faq__item">
							<div class="faq__item-header">
								<div>
									<?php if(!empty($item['number'])) { ?>
										<div class="faq__item-number"><?php echo $item['number'] ?></div>
									<?php } ?>
									<?php if(!empty($item['question'])) { ?>
										<div class="faq__item-question"><?php echo $item['question'] ?></div>
									<?php } ?>
								</div>
								<div class="faq__item-icon"></div>
							</div>
							<?php if( !empty($item['answer']) ) { ?>
								<div class="faq__item-footer">
									<?php echo $item['answer']; ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="faq__right">
				<div class="faq__image">
					<?php DisplayGlobal::renderAcfImage($background); ?>
				</div>
			</div>
		</div>
	</div>
</section>
