<?php
// Добавляем свойи типы постов

function register_custom_post_types(){

	register_post_type('labels',
		array(
			'labels' => array(
				'name' => __('Лейблы'),
				'singular_name' => __('Лейбл'),
				'add_new' => 'Добавить лейбл',
				'add_new_item' => 'Добавить новый лейбл'
			),
			'public' => true,
//			'show_in_rest' => true,
			'supports' => array('title', 'thumbnail'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'catalog'),
//			'taxonomies' => array('products_cat', 'post_tag', 'postcards', 'country', 'sizes', 'year'),
			'menu_icon' => 'dashicons-screenoptions'
		)
	);

}

add_action( 'init', 'register_custom_post_types' );
