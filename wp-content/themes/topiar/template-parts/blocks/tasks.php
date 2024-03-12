<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$tasks = get_field('tasks');
	$image1 = get_field('image1');
	$image2 = get_field('image2');

	if( empty($tasks) ) return false;
?>
<section class="tasks">
	<div class="wrapper">
		<div class="tasks__inner">
			<div class="tasks__top">
				<?php if( !empty($title) ) { ?>
					<h2 class="tasks__title"><?php echo $title ?></h2>
				<?php } ?>
				<?php if( !empty($tasks) ) { ?>
					<div class="tasks__content">
						<?php $i = 1; foreach ($tasks as $item) { ?>
							<div class="tasks__item">
								<div class="tasks__item-number"><?php echo $i; ?></div>
								<div class="tasks__item-text">
									<?php if( !empty($item['title']) ) { ?>
										<h3 class="tasks__item-title"><?php echo $item['title']; ?></h3>
									<?php } ?>
									<?php if( !empty($item['description']) ) { ?>
										<div class="tasks__item-description">
											<?php echo $item['description']; ?>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php $i++; } ?>
					</div>
				<?php } ?>
			</div>
			<?php if( !empty($image1) || !empty($image2) ) { ?>
				<div class="tasks__images">
					<?php if( !empty($image1) ) { ?>
						<div class="tasks__image">
							<?php DisplayGlobal::renderAcfImage($image1); ?>
						</div>
					<?php } ?>
					<?php if( !empty($image2) ) { ?>
						<div class="tasks__image">
							<?php DisplayGlobal::renderAcfImage($image2); ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>