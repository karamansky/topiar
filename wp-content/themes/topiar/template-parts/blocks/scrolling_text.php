<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$text = get_field('text_content');

	if( empty($text) ) return false;

	$args = [ 'text' => $text ];
	get_template_part('template-parts/partials/scrolling-text', null, $args);
?>
