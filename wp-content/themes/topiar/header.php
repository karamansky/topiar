<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<?php
		wp_head();
	?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
	$logo = get_field('header_logo', 'option');
	$phone = get_field('header_phone', 'option');
?>



<header class="header">
	<div class="wrapper">
		<div class="header__inner">
			<div class="header__left">
				<a href="#" class="header__hamburger"><i class="icon hamburger-icon"></i></a>
				<div class="header__logo">
					<?php if( !empty($logo) ) { ?>
						<a href="<?php echo home_url() ?>" class="header__logo-link">
							<img src="<?php echo $logo['url'] ?>" alt="gj logo" class="header__logo-img">
						</a>
					<?php } ?>
				</div>
				<nav class="header__menu">
					<?php
						wp_nav_menu(
							[
								'theme_location' => 'primary-menu',
								'menu_class'     => 'header-menu',
								'container'       => 'nav',
								'container_class' => 'header-menu__container',
							]
						);
					?>
				</nav>
			</div>
			<div class="header__right">
				<?php if( !empty($phone) ) { ?>
					<div class="header__phone">
						<a href="tel:+<?php echo preg_replace("/[^0-9]/", "", $phone) ?>"><?php echo $phone ?></a>
					</div>
				<?php } ?>
				<div class="header__lang">УКР</div>
				<div class="header__actions">
					<div class="header__search">
						<a href="#" class=""><i class="icon search-icon"></i></a>
						<form action="">
							<input type="text" name="s">
							<button type="submit">
								<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g id="search">
										<path id="Vector" d="M20.2173 20.2168L26.9999 26.9994" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path id="Vector_2" d="M11.7391 22.4783C17.6702 22.4783 22.4783 17.6702 22.4783 11.7391C22.4783 5.80807 17.6702 1 11.7391 1C5.80807 1 1 5.80807 1 11.7391C1 17.6702 5.80807 22.4783 11.7391 22.4783Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</g>
								</svg>
							</button>
						</form>
					</div>
					<div class="header__cart">
						<i class="icon cart-icon"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="header-mob-menu">
			<nav class="header__menu">
				<?php
					wp_nav_menu(
						[
							'theme_location' => 'primary-menu',
							'menu_class'     => 'header-menu',
							'container'       => 'nav',
							'container_class' => 'header-menu__container',
						]
					);
				?>
			</nav>
			<div class="header__phone">
				<a href="tel:+<?php echo preg_replace("/[^0-9]/", "", $phone) ?>"><?php echo $phone ?></a>
			</div>
		</div>
	</div>
</header>
