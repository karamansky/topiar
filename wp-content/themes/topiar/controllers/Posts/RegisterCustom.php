<?php namespace TOP\Posts;

if( !defined( 'ABSPATH' ) ) exit;

class RegisterCustom {

    public function __construct() {
        $this->initHooks();
    }

    public function initHooks() {
        add_action( 'init', [ $this, 'registerCustomPostTypes' ], 9 );
    }

    public function registerCustomPostTypes() {
        if( !function_exists( 'register_post_type' ) ) return;

		//register catalog type
		register_post_type( 'uslugi-kompanii', [
			"label"               => __( 'Послуги', 'tp' ),
			"labels"              => [
				"name"          	 => __( 'Послуги', 'tp' ),
				"singular_name" 	 => __( 'Послуга', 'tp' ),
				'add_new'            => __( 'Додати послугу', 'tp' ),
				'add_new_item'       => __( 'Додати послугу', 'tp' ),
				'edit_item'          => __( 'Редагувати послугу', 'tp' ),
				'new_item'           => __( 'Нова послуга', 'tp' ),
				'view_item'          => __( 'Переглянути послугу', 'tp' ),
				'search_items'       => __( 'Шукати послугу', 'tp' ),
				'not_found'          => __( 'Не знайдено', 'tp' ),
				'not_found_in_trash' => __( 'Не знайдено в корзині', 'tp' ),
			],
			"description"         => "",
			"public"              => true,
			"publicly_queryable"  => true,
			"show_ui"             => true,
			"has_archive"         => 'uslugi-kompanii',  //set archive url
			"show_in_menu"        => true,
			"show_in_rest"        => true, // To use Gutenberg editor.
			"show_in_nav_menus"   => true,
			"menu_icon"           => "dashicons-format-aside",
			"delete_with_user"    => false,
			"exclude_from_search" => false,
			"capability_type"     => "post",
			"hierarchical"        => true,
			"rewrite"             => [ 'slug' => 'uslugi-kompanii/%catalog_category%', 'with_front' => false ],
			"query_var"           => true,
			"supports"            => []
		] );


		//register portfolio type
		register_post_type( 'portfolio', [
			"label"               => __( 'Портфоліо', 'tp' ),
			"labels"              => [
				"name"          => __( 'Портфоліо', 'tp' ),
				"singular_name" => __( 'Портфоліо', 'tp' ),
			],
			"description"         => "",
			"public"              => true,
			"publicly_queryable"  => true,
			"show_ui"             => true,
			"has_archive"         => true,
			"show_in_menu"        => true,
			"show_in_rest"        => true, // To use Gutenberg editor.
			"show_in_nav_menus"   => true,
			"menu_icon"           => "dashicons-format-aside",
			"delete_with_user"    => false,
			"exclude_from_search" => false,
			"capability_type"     => "post",
			"hierarchical"        => true,
//			"rewrite"             => [ "slug" => 'portfolio' ],
			"query_var"           => true,
			"supports"            => []
		] );
    }
}

new RegisterCustom();