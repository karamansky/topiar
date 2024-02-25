<?php
	$breadcrumbs = DisplayBreadcrumbs::prepareSubtitleItemsForAutomaticBreadcrumbs();

	if( !empty($breadcrumbs) ) {
?>
	<ul class="breadcrumbs" data-aos="fade-up">
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
