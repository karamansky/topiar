<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$team = get_field('team');

	if( empty($team) ) return false;
?>
<section class="team">
	<div class="wrapper">
		<div class="team__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="team__title" data-aos="fade-up"><?php echo $title ?></h2>
			<?php } ?>
			<div class="team__items">
				<?php foreach ($team as $item) { ?>
					<div class="team__item" data-aos="fade-up">
						<?php if( !empty($item['photo']) ) { ?>
							<div class="team__item-image">
								<?php DisplayGlobal::renderAcfImage($item['photo']); ?>
							</div>
						<?php } ?>
						<div class="team__item-footer">
							<?php if(!empty($item['full_name'])) { ?>
								<h3 class="team__item-name"><?php echo $item['full_name']; ?></h3>
							<?php } ?>
							<?php if(!empty($item['position'])) { ?>
								<div class="team__item-position"><?php echo $item['position']; ?></div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
