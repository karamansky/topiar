<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$address = get_field('address');
	$phones = get_field('phones');
	$emails = get_field('emails');
	$is_soc_show = !empty(get_field('is_soc_show')) ? get_field('is_soc_show') : false;
	$social_buttons_block_title = get_field('social_buttons_block_title', 'option');
	$instagram = get_field('instagram', 'option');
	$facebook = get_field('facebook', 'option');
	$youtube = get_field('youtube', 'option');
	$linkedin = get_field('linkedin', 'option');
	$behance = get_field('behance', 'option');
	$pinterest = get_field('pinterest', 'option');
	$map = get_field('map');

	if( empty($title) && empty($address) && empty($phones) ) return false;
?>
<section class="contacts texture-bg" data-aos="fade-up">
	<div class="wrapper">
		<div class="contacts__inner">
			<div class="contacts__main">
				<?php if( !empty($title) ) { ?>
					<h2 class="contacts__title"><?php echo $title ?></h2>
				<?php } ?>
				<?php if( !empty($address) ) { ?>
					<div class="contacts__address"><?php echo $address ?></div>
				<?php } ?>
				<?php if( !empty($phones) ) { ?>
					<div class="contacts__phones">
						<?php foreach ($phones as $item) { ?>
							<a href="+<?php echo preg_replace("/[^0-9]/", "", $item['phone']); ?>" class="contact__phone"><?php echo $item['phone'] ?></a>
						<?php } ?>
					</div>
				<?php } ?>
				<?php if( !empty($emails) ) { ?>
					<div class="contacts__emails">
						<?php foreach ($emails as $item) { ?>
							<a href="mailto:<?php echo $item['email']; ?>" class="contact__email"><?php echo $item['email'] ?></a>
						<?php } ?>
					</div>
				<?php } ?>
				<?php if( !empty($is_soc_show) ) { ?>
					<div class="contacts__social">
						<?php if( !empty($social_buttons_block_title) ) { ?>
							<div class="contacts__social-title"><?php echo $social_buttons_block_title ?></div>
						<?php } ?>
						<div class="contacts__social-items">
							<?php if( !empty($instagram) ) { ?>
								<a href="<?php echo $instagram; ?>" class="contacts__social-item link-social link-instagram"></a>
							<?php } ?>
							<?php if( !empty($facebook) ) { ?>
								<a href="<?php echo $facebook; ?>" class="contacts__social-item link-social link-facebook"></a>
							<?php } ?>
							<?php if( !empty($youtube) ) { ?>
								<a href="<?php echo $youtube; ?>" class="contacts__social-item link-social link-youtube"></a>
							<?php } ?>
							<?php if( !empty($linkedin) ) { ?>
								<a href="<?php echo $linkedin; ?>" class="contacts__social-item link-social link-linkedin"></a>
							<?php } ?>
							<?php if( !empty($behance) ) { ?>
								<a href="<?php echo $behance; ?>" class="contacts__social-item link-social link-behance"></a>
							<?php } ?>
							<?php if( !empty($pinterest) ) { ?>
								<a href="<?php echo $pinterest; ?>" class="contacts__social-item link-social link-pinterest"></a>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>

			<?php if( !empty($map) ) { ?>
				<div class="contacts__map">
					<?php echo $map; ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
