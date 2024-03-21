<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('title');
	$posts = get_field('posts');

	if( empty($posts) ) return false;
?>
<section class="blog-posts">
	<div class="wrapper">
		<div class="blog-posts__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="blog-posts__title"><?php echo $title ?></h2>
			<?php } ?>
			<div class="blog-posts__items">
				<?php foreach ($posts as $item) {

					$title = get_the_title($item->ID);
					$excerpt = get_the_excerpt($item->ID);
					$date = get_the_date('d.m.Y', $item->ID); ?>
					<a href="<?php echo get_the_permalink($item->ID); ?>" class="blog-posts__item">
						<?php if( !empty(get_the_post_thumbnail_url($item->ID)) ) { ?>
							<div class="blog-posts__image">
								<img src="<?php echo get_the_post_thumbnail_url($item->ID); ?>" alt="post image" loading="lazy" />
							</div>
						<?php } ?>
						<div class="blog-posts__item-bottom">
							<div>
								<?php if( !empty($title) ) { ?>
									<h3 class="blog-posts__item-title"><?php echo $title; ?></h3>
								<?php } ?>
								<?php if( !empty($excerpt) ) { ?>
									<div class="blog-posts__item-description">
										<?php echo $excerpt; ?>
									</div>
								<?php } ?>
							</div>
							<?php if( !empty($date) ) { ?>
								<div class="blog-posts__item-date">
									<?php echo $date; ?>
								</div>
							<?php } ?>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
