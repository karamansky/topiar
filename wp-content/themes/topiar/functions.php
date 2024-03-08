<?php

	require_once( get_stylesheet_directory().'/controllers/main.php' );




	add_filter( 'wp_nav_menu_objects', 'filter_wp_nav_menu_objects', 10, 2 );
	function filter_wp_nav_menu_objects( $items, $args ) {

		if( $args->menu->slug == 'catalog-menu' ) {

//			echo "<pre>";
//			print_r($items);
//			echo "</pre>";
//
//			foreach ( $items as $key => $item ) {
//				$title = $items[ $key ]->title;
//				$items[ $key ]->title = '<span>' . $title .'</span>';
//			}
		}




		return $items;
	}
