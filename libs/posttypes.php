<?php 

add_action('init', 'page_init_posttypes');

function page_init_posttypes() {

	$produkty_args = array (
		'labels' => array(
			'name' => 'Domy',
			'singular_name' => 'Domy',
			'all_items' => 'Wszystkie',
			'add_new' => 'Dodaj nowy',
			'add_new_item' => 'Dodaj Dom',
			'edit_item' => 'Edytuj Dom',
			'new_item' => 'Nowy Dom',
			'view_item' => 'Zobacz Dom',
			'search_items' => 'Szukaj w Domach',
			'not_found' =>  'Nie znaleziono żadnych Domów',
			'not_found_in_trash' => 'Nie znaleziono żadnych Domyów w koszu', 
			'parent_item_colon' => ''
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title', 'editor', 'thumbnail'
		),
		'has_archive' => true,
		'menu_icon' => 'dashicons-tag' 
	);

	register_post_type('oferta', $produkty_args);

}
add_action('init', 'page_init_taxonomies');

function page_init_taxonomies() {

	register_taxonomy(
		'typproduktu',
		array('oferta'
	),
		array(
			'hierarchical' => true,
			'labels' => array(
				'name' => 'Kraj oferty',
				'singular_name' => 'Kraj oferty',
				'search_items' =>  'Wyszukaj',
				'popular_items' => 'Najpopularniejsze ',
				'all_items' => 'Wszystkie',
				'most_used_items' => null,
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => 'Edytuj', 
				'update_item' => 'Aktualizuj',
				'add_new_item' => 'Dodaj nowy',
				'new_item_name' => 'Jaki Kraj?',
				'separate_items_with_commas' => 'Oddziel przecinkiem',
				'add_or_remove_items' => 'Dodaj lub usuń',
				'choose_from_most_used' => 'Wybierz najpopularniejszy',
				'menu_name' => 'Kraje produktów',
				'hide_empty' => false
			),
			'show_ui' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'hide_empty' => false,
			'rewrite' => array('slug' => 'produkty' )
		));
	}



?>