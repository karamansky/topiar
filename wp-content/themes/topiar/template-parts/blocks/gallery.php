<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$images = get_field('images');

	if( empty($images) ) return false;
?>
<section class="gallery">
	<div class="wrapper">
		<div class="gallery__inner">
			<?php if( !empty($title) ) { ?>
				<div class="gallery__top">
					<h2 class="gallery__title"><?php echo $title; ?></h2>
				</div>
			<?php } ?>
			<?php
				$first_image = array_pop($images);
				try {
					$rand = random_int(1, 999999);
				} catch (Exception $e) {
					$rand = time();
				}
			?>
			<div class="gallery__images">
				<?php if( !empty($first_image) ) { ?>
					<a data-fslightbox="gallery-<?php echo $rand; ?>" href="<?php echo $first_image['image']['url'] ?>" class="gallery__main-image">
						<img src="<?php echo $first_image['image']['url'] ?>" alt="Gallery image" loading="lazy">
					</a>
				<?php } ?>
				<div class="gallery__slider">
					<?php foreach ( $images as $item ) { ?>
						<a data-fslightbox="gallery-<?php echo $rand; ?>" href="<?php echo $item['image']['url'] ?>" class="gallery__slider-item">
							<img src="<?php echo $item['image']['url'] ?>" alt="Gallery image" loading="lazy">
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
