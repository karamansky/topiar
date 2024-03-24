<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$price_tables = get_field('price_tables');

	if( empty($price_tables) ) return false;
?>
<section class="t-price">
	<div class="wrapper">
		<div class="t-price__inner">
			<div class="t-price__items">
				<?php foreach ($price_tables as $table) {
					$active_class = '';
					if( !empty($table['is_active']) && $table['is_active'] ) {
						$active_class = 'tp-active';
					}
					?>
					<div class="t-price__item <?php echo $active_class; ?>">
						<?php if( !empty($table['name']) ) { ?>
							<div class="t-price__name">
								<span><?php echo $table['name']; ?></span>
								<i class="icon lock-icon"></i>
							</div>
						<?php } ?>
						<div class="t-price__center">
							<div class="t-price__center-inner">
								<?php if( !empty($table['top']) ) { ?>
									<div class="t-price__top"><?php echo $table['top'] ?></div>
								<?php } ?>
								<div class="t-price__prices">
									<?php if( !empty($table['main_price']) ) { ?>
										<div class="t-price__main-price">
											<?php if( !empty($table['currency']) ) { ?>
												<span><?php echo $table['currency'] ?></span>
											<?php } ?>
											<?php echo $table['main_price'] ?>
										</div>
									<?php } ?>
									<?php if( !empty($table['old_price']) ) { ?>
										<div class="t-price__old-price">
											<?php if( !empty($table['currency']) ) { ?>
												<span><?php echo $table['currency'] ?></span>
											<?php } ?>
											<?php echo $table['old_price'] ?>
										</div>
									<?php } ?>
								</div>
								<?php if( !empty($table['title']) ) { ?>
									<h2 class="t-price__title">
										<?php echo $table['title'] ?>
									</h2>
								<?php } ?>
								<?php if( !empty($table['description']) ) { ?>
									<div class="t-price__description">
										<?php echo $table['description'] ?>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="t-price__bottom">
							<?php if( !empty($table['services']['items']) ) { ?>
								<div class="t-price__services">
									<?php if( !empty($table['services']['title']) ) { ?>
										<h3 class="t-price__services-title"><?php echo $table['services']['title']; ?></h3>
									<?php } ?>
									<?php foreach ($table['services']['items'] as $item) { ?>
										<?php if( !empty($item['text']) ) { ?>
											<div class="t-price__services-item">
												<?php if( !empty($item['icon']) ) { ?>
													<?php if( $item['icon'] == 'ok' ) { ?>
														<i class="icon ok-icon"></i>
													<?php } else { ?>
														<i class="icon cross-icon"></i>
													<?php } ?>
												<?php } ?>
												<span><?php echo $item['text']; ?></span>
											</div>
										<?php } ?>
									<?php } ?>
								</div>
							<?php } ?>
							<?php if( !empty($table['bonuses']['items']) ) { ?>
								<div class="t-price__bonuses">
									<?php if( !empty($table['bonuses']['title']) ) { ?>
										<h3 class="t-price__bonuses-title"><?php echo $table['bonuses']['title']; ?></h3>
									<?php } ?>
									<?php foreach ($table['bonuses']['items'] as $item) { ?>
										<?php if( !empty($item['text']) ) { ?>
											<div class="t-price__bonuses-item">
												<?php if( !empty($item['icon']) ) { ?>
													<?php if( $item['icon'] == 'ok' ) { ?>
														<i class="icon ok-icon"></i>
													<?php } else { ?>
														<i class="icon cross-icon"></i>
													<?php } ?>
												<?php } ?>
												<span><?php echo $item['text']; ?></span>
											</div>
										<?php } ?>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
						<?php DisplayGlobal::renderAcfLink($table['button'], 't-price__button') ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
