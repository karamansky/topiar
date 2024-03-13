<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$video_preview = get_field('video_preview');
	$video_link = get_field('video_link');

	if( empty($video_link) ) return false;
?>
<div class="youtube-block">
	<div class="wrapper">
		<div class="youtube-block__inner">
			<div id="video-<?php echo time(); ?>" class="video" data-video="<?php echo $video_link ?>">
				<?php if( !empty($video_preview) ) { ?>
					<img src="<?php echo $video_preview['url']; ?>" alt="" class="custom_preview"/>
				<?php } ?>
				<a href="#" class="custom_play_button">
					<svg version="1.1" id="YouTube_Icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
						 y="0px" viewBox="0 0 1024 721" enable-background="new 0 0 1024 721" xml:space="preserve">
<path id="Triangle" fill="#FFFFFF" d="M407,493l276-143L407,206V493z"/>
						<path id="The_Sharpness" opacity="0.12" fill="#420000" d="M407,206l242,161.6l34-17.6L407,206z"/>
						<g id="Lozenge">
							<g>

								<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="512.5" y1="719.7" x2="512.5" y2="1.2" gradientTransform="matrix(1 0 0 -1 0 721)">
									<stop  offset="0" style="stop-color:#E52D27"/>
									<stop  offset="1" style="stop-color:#BF171D"/>
								</linearGradient>
								<path fill="url(#SVGID_1_)" d="M1013,156.3c0,0-10-70.4-40.6-101.4C933.6,14.2,890,14,870.1,11.6C727.1,1.3,512.7,1.3,512.7,1.3
			h-0.4c0,0-214.4,0-357.4,10.3C135,14,91.4,14.2,52.6,54.9C22,85.9,12,156.3,12,156.3S1.8,238.9,1.8,321.6v77.5
			C1.8,481.8,12,564.4,12,564.4s10,70.4,40.6,101.4c38.9,40.7,89.9,39.4,112.6,43.7c81.7,7.8,347.3,10.3,347.3,10.3
			s214.6-0.3,357.6-10.7c20-2.4,63.5-2.6,102.3-43.3c30.6-31,40.6-101.4,40.6-101.4s10.2-82.7,10.2-165.3v-77.5
			C1023.2,238.9,1013,156.3,1013,156.3z M407,493V206l276,144L407,493z"/>
							</g>
						</g>
</svg>
				</a>
			</div>
		</div>
	</div>
</div>





