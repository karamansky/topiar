<?php namespace TOP\Url;

if( !defined( 'ABSPATH' ) ) exit;

class Url {

	public function __construct() {
		$this->initHooks();
	}

	public function initHooks() {
//		add_action( 'init', [ $this, 'customPostTypeUlrSlugRewrite' ] );
//		add_action( 'pre_get_posts', [ $this, 'addPostTypeToGetPostsRequest' ] );

		add_filter( 'post_type_link', [ $this, 'addCategoryToPermalinkStructure' ], 1, 2 );
	}


	function addCategoryToPermalinkStructure( $post_link, $post ){
		if ( is_object( $post ) && $post->post_type == 'uslugi-kompanii' ){
			$terms = wp_get_object_terms( $post->ID, 'catalog_category' );
			$categories_slugs = [];

			if( $terms && !is_wp_error($terms) ){
//				foreach ( $terms as $item ) {
//					if ( $item->parent != 0 ) {
//						$term_parent = get_term( $item->parent );
//						if ( ! empty( $term_parent ) && ! is_wp_error( $term_parent ) ) {
//							if ( ! in_array( $term_parent->slug, $categories_slugs ) ) {
//								$categories_slugs[] = $term_parent->slug;
//							}
//						}
//					}
//					if ( ! in_array( $item->slug, $categories_slugs ) ) {
//						$categories_slugs[] = $item->slug;
//					}
//				}
//				$categories_url = implode( '/', $categories_slugs );

				return str_replace( '%catalog_category%' , $terms[0]->slug , $post_link );
			}
		}
		return $post_link;
	}



//	function customPostTypeUlrSlugRewrite() {
//		global $wp_rewrite;
//
//		// в данном случае тип записи - catalog
//		$wp_rewrite->add_rewrite_tag( "%catalog%", '([^/]+)', "catalog=" );
//		$wp_rewrite->add_permastruct( 'catalog', '%catalog%' );
//	}
//
//	function addPostTypeToGetPostsRequest( $query ){
//
//		if( is_admin() || ! $query->is_main_query() )
//			return; // не основной запрос
//
//		// не запрос с name параметром (как у постоянной страницы)
//		if( ! isset($query->query['page']) || empty($query->query['name']) || count($query->query) != 2 )
//			return;
//
//		// добавляем type 'catalog'
//		$query->set( 'post_type', [ 'post', 'page', 'catalog' ] );
//	}

}

new Url();