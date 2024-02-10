<?php
	$viber = get_field('viber', 'option');
	$telegram = get_field('telegram', 'option');
	$whatsapp = get_field('whatsapp', 'option');
	$email = get_field('email', 'option');
?>
<div id="contact-popup" class="popup">
	<div class="popup__inner">
		<div class="popup__block">
			<a href="#" class="popup__close">
				<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
					<g filter="url(#filter0_d_80_8128)">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M23.6209 5.20777C23.741 5.08782 23.8363 4.9454 23.9013 4.78863C23.9664 4.63185 23.9999 4.46381 24 4.29407C24.0001 4.12434 23.9668 3.95625 23.9019 3.7994C23.8371 3.64255 23.742 3.50001 23.622 3.37992C23.5021 3.25982 23.3596 3.16453 23.2029 3.09948C23.0461 3.03443 22.8781 3.0009 22.7083 3.00079C22.5386 3.00069 22.3705 3.03402 22.2137 3.09887C22.0568 3.16373 21.9143 3.25885 21.7942 3.37879L13.9998 11.1733L6.20773 3.37879C5.9652 3.13626 5.63625 3 5.29326 3C4.95026 3 4.62132 3.13626 4.37879 3.37879C4.13625 3.62133 4 3.95028 4 4.29328C4 4.63628 4.13625 4.96523 4.37879 5.20777L12.1731 13L4.37879 20.7922C4.2587 20.9123 4.16344 21.0549 4.09844 21.2118C4.03345 21.3687 4 21.5369 4 21.7067C4 21.8766 4.03345 22.0447 4.09844 22.2016C4.16344 22.3585 4.2587 22.5011 4.37879 22.6212C4.62132 22.8637 4.95026 23 5.29326 23C5.46309 23 5.63126 22.9665 5.78817 22.9016C5.94507 22.8366 6.08764 22.7413 6.20773 22.6212L13.9998 14.8267L21.7942 22.6212C22.0367 22.8634 22.3656 22.9994 22.7083 22.9992C23.0511 22.999 23.3798 22.8626 23.622 22.6201C23.8642 22.3775 24.0002 22.0487 24 21.7059C23.9998 21.3631 23.8634 21.0345 23.6209 20.7922L15.8265 13L23.6209 5.20777Z" fill="#EF7D00"/>
					</g>
					<defs>
						<filter id="filter0_d_80_8128" x="0" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
							<feOffset dy="1"/>
							<feGaussianBlur stdDeviation="2"/>
							<feComposite in2="hardAlpha" operator="out"/>
							<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.4 0"/>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_80_8128"/>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_80_8128" result="shape"/>
						</filter>
					</defs>
				</svg>
			</a>
			<div class="popup__form">
				<?php echo do_shortcode('[contact-form-7 id="9a2920d" title="Contact popup form"]'); ?>
				<?php if( !empty($viber) || !empty($telegram) || !empty($whatsapp) || !empty($email) ) { ?>
					<div class="popup__messengers">
						<label><?php _e('Напишіть нам', 'tp'); ?></label>
						<div class="popup__messengers-items">
							<?php if( !empty($viber) ) { ?>
								<a href="<?php echo $viber ?>" class="popup__messenger viber"></a>
							<?php } ?>
							<?php if( !empty($telegram) ) { ?>
								<a href="<?php echo $telegram ?>" class="popup__messenger telegram"></a>
							<?php } ?>
							<?php if( !empty($whatsapp) ) { ?>
								<a href="<?php echo $whatsapp ?>" class="popup__messenger whatsapp"></a>
							<?php } ?>
							<?php if( !empty($email) ) { ?>
								<a href="mailto:<?php echo $email ?>" class="popup__messenger email"></a>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>