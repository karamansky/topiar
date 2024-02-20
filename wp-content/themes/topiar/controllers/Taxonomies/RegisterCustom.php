<?php namespace TOP\Taxonomies;

if( !defined( 'ABSPATH' ) ) exit;

class RegisterCustom {

    public function __construct() {
        $this->initHooks();
    }

    public function initHooks() {
        add_action( 'init', [ $this, 'registerCustomTaxonomies' ], 8 );
    }

    public function registerCustomTaxonomies() {
        if( !function_exists( 'register_taxonomy' ) ) return;

        //gerister catalog_category taxonomy
		register_taxonomy( 'catalog_category', [ 'uslugi-kompanii' ], [
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => [
				'name'              => __('Категорії каталогу'),
				'singular_name'     => __('Категорія'),
				'search_items'      => 'Search',
				'all_items'         => __('Всі категорії'),
				'view_item '        => 'View',
				'parent_item'       => 'Parent',
				'parent_item_colon' => 'Parent:',
				'edit_item'         => 'Edit',
				'update_item'       => 'Update',
				'add_new_item'      => 'Add New',
				'new_item_name'     => 'New Category Name',
				'menu_name'         => __('Категорії каталогу'),
				'back_to_items'     => __('← Назад до категорій каталогу'),
			],
			'description'           => '', // описание таксономии
			'public'                => true,
			// 'publicly_queryable'    => null, // равен аргументу public
			// 'show_in_nav_menus'     => true, // равен аргументу public
			// 'show_ui'               => true, // равен аргументу public
			// 'show_in_menu'          => true, // равен аргументу show_ui
			// 'show_tagcloud'         => true, // равен аргументу show_ui
			// 'show_in_quick_edit'    => null, // равен аргументу show_ui
			'hierarchical'          => true,
			'rewrite'               => [ 'slug' => 'uslugi-kompanii', 'with_front' => false ],
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => [],
			'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
			'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
			'show_in_rest'          => null, // добавить в REST API
			'rest_base'             => null, // $taxonomy
			// '_builtin'              => false,
			//'update_count_callback' => '_update_post_term_count',
		] );


        //gerister portfolio_category taxonomy
		register_taxonomy( 'portfolio_category', [ 'portfolio' ], [
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => [
				'name'              => __('Категорії портфоліо'),
				'singular_name'     => __('Категорія'),
				'search_items'      => 'Search',
				'all_items'         => __('Всі категорії'),
				'view_item '        => 'View',
				'parent_item'       => 'Parent',
				'parent_item_colon' => 'Parent:',
				'edit_item'         => 'Edit',
				'update_item'       => 'Update',
				'add_new_item'      => 'Add New',
				'new_item_name'     => 'New Category Name',
				'menu_name'         => __('Категорії портфоліо'),
				'back_to_items'     => __('← Назад до категорій портфоліо'),
			],
			'description'           => '', // описание таксономии
			'public'                => true,
			'hierarchical'          => false,
			//'rewrite'               => [ 'slug' => 'slug', 'hierarchical' => true ],
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => [],
			'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
			'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
			'show_in_rest'          => null, // добавить в REST API
			'rest_base'             => null, // $taxonomy
			// '_builtin'              => false,
			//'update_count_callback' => '_update_post_term_count',
		] );
    }
}

new RegisterCustom();