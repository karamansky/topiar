<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$date = get_field('date');
	$readtime = get_field('readtime');
	$image = get_field('image');
	$content = get_field('content');

	if( empty($title) ) return false;
?>
<section class="blog-single">
	<div class="wrapper">
		<div class="blog-single__inner">

			<?php get_template_part('template-parts/partials/breadcrumbs'); ?>

			<div class="blog-single__main">
				<?php if( !empty($title) ) { ?>
					<h1 class="blog-single__title"><?php echo $title; ?></h1>
				<?php } ?>
				<div class="blog-single__info">
					<?php if( !empty($date) ) { ?>
						<div class="blog-single__date"><?php echo $date; ?></div>
					<?php } ?>
					<?php if( !empty($readtime) ) { ?>
						<div class="blog-single__readtime">
							<i class="icon clock-dark-icon"></i>
							<?php echo $readtime; ?>
						</div>
					<?php } ?>
				</div>
				<?php if( !empty($image) ) { ?>
					<div class="blog-single__image-wrap">
						<div class="blog-single__image">
							<?php DisplayGlobal::renderAcfImage($image); ?>
						</div>
					</div>
				<?php } ?>

				<?php if( !empty($content) ) { ?>
					<div class="blog-single__content-wrap">
						<div class="blog-single__list">
							<h3 class="blog-single__list-title"><?php _e('Зміст', 'tp'); ?></h3>
							<ul class="blog-single__list-items">
								<!-- list item will paste here by js -->
							</ul>
						</div>
						<div class="blog-single__content">
							<?php echo $content ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
