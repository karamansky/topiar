<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$numbers = get_field('numbers');

	if( empty($numbers) ) return false;
?>
<section class="numbers" data-aos="fade-up">
	<div class="wrapper">
		<div class="numbers__inner">
			<div class="numbers__items">
				<?php foreach ($numbers as $item) { ?>
					<div class="numbers__item">
						<?php if( !empty($item['title']) ) { ?>
							<h3 class="numbers__item-title"><?php echo $item['title'] ?></h3>
						<?php } ?>
						<?php if( !empty($item['subtitle']) ){ ?>
							<div class="numbers__item-subtitle"><?php echo $item['subtitle'] ?></div>
						<?php } ?>
						<?php if( !empty($item['number']) ) { ?>
							<div class="numbers__item-number">
								<?php echo $item['number'] ?>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
