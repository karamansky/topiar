<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$steps = get_field('steps');

	if( empty($steps) ) return false;
?>
<section class="steps">
	<div class="wrapper">
		<div class="steps__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="section-title steps__title"><?php echo $title; ?></h2>
			<?php } ?>
			<div class="steps__items">
				<?php
					$bg_step = 100 / count($steps) / 100;
					$opacity = $bg_step;
					foreach ($steps as $step) { ?>
					<div class="steps__item">
						<?php if( !empty($step['number']) ) { ?>
							<div class="step__number" style="background-color: rgba(0, 130, 55, <?php echo $opacity; ?>); "><?php echo $step['number']; ?></div>
						<?php } ?>
						<?php if( !empty($step['description']) ) { ?>
							<div class="step__description"><?php echo $step['description']; ?></div>
						<?php } ?>
						<?php if( !empty($step['time']) ) { ?>
							<div class="step__time">
								<i class="icon clock-icon"></i>
								<?php echo $step['time']; ?>
							</div>
						<?php } ?>
					</div>
				<?php $opacity = $opacity + $bg_step; } ?>
			</div>
		</div>
	</div>
</section>
