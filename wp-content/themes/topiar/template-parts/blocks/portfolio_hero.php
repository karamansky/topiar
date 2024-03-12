<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$type = get_field('type', get_the_ID());
	$image = get_field('image');
	$team_title = get_field('team_title');
	$team = get_field('team');
	$info = get_field('info');

	if( empty($title) && empty($image) ) return false;
?>
<section class="portfolio-hero">
	<div class="wrapper">
		<div class="portfolio-hero__inner">
			<div class="portfolio-hero__breadcrumbs">
				<?php echo get_template_part('template-parts/partials/breadcrumbs'); ?>
			</div>

			<div class="portfolio-hero__content">
				<?php if( !empty($type) || !empty($title) ) { ?>
					<div class="portfolio-hero__top">
						<?php if( !empty($type) ) { ?>
							<div class="portfolio-hero__type"><?php echo $type; ?></div>
						<?php } ?>
						<?php if( !empty($title) ) { ?>
							<h1 class="portfolio-hero__title"><?php echo $title; ?></h1>
						<?php } ?>
					</div>
				<?php } ?>
				<div class="portfolio-hero__bottom">
					<div class="portfolio-hero__left">
						<?php if( !empty($team) ) { ?>
							<div class="portfolio-hero__team">
								<?php if( !empty($team_title) ) { ?>
									<div class="portfolio-hero__team-title"><?php echo $team_title; ?></div>
								<?php } ?>
								<?php foreach ($team as $item) { ?>
									<div class="portfolio-hero__team-item">
										<?php if( !empty($item['is_boss']) && $item['is_boss'] ) { ?>
											<i class="icon boss-icon"></i>
										<?php } else { ?>
											<i class="icon team-icon"></i>
										<?php } ?>
										<span>
											<?php echo $item['title']; ?>
										</span>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
						<?php if( !empty($info) ) { ?>
							<div class="portfolio-hero__info">
								<?php foreach ($info as $item) { ?>
									<div class="portfolio-hero__info-item">
										<?php if( !empty($item['title']) ) { ?>
											<div class="portfolio-hero__info-title"><?php echo $item['title'] ?></div>
										<?php } ?>
										<?php if( !empty($item['description']) ) { ?>
											<div class="portfolio-hero__info-description">
												<?php echo $item['description']; ?>
											</div>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
					<?php if( !empty($image) ) { ?>
						<div class="portfolio-hero__image">
							<?php DisplayGlobal::renderAcfImage($image); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
