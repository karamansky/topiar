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
	$breadcrumbs = DisplayBreadcrumbs::prepareSubtitleItemsForAutomaticBreadcrumbs();

	if( empty($title) && empty($image) ) return false;
?>
<section class="home-hero" <?php echo DisplayGlobal::generateStyleWithBgImageOrNothing( $background ); ?> >
	<div class="wrapper">
		<div class="home-hero__inner">
			<div class="home-hero__content">
				<div class="home-hero__top" data-aos="fade-up">
					<?php if( !empty($breadcrumbs) ) { ?>
						<ul class="breadcrumbs">
							<?php $i = 1; foreach ($breadcrumbs as $breadcrumb) { ?>
								<li class="breadcrumbs__item">
									<?php if( !empty($breadcrumb['url']) ) { ?>
										<a href="<?php echo $breadcrumb['url'] ?>"><?php echo $breadcrumb['title']; ?></a><?php if( $i < count($breadcrumbs) ) { ?>&nbsp;/&nbsp;<?php } ?>
									<?php } else { ?>
										<span><?php echo $breadcrumb['title']; ?></span><?php if( $i < count($breadcrumbs) ) { ?>&nbsp;/&nbsp;<?php } ?>
									<?php } ?>
								</li>
								<?php $i++; } ?>
						</ul>
					<?php } ?>
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
