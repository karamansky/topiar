<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$button1 = get_field('button1');
	$button2 = get_field('button2');
	$background = get_field('background');

	if( empty($title) && empty($image) ) return false;
?>
<section class="home-hero" <?php echo DisplayGlobal::generateStyleWithBgImageOrNothing( $background ); ?> >
	<div class="wrapper">
		<div class="home-hero__inner">
			<div class="home-hero__content">
				<div class="home-hero__top" data-aos="fade-up">

					<?php get_template_part('template-parts/partials/breadcrumbs'); ?>

					<?php if( !empty($title) ) { ?>
						<h1 class="home-hero__title"><?php echo $title ?></h1>
					<?php } ?>
				</div>
				<?php if( !empty($button1) || !empty($button2) ) { ?>
					<div class="home-hero__buttons" data-aos="fade-up" data-aos-delay="250">
						<?php DisplayGlobal::renderAcfLink( $button1, 'btn btn--white home-hero__btn' ) ?>
						<?php DisplayGlobal::renderAcfLink( $button2, 'btn btn--green home-hero__btn' ) ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
