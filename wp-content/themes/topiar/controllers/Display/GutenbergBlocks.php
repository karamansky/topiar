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
					'enqueue_style'   => !empty( $block['enqueue_style'] ) ? $block['enqueue_style'] : [],
					'enqueue_script'  => !empty( $block['enqueue_script'] ) ? $block['enqueue_script'] : [],
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
				'name'        => 'portfolio_hero',
				'title'       => 'Portfolio Hero block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'admin-home' ],
				'keywords'    => [ 'hero', 'page', 'portfolio', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'portfolio-hero-block.png',
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
			[
				'name'        => 'team',
				'title'       => 'Team block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'images-alt' ],
				'keywords'    => [ 'team', 'komanda', 'our team', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'team-block.png',
						]
					]
				]
			],
			[
				'name'        => 'reviews',
				'title'       => 'Reviews block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'admin-page' ],
				'keywords'    => [ 'reviews', 'slider', 'clients', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'reviews-block.png',
						]
					]
				]
			],
			[
				'name'        => 'faq',
				'title'       => 'FAQ block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'editor-justify' ],
				'keywords'    => [ 'faq', 'question', 'accordion', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'faq-block.png',
						]
					]
				]
			],
			[
				'name'        => 'form',
				'title'       => 'Form block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'email' ],
				'keywords'    => [ 'form', 'contacts', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'form-block.png',
						]
					]
				]
			],
			[
				'name'        => 'dark_form',
				'title'       => 'Dark form block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'email' ],
				'keywords'    => [ 'form', 'contacts', 'dark', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'dark-form-block.png',
						]
					]
				]
			],
			[
				'name'        => 'bottom_form',
				'title'       => 'Bottom form block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'email' ],
				'keywords'    => [ 'form', 'contacts', 'dark', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'bottom-form-block.png',
						]
					]
				]
			],
			[
				'name'        => 'contacts',
				'title'       => 'Contacts block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'location-alt' ],
				'keywords'    => [ 'contacts', 'map', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'contacts-block.png',
						]
					]
				]
			],
			[
				'name'        => 'steps',
				'title'       => 'Steps block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'image-filter' ],
				'keywords'    => [ 'etapy', 'steps', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'steps-block.png',
						]
					]
				]
			],
			[
				'name'        => 'text_with_image',
				'title'       => 'Text with image block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'cover-image' ],
				'keywords'    => [ 'text', 'image', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'text-with-image-block.png',
						]
					]
				]
			],
			[
				'name'        => 'text_with_image2',
				'title'       => 'Text with image (type2) block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'cover-image' ],
				'keywords'    => [ 'text', 'image', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'text-with-image2-block.png',
						]
					]
				]
			],
			[
				'name'        => 'tasks',
				'title'       => 'Tasks block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'editor-ol' ],
				'keywords'    => [ 'tasks', 'zadachi', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'tasks-block.png',
						]
					]
				]
			],
			[
				'name'        => 'deadlines',
				'title'       => 'Deadlines block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'media-document' ],
				'keywords'    => [ 'deadlines', 'termin', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'deadlines-block.png',
						]
					]
				]
			],
			[
				'name'        => 'works',
				'title'       => 'Works block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'media-document' ],
				'keywords'    => [ 'works', 'services', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'works-block.png',
						]
					]
				]
			],
			[
				'name'        => 'gallery',
				'title'       => 'Gallery block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'images-alt' ],
				'keywords'    => [ 'gallery', 'portfolio', 'images', 'photo', 'block' ],
				'enqueue_script' => get_template_directory_uri() . '/assets/libs/fslightbox/fslightbox.js',
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'gallery-block.png',
						]
					]
				]
			],
			[
				'name'        => 'chess_text',
				'title'       => 'Chess text block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'media-document' ],
				'keywords'    => [ 'chess', 'text', 'images', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'chess-text-block.png',
						]
					]
				]
			],
			[
				'name'        => 'youtube',
				'title'       => 'Youtube block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'video-alt3' ],
				'keywords'    => [ 'youtube', 'video', 'block' ],
				'enqueue_script' => get_template_directory_uri() . '/assets/js/youtube.js',
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'youtube-block.png',
						]
					]
				]
			],
			[
				'name'        => 'blog_single',
				'title'       => 'Blog single block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'media-spreadsheet' ],
				'keywords'    => [ 'blog', 'single', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'blog-single-block.png',
						]
					]
				]
			],
			[
				'name'        => 'blog_posts',
				'title'       => 'Blog posts block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'media-spreadsheet' ],
				'keywords'    => [ 'blog', 'posts', 'more blogs', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'blog-posts-block.png',
						]
					]
				]
			],
			[
				'name'        => 'department_head',
				'title'       => 'Department head block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'excerpt-view' ],
				'keywords'    => [ 'head', 'department', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'department-head-block.png',
						]
					]
				]
			],
			[
				'name'        => 'before_after',
				'title'       => 'Before-After block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'image-flip-horizontal' ],
				'keywords'    => [ 'before', 'after', 'gallery', 'image', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'before-after-block.png',
						]
					]
				]
			],
			[
				'name'        => 'why_us',
				'title'       => 'Why Choose Us block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'editor-ul' ],
				'keywords'    => [ 'why', 'us', 'advantages', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'why-us-block.png',
						]
					]
				]
			],
			[
				'name'        => 'price',
				'title'       => 'Price block',
				'category'    => 'top-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#008237', 'src' => 'money-alt' ],
				'keywords'    => [ 'price', 'tarif', 'table', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'price-block.png',
						]
					]
				]
			],
		];
	}

}

new GutenbergBlocks();

class_alias( 'TOP\Display\GutenbergBlocks', 'GutenbergBlocks' );