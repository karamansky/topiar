<?php namespace TOP\Display;

if( !defined( 'ABSPATH' ) ) exit;

class GutenbergBlocks {

	public function __construct() {
		$this->initHooks();
	}

	public function initHooks() {
		add_filter( 'block_categories_all', [ $this, 'addBlocksCategory' ] );
		add_action( 'acf/init', [ $this, 'addBlocks' ] );
	}

	public function addBlocksCategory( $categories ) {
		$new_category = [
			'slug'  => 'top-blocks',
			'title' => 'TOP Blocks'
		];

		array_unshift( $categories, $new_category );

		return $categories;
	}

	public static function checkForPreview( $block ) {
		if( empty( $_POST['query']['preview'] ) ) return false;

		echo '<hr>'.$block['title'];
		/* Render screenshot if it's exist for example */

		if(
			!empty( $block['example']['attributes']['data']['image'] ) &&
			file_exists( get_template_directory().'/assets/img/modules/'.
				$block['example']['attributes']['data']['image'] )
		) {
			echo '<img src="'.get_template_directory_uri().'/assets/img/modules/'.
				$block['example']['attributes']['data']['image'].
				'" style="display: block; margin: 0 auto; width: 100%; object-fit: contain;">';
		}

		echo '<hr>';

		return true;
	}

	public function addBlocks() {
		if( !function_exists( 'acf_register_block_type' ) ) return;

		$blocks = $this->returnListOfBlocks();
		foreach( $blocks as $block ) {
			if( empty( $block['name'] ) ) continue;

			acf_register_block_type(
				[
					'name'            => $block['name'],
					'title'           => __( !empty( $block['title'] ) ? $block['title'] : $block['name'] ),
					'description'     => !empty( $block['description'] ) ? __( $block['description'] ) : '',
					'render_template' => 'template-parts/blocks/'.$block['name'].'.php',
					'category'        => !empty( $block['category'] ) ? $block['category'] : '',
					'icon'            => !empty( $block['icon'] ) ? $block['icon'] : [ 'background' => '#008237', 'src' => 'desktop' ],
					'keywords'        => !empty( $block['keywords'] ) ? $block['keywords'] : [],
					'example'         => !empty( $block['example'] ) ? $block['example'] : [],
				]
			);
		}
	}

	public function returnListOfBlocks() {
		return [
			[
				'name'        => 'home_hero',
				'title'       => 'Home Hero block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'admin-home' ],
				'keywords'    => [ 'hero', 'page', 'top', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'home-hero-block.png',
						]
					]
				]
			],
			[
				'name'        => 'image_right',
				'title'       => 'Image right block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'align-pull-right' ],
				'keywords'    => [ 'text', 'right', 'image', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'image-right-block.png',
						]
					]
				]
			],
			[
				'name'        => 'image_banner',
				'title'       => 'Image banner block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'format-image' ],
				'keywords'    => [ 'banner', 'image', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'image-banner-block.png',
						]
					]
				]
			],
			[
				'name'        => 'portfolio',
				'title'       => 'Portfolio block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'grid-view' ],
				'keywords'    => [ 'portfolio', 'image', 'портфоліо', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'portfolio-block.png',
						]
					]
				]
			],
			[
				'name'        => 'services',
				'title'       => 'Services block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'grid-view' ],
				'keywords'    => [ 'services', 'image', 'услуги', 'послуги', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'services-block.png',
						]
					]
				]
			],
			[
				'name'        => 'numbers',
				'title'       => 'Numbers block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'editor-insertmore' ],
				'keywords'    => [ 'numbers', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'numbers-block.png',
						]
					]
				]
			],
			[
				'name'        => 'clients',
				'title'       => 'Clients block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'align-pull-right' ],
				'keywords'    => [ 'clients', 'our clients', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'clients-block.png',
						]
					]
				]
			],
			[
				'name'        => 'scrolling_text',
				'title'       => 'Scrolling text block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'media-text' ],
				'keywords'    => [ 'text', 'scrolling', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'scrolling-text-block.png',
						]
					]
				]
			],
			[
				'name'        => 'catalog',
				'title'       => 'Catalog block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'table-col-after' ],
				'keywords'    => [ 'categories', 'uslugi', 'catalog', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'catalog-block.png',
						]
					]
				]
			],
			[
				'name'        => 'text-two-cols',
				'title'       => 'Text two columns block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'editor-table' ],
				'keywords'    => [ 'text', 'columns', 'content', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'text-two-cols-block.png',
						]
					]
				]
			],
		];
	}

}

new GutenbergBlocks();

class_alias( 'TOP\Display\GutenbergBlocks', 'GutenbergBlocks' );