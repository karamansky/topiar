<?php
	if( empty($args['form']) ) return false;
	$form = $args['form'];
?>
<section class="archive-form" data-aos="fade-up">
	<div class="wrapper">
		<div class="archive-form__inner">
			<div class="archive-form__left">
				<?php if( !empty($form['title']) ) { ?>
					<h2 class="archive-form__title"><?php echo $form['title']; ?></h2>
				<?php } ?>
				<?php if( !empty($form['description']) ) { ?>
					<div class="archive-form__description"><?php echo $form['description']; ?></div>
				<?php } ?>
			</div>
			<div class="archive-form__right">
				<div class="archive-form__form">
					<?php echo do_shortcode($form['shortcode']); ?>
				</div>
			</div>
		</div>
	</div>
</section>