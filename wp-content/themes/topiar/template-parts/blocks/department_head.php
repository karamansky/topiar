<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$person = get_field('person');
	$content = get_field('content');

	if( empty($person)  ) return false;
?>
<section class="d-head bg-texture">
	<div class="wrapper">
		<div class="d-head__inner">
			<div class="d-head__left">
				<?php if( !empty($person['image']) ) { ?>
					<div class="d-head__left-inner" >
						<div class="d-head__image-wrap" >
							<div class="d-head__image">
								<?php DisplayGlobal::renderAcfImage($person['image']); ?>
							</div>

							<div class="d-head__image-overlay">
								<?php if( !empty($person['title']) ) { ?>
									<h2 class="d-head__hover-title"><?php echo $person['title']; ?></h2>
								<?php } ?>
								<?php if( !empty($person['content']) ) { ?>
									<div class="d-head__hover-info">
										<div class="d-head__hover-text">
											<?php echo $person['content']; ?>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if( !empty($person['name']) ) { ?>
					<h3 class="d-head__name"><?php echo $person['name']; ?></h3>
				<?php } ?>
				<?php if( !empty($person['position']) ) { ?>
					<div class="d-head__position"><?php echo $person['position']; ?></div>
				<?php } ?>
			</div>
			<?php if( !empty($content['text']) ) { ?>
				<div class="d-head__content">
					<div class="d-head__content-inner">
						<div class="d-head__content-text-wrap">
							<div class="d-head__content-text">
								<?php echo $content['text']; ?>
							</div>
						</div>
						<a href="#" class="d-head__content-more" data-less="<?php _e('Згорнути', 'tp'); ?>"><?php _e('Читати більше', 'tp'); ?></a>
					</div>
					<?php if( !empty($content['image']) ) { ?>
						<div class="d-head__content-image">
							<?php DisplayGlobal::renderAcfImage($content['image']); ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
