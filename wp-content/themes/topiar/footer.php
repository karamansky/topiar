<?php
	$footer_logo = get_field('footer_logo', 'option');
	$footer_city = get_field('city', 'option');
	$footer_address = get_field('address', 'option');
	$footer_phones = get_field('phones', 'option');
	$footer_button = get_field('footer_button', 'option');
	$social_buttons_block_title = get_field('social_buttons_block_title', 'option');

	$instagram = get_field('instagram', 'option');
	$facebook = get_field('facebook', 'option');
	$youtube = get_field('youtube', 'option');
	$linkedin = get_field('linkedin', 'option');
	$behance = get_field('behance', 'option');
	$pinterest = get_field('pinterest', 'option');
?>

<footer class="footer">
	<div class="wrapper">
		<div class="footer__inner">
			<?php if( !empty($footer_logo) ) { ?>
				<div class="footer__logo">
					<?php DisplayGlobal::renderAcfImage( $footer_logo ) ?>
				</div>
			<?php } ?>
			<div class="footer__content">
				<div class="footer__left">
					<?php
						wp_nav_menu(
							[
								'theme_location' => 'footer-menu',
								'menu_class'     => 'footer-menu',
								'container'       => 'nav',
								'container_class' => 'footer__menu',
							]
						);
					?>
					<?php if( !empty($footer_phones) || !empty($footer_city) || !empty($footer_address) ) { ?>
						<div class="footer__contacts">
							<ul>
								<?php if( !empty($footer_city) ) { ?>
									<li><?php echo $footer_city ?></li>
								<?php } ?>
								<?php if( !empty($footer_address) ) { ?>
									<li><?php echo $footer_address ?></li>
								<?php } ?>
								<?php
									if( !empty($footer_phones) ) {
										foreach ($footer_phones as $item) {
								?>
									<li><a href="tel:+<?php echo preg_replace("/[^0-9]/", "", $item['phone']) ?>"><?php echo $item['phone'] ?></a></li>
								<?php }} ?>
							</ul>
						</div>
					<?php } ?>
				</div>
				<div class="footer__right">
					<div class="footer__social">
						<?php if( !empty($social_buttons_block_title) ) { ?>
							<div class="footer__social-title"><?php echo $social_buttons_block_title ?></div>
						<?php } ?>
						<div class="footer__social-items">
							<?php if( !empty($instagram) ) { ?>
								<a href="<?php echo $instagram; ?>" class="footer__social-item link-social link-instagram"></a>
							<?php } ?>
							<?php if( !empty($facebook) ) { ?>
								<a href="<?php echo $facebook; ?>" class="footer__social-item link-social link-facebook"></a>
							<?php } ?>
							<?php if( !empty($youtube) ) { ?>
								<a href="<?php echo $youtube; ?>" class="footer__social-item link-social link-youtube"></a>
							<?php } ?>
							<?php if( !empty($linkedin) ) { ?>
								<a href="<?php echo $linkedin; ?>" class="footer__social-item link-social link-linkedin"></a>
							<?php } ?>
							<?php if( !empty($behance) ) { ?>
								<a href="<?php echo $behance; ?>" class="footer__social-item link-social link-behance"></a>
							<?php } ?>
							<?php if( !empty($pinterest) ) { ?>
								<a href="<?php echo $pinterest; ?>" class="footer__social-item link-social link-pinterest"></a>
							<?php } ?>
						</div>
					</div>
					<?php if( !empty($footer_button) ) { DisplayGlobal::renderAcfLink( $footer_button, 'btn btn--green footer__button' ); } ?>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="footer__copy">
	<div class="wrapper">
		<div class="footer__copy-inner">
			<div class="footer__copy-left">TOPIAR <?php echo '&copy; ' . date('Y'); ?></div>
			<div class="footer__copy-right">
				<?php
					wp_nav_menu(
						[
							'theme_location' => 'footer-bottom-menu',
							'menu_class'     => 'footer-bottom-menu',
							'container'       => 'nav',
							'container_class' => 'footer__copy-menu',
						]
					);
				?>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>