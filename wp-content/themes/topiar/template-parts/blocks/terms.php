<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$terms = get_field('terms');

	if( empty($terms) ) return false;
?>
<section class="terms">
	<div class="wrapper">
		<div class="terms__inner">
			<div class="terms__slider">
				<?php foreach ($terms as $item) { ?>
					<div class="terms__item">
						<?php if( !empty($item['title']) ) { ?>
							<h2 class="terms__title"><?php echo $item['title']; ?></h2>
						<?php } ?>
						<?php if( !empty($item['list']) ) { ?>
							<div class="terms__list">
								<?php foreach ($item['list'] as $term) { ?>
									<div class="terms__list-item">
										<?php if( !empty($term['step']) ) { ?>
											<div class="terms__step">
												<?php echo $term['step']; ?>
											</div>
										<?php } ?>
										<?php if( !empty($term['title']) ) { ?>
											<div class="terms__list-title">
												<?php echo $term['title']; ?>
											</div>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
						<div class="terms__graph-wrap">
							<?php if( !empty($item['days_title']) ) { ?>
								<h3 class="terms__graph-title"><?php echo $item['days_title'] ?></h3>
							<?php } ?>
							<?php if( !empty($item['days']) ) { ?>
								<div class="terms__graph-days">
									<?php echo $item['days'] ?>
									<span><?php _e('Днів', 'tp'); ?></span>
								</div>
								<div class="terms__graph">
									<span><?php echo $item['days']; ?></span>
									<svg xmlns="http://www.w3.org/2000/svg" width="222" height="141" viewBox="0 0 222 141" fill="none">
										<g opacity="0.5">
											<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M205.999 3.49999L95.043 3.5L95.043 0.5L205.999 0.49999L205.999 3.49999Z" fill="url(#paint0_linear_32_15054)"/>
											<path opacity="0.5" d="M8.76953 125C11.4511 125 144.997 125 211.435 125" stroke="url(#paint1_linear_32_15054)" stroke-width="3"/>
											<path opacity="0.5" d="M30.6094 94.3756C32.9301 94.3756 148.504 94.3756 206.001 94.3756" stroke="url(#paint2_linear_32_15054)" stroke-width="3"/>
											<path opacity="0.5" d="M48.3672 63.5C50.4529 63.5 154.323 63.5 205.997 63.5" stroke="url(#paint3_linear_32_15054)" stroke-width="3"/>
											<path opacity="0.5" d="M65.3047 32.75C67.1663 32.75 159.877 32.75 206 32.75" stroke="url(#paint4_linear_32_15054)" stroke-width="3"/>
											<path d="M222.002 72.6019C213.418 72.6019 212.069 75.0192 182.925 72.6019C160.341 70.7287 159.133 64.5271 153.643 54.1216C144.189 36.2025 129.717 43.3414 122.466 79.2754C113.639 123.027 100.715 111.896 87.1163 99.0099C75.1956 87.7136 69.6023 123.483 62.3352 123.202C57.02 123.219 44.6437 115.723 37.6598 85.6047C28.9301 47.9573 8.89125 110.924 3.33594 144.076" stroke="url(#paint5_linear_32_15054)" stroke-width="5"/>
											<path d="M222.002 72.6019C213.418 72.6019 212.069 75.0192 182.925 72.6019C160.341 70.7287 159.133 64.5271 153.643 54.1216C144.189 36.2025 129.717 43.3414 122.466 79.2754C113.639 123.027 100.715 111.896 87.1163 99.0099C75.1956 87.7136 69.6023 123.483 62.3352 123.202C57.02 123.219 44.6437 115.723 37.6598 85.6047C28.9301 47.9573 8.89125 110.924 3.33594 144.076" stroke="url(#paint6_linear_32_15054)" stroke-width="5"/>
										</g>
										<defs>
											<linearGradient id="paint0_linear_32_15054" x1="94.3567" y1="0.5" x2="205.999" y2="0.499989" gradientUnits="userSpaceOnUse">
												<stop stop-color="white" stop-opacity="0"/>
												<stop offset="0.24085" stop-color="white"/>
												<stop offset="0.519924" stop-color="white"/>
												<stop offset="0.769309" stop-color="white" stop-opacity="0.922698"/>
												<stop offset="1" stop-color="white" stop-opacity="0"/>
											</linearGradient>
											<linearGradient id="paint1_linear_32_15054" x1="7.51605" y1="124" x2="211.435" y2="124" gradientUnits="userSpaceOnUse">
												<stop stop-color="white" stop-opacity="0"/>
												<stop offset="0.24085" stop-color="white"/>
												<stop offset="0.519924" stop-color="white"/>
												<stop offset="0.769309" stop-color="white" stop-opacity="0.922698"/>
												<stop offset="1" stop-color="white" stop-opacity="0"/>
											</linearGradient>
											<linearGradient id="paint2_linear_32_15054" x1="29.5246" y1="96" x2="206.001" y2="96" gradientUnits="userSpaceOnUse">
												<stop stop-color="white" stop-opacity="0"/>
												<stop offset="0.24085" stop-color="white"/>
												<stop offset="0.519924" stop-color="white"/>
												<stop offset="0.769309" stop-color="white" stop-opacity="0.922698"/>
												<stop offset="1" stop-color="white" stop-opacity="0"/>
											</linearGradient>
											<linearGradient id="paint3_linear_32_15054" x1="47.3923" y1="64" x2="205.997" y2="64" gradientUnits="userSpaceOnUse">
												<stop stop-color="white" stop-opacity="0"/>
												<stop offset="0.24085" stop-color="white"/>
												<stop offset="0.519924" stop-color="white"/>
												<stop offset="0.769309" stop-color="white" stop-opacity="0.922698"/>
												<stop offset="1" stop-color="white" stop-opacity="0"/>
											</linearGradient>
											<linearGradient id="paint4_linear_32_15054" x1="64.4345" y1="32" x2="206" y2="32" gradientUnits="userSpaceOnUse">
												<stop stop-color="white" stop-opacity="0"/>
												<stop offset="0.24085" stop-color="white"/>
												<stop offset="0.519924" stop-color="white"/>
												<stop offset="0.769309" stop-color="white" stop-opacity="0.922698"/>
												<stop offset="1" stop-color="white" stop-opacity="0"/>
											</linearGradient>
											<linearGradient id="paint5_linear_32_15054" x1="222.002" y1="123.204" x2="98.8347" y2="86.4933" gradientUnits="userSpaceOnUse">
												<stop offset="0.0001" stop-color="#FF9926"/>
												<stop offset="1" stop-color="#FF2323"/>
											</linearGradient>
											<linearGradient id="paint6_linear_32_15054" x1="222.002" y1="144.076" x2="14.4731" y2="140.682" gradientUnits="userSpaceOnUse">
												<stop offset="0.463044" stop-color="#101010" stop-opacity="0"/>
												<stop offset="0.769895" stop-color="#2F2D2B" stop-opacity="0.872347"/>
												<stop offset="1" stop-color="#101010"/>
											</linearGradient>
										</defs>
									</svg>
								</div>
							<?php } ?>
						</div>
						<?php if( !empty($item['button']) ) { ?>
							<a href="<?php echo $item['button']['url']; ?>" class="btn btn-small btn--orange-dark terms__button" target="<?php echo $item['button']['target']; ?>">
								<?php echo $item['button']['title']; ?>
								<i class="icon diagonal-arrow-icon"></i>
							</a>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
			<div class="terms__pagination"></div>
		</div>
	</div>
</section>
