<?php get_header(); ?>

<section class="error404">
	<div class="wrapper">
		<div class="error404__inner">
			<div class="error404__header">
				<h3 class="error404__title"><?php esc_html_e( 'На жаль, за вашим запитом нічого не знайдено, але ...', 'tp' ); ?></h3>
				<div class="error404__number">
					404
				</div>
				<h3 class="error404__title"><?php esc_html_e( '... Ви можете подивитись щось інше ', 'tp' ); ?></h3>
			</div>
			<div class="error404__buttons">
				<a href="/" class="btn btn--orange error404__button"><?php _e('Каталог', 'tp'); ?></a>
				<a href="/kontakty" class="btn btn--green error404__button"><?php _e('Звертайтесь', 'tp'); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
