<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$reviews = get_field('reviews');

	if( empty($reviews) ) return false;
?>
<section class="reviews">
	<div class="wrapper">
		<div class="reviews__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="reviews__title"><?php echo $title ?></h2>
			<?php } ?>
			<div class="reviews__items">
				<?php foreach ($reviews as $item) { ?>
					<div class="reviews__item">
						<div class="reviews__item-header">
							<div class="reviews__item-header-left">
								<div class="reviews__item-image">
									<?php if( !empty($item['photo']) ) { ?>
										<?php DisplayGlobal::renderAcfImage($item['photo']); ?>
									<?php } else { ?>
										<svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 95 95" fill="none">
											<path d="M66.5 38C66.5 43.0391 64.4982 47.8718 60.935 51.435C57.3718 54.9982 52.5391 57 47.5 57C42.4609 57 37.6282 54.9982 34.065 51.435C30.5018 47.8718 28.5 43.0391 28.5 38C28.5 32.9609 30.5018 28.1282 34.065 24.565C37.6282 21.0018 42.4609 19 47.5 19C52.5391 19 57.3718 21.0018 60.935 24.565C64.4982 28.1282 66.5 32.9609 66.5 38Z" fill="white"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M45.562 94.962C20.2279 93.9455 0 73.0835 0 47.5C0 21.2658 21.2658 0 47.5 0C73.7342 0 95 21.2658 95 47.5C95 73.7342 73.7342 95 47.5 95C47.2831 95.0014 47.0662 95.0014 46.8493 95C46.4194 95 45.9895 94.9858 45.562 94.962ZM17.0193 77.4725C16.6641 76.4526 16.5432 75.3658 16.6656 74.2928C16.7879 73.2198 17.1504 72.1881 17.726 71.2744C18.3016 70.3606 19.0757 69.5882 19.9907 69.0146C20.9057 68.4409 21.9381 68.0807 23.0114 67.9606C41.5269 65.911 53.5871 66.0963 72.0124 68.0034C73.0871 68.1153 74.1221 68.471 75.0385 69.0434C75.955 69.6157 76.7288 70.3897 77.3009 71.3063C77.873 72.2229 78.2285 73.258 78.3401 74.3327C78.4517 75.4075 78.3167 76.4935 77.9451 77.5081C85.8418 69.5184 90.2642 58.7336 90.25 47.5C90.25 23.8901 71.1099 4.75 47.5 4.75C23.8901 4.75 4.75 23.8901 4.75 47.5C4.75 59.1755 9.43113 69.7585 17.0193 77.4725Z" fill="white"/>
										</svg>
									<?php } ?>
								</div>
								<div class="reviews__item-info">
									<?php if(!empty($item['name'])) { ?>
										<h3 class="reviews__item-name"><?php echo $item['name']; ?></h3>
									<?php } ?>
									<?php if( !empty($item['rating']) ) { ?>
										<div class="reviews__item-rating">
											<?php for ($i = 1; $i <= (int)$item['rating']; $i++ ) { ?>
												<i class="icon star-icon"></i>
											<?php } ?>
										</div>
									<?php } ?>
								</div>
							</div>
							<?php if( !empty($item['date']) ) { ?>
								<div class="reviews__item-right">
									<div class="reviews__item-date"><?php echo $item['date']; ?></div>
								</div>
							<?php } ?>
						</div>
						<?php if( !empty($item['text']) ) { ?>
							<div class="reviews__text">
								<?php echo $item['text']; ?>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>