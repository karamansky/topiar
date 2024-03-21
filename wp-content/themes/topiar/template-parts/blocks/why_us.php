<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$advantages = get_field('advantages');
	$image = get_field('image');

	if( empty($advantages['left']) && empty($advantages['right']) ) return false;
?>
<section class="why-us">
	<div class="wrapper">
		<div class="why-us__inner">
			<div class="why-us__top">
				<?php if( !empty($title) ) { ?>
					<h2 class="why-us__title"><?php echo $title; ?></h2>
				<?php } ?>
				<div class="why-us__advantages">
					<?php if( !empty($advantages['left']) ) { ?>
						<div class="why-us__advantages-block why-us__advantages-left">
							<?php foreach ($advantages['left'] as $item) { ?>
								<div class="why-us__advantages__item">
									<?php echo $item['advantage'] ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
					<?php if( !empty($advantages['right']) ) { ?>
						<div class="why-us__advantages-block  why-us__advantages-right">
							<?php foreach ($advantages['right'] as $item) { ?>
								<div class="why-us__advantages__item">
									<?php echo $item['advantage'] ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="why-us__bottom">
				<div class="why-us__image">
					<?php DisplayGlobal::renderAcfImage($image); ?>
				</div>
			</div>
		</div>
	</div>
</section>
