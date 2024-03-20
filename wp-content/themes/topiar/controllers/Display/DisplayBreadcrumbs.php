<?php namespace TOP\Display;

if( !defined( 'ABSPATH' ) ) exit;

class DisplayBreadcrumbs {

	public static function prepareSubtitleItemsForAutomaticBreadcrumbs() {
		global $post;

		if( is_front_page() ) {
			return [];
		}

		//default first breadcrumb
		if( !is_front_page() ) {
			$subtitle_items[] = [
				'url'   => get_home_url(),
				'title' => __('Головна', 'tp')
			];
		}

		if (is_single()) {
			if( is_singular() ){
				$post_type = get_post_type_object(get_post_type());

				if( !empty($post_type) ) {
					$post_type_archive = get_post_type_archive_link($post_type->name);

					if( !empty($post_type_archive) && get_post_type() == 'post' ){
						$subtitle_items[] = [
							'url' => $post_type_archive,
							'title' => __('Блог', 'tp')
						];

						$terms = get_the_terms(get_the_ID(), 'category');

						foreach ( $terms as $item ) {
							if ( $item->parent == 0 ) {
								$subtitle_items[] = [
									'url' => get_term_link($item->term_id),
									'title' => $item->name
								];

								break;
							}
						}
					} else if( !empty($post_type_archive) ){
						$subtitle_items[] = [
							'url' => $post_type_archive,
							'title' => $post_type->labels->name
						];
					}

					if( get_post_type() == 'uslugi-kompanii' ) {
						$terms = get_the_terms(get_the_ID(), 'catalog_category');

						if ( class_exists('WPSEO_Primary_Term') ) {
							$wpseo_primary_term = new \WPSEO_Primary_Term( 'catalog_category', get_the_id() );
							$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
							$primary_term               = get_term( $wpseo_primary_term );

							if ( !is_wp_error($primary_term) ) {
								if ( $primary_term->parent != 0 ) {
									$term_parent = get_term( $primary_term->parent );

									$subtitle_items[] = [
										'url' => get_term_link($primary_term->parent),
										'title' => $term_parent->name
									];
								}

								$subtitle_items[] = [
									'url' => get_term_link($primary_term->term_id),
									'title' => $primary_term->name
								];
							} else {
								foreach ( $terms as $item ) {
									if ( $item->parent != 0 ) {
										$term_parent = get_term( $item->parent );
										$subtitle_items[] = [
											'url' => get_term_link($item->parent),
											'title' => $term_parent->name
										];
									}

									$subtitle_items[] = [
										'url' => get_term_link($item->term_id),
										'title' => $item->name
									];
								}
							}
						}
					}

					if( get_post_type() == 'portfolio' ) {
						$terms = get_the_terms(get_the_ID(), 'portfolio_category');
						$subtitle_items[] = [
							'url' => get_term_link($terms[0]->term_id),
							'title' => $terms[0]->name
						];
					}
				}

				$subtitle_items[] = [
					'url'   => '',
					'title' => get_the_title()
				];
			}else{
				$categories = get_the_category();
				$category = $categories[0];
				$cat_id = $category->cat_ID;

				if ($cat_id > 0) {
					$subtitle_items[] = [
						'url'   => get_category_link($cat_id),
						'title' => $category->cat_name
					];
				}

				$subtitle_items[] = [
					'url'   => '',
					'title' => get_the_title()
				];
			}
		} elseif ( is_page() ) {
			$ancestors = get_post_ancestors($post);

			if (!empty($ancestors)) {
				$ancestors = array_reverse($ancestors);

				foreach ($ancestors as $ancestor) {
					$subtitle_items[] = [
						'url'   => get_permalink($ancestor),
						'title' => get_the_title($ancestor)
					];
				}
			}

			$subtitle_items[] = [
				'url'   => '',
				'title' => get_the_title()
			];
		} elseif ( is_home() ) {  //blog
			$subtitle_items[] = [
				'url'   => '',
				'title' => __('Блог', 'tp')
			];
		} elseif ( is_category() ) {
			$category = get_category(get_query_var('cat'));
			$post_type_archive = get_post_type_archive_link('post');

			if( !empty($post_type_archive) ) {
				$subtitle_items[] = [
					'url' => $post_type_archive,
					'title' => __('Блог', 'tp')
				];
			}

			if ($category->parent != 0) {
				$parent_category = get_category($category->parent);
				$subtitle_items[] = [
					'url'   => get_category_link($parent_category->cat_ID),
					'title' => $parent_category->cat_name
				];
			}

			$subtitle_items[] = [
				'url'   => '',
				'title' => single_cat_title('', false)
			];
		} elseif ( is_tag() ) {
			$subtitle_items[] = [
				'url'   => '',
				'title' => single_tag_title('', false)
			];
		} elseif ( is_author() ) {
			$subtitle_items[] = [
				'url'   => '',
				'title' => get_the_author_meta('display_name', get_query_var('author'))
			];
		} elseif ( is_tax() ) {
			global $wp_query;
			$term = $wp_query->get_queried_object();

			if( !empty($term) ){
				$taxonomy = $term->taxonomy;

				if( !empty($taxonomy) ){
					$ancestors = get_ancestors( $term->term_id, $taxonomy, 'taxonomy' );

					if ( $taxonomy == 'catalog_category' ){
						$post_type = get_post_type( get_the_ID() );
						$post_type_link = get_post_type_archive_link($post_type);
						$post_type_name = get_post_type_object($post_type)->labels->name;

						$subtitle_items[] = [
							'url'   => $post_type_link,
							'title' => $post_type_name
						];
					}

					if ( !empty($ancestors) ) {
						$ancestors = array_reverse($ancestors);
						foreach ($ancestors as $ancestor) {
							$tmp_term = get_term($ancestor);
							$subtitle_items[] = [
								'url'   => get_term_link($ancestor),
								'title' => $tmp_term->name
							];
						}
					}

					if ( $taxonomy == 'portfolio_category' ){
						$post_type = get_post_type( get_the_ID() );
						$post_type_link = get_post_type_archive_link($post_type);
						$post_type_name = get_post_type_object($post_type)->labels->singular_name;

						$subtitle_items[] = [
							'url'   => $post_type_link,
							'title' => $post_type_name
						];
					}
				}

				$subtitle_items[] = [
					'url'   => '',
					'title' => $term->name
				];
			}
		} elseif ( is_archive() ) {
			if (is_day()) {
				$subtitle_items[] = [
					'url'   => '',
					'title' => get_the_date()
				];
			} elseif ( is_month() ) {
				$subtitle_items[] = [
					'url'   => '',
					'title' => get_the_date('F Y')
				];
			} elseif ( is_year() ) {
				$subtitle_items[] = [
					'url'   => '',
					'title' => get_the_date('Y')
				];
			} elseif ( is_category() ) {
				$subtitle_items[] = [
					'url'   => '',
					'title' => single_cat_title('', false)
				];
			} elseif ( is_tag() ) {
				$subtitle_items[] = [
					'url'   => '',
					'title' => single_tag_title('', false)
				];
			} elseif ( is_author() ) {
				$subtitle_items[] = [
					'url'   => '',
					'title' => get_the_author_meta('display_name', get_query_var('author'))
				];
			} else {
				$subtitle_items[] = [
					'url'   => '',
					'title' => post_type_archive_title('', false)
				];
			}
		} elseif ( is_search() ) {
			$subtitle_items[] = [
				'url'   => '',
				'title' => __('Пошук', 'tp')
			];
		} elseif ( is_404() ) {
			$subtitle_items[] = [
				'url'   => '',
				'title' => '404'
			];
		}

		return $subtitle_items;
	}

	public static function prepareSubtitleItemsFromRepeater( $repeater_items ) {
		if( empty( $repeater_items ) ) return null;

		foreach( $repeater_items as $repeater_item ) {
			if(
				empty( $repeater_item['link']['url'] ) ||
				empty( $repeater_item['link']['title'] )
			) continue;

			$subtitle_items[] = [
				'url'   => $repeater_item['link']['url'],
				'title' => $repeater_item['link']['title']
			];
		}

		return $subtitle_items;
	}

}

class_alias( 'TOP\Display\DisplayBreadcrumbs', 'DisplayBreadcrumbs' );