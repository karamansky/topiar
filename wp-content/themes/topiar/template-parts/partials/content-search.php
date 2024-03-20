<a href="<?php the_permalink(); ?>" class="search-result__item">
	<div class="search-result__item-top">
		<div class="search-result__image">
			<img src="<?php echo $image_url ?>" alt="post image" loading="lazy" />
		</div>
		<div class="search-result__item-title"><?php the_title(); ?></div>
	</div>
	<div class="search-result__item-bottom">
		<div>
			<div class="search-result__item-title"><?php the_title(); ?></div>
			<?php if( !empty($excerpt) ) { ?>
				<div class="search-result__item-desc">
					<?php echo $excerpt; ?>
				</div>
			<?php } ?>
		</div>
		<div class="search-result__item-link">
			<?php _e('Детальніше', 'tp'); ?>
		</div>
	</div>
</a>


