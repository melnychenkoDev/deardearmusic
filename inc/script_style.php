<?php
/**
 * Enqueue scripts and styles.
 */
function legrand_enqueue_assets()
{
	wp_enqueue_style('ep-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('ep-style', 'rtl', 'replace');

	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

	if (is_front_page()) {
		wp_enqueue_style('front-page', get_template_directory_uri() . '/assets/css/front-page.css', array(), _S_VERSION);
		wp_enqueue_script('front-page', get_template_directory_uri() . '/assets/js/front-page.js', array(), _S_VERSION, true);
	}

	if (is_page(15)) {
		wp_enqueue_style('pr-page', get_template_directory_uri() . '/assets/css/pr.css', array(), _S_VERSION);
		wp_enqueue_script('pr-page', get_template_directory_uri() . '/assets/js/pr.js', array(), _S_VERSION, true);
	}

	if (is_page(17)) {
		wp_enqueue_style('about-page', get_template_directory_uri() . '/assets/css/about.css', array(), _S_VERSION);
		wp_enqueue_script('about-page', get_template_directory_uri() . '/assets/js/about.js', array(), _S_VERSION, true);
	}

	if (is_page(19)) {
		wp_enqueue_style('contacts-page', get_template_directory_uri() . '/assets/css/contacts.css', array(), _S_VERSION);
		wp_enqueue_script('contacts-page', get_template_directory_uri() . '/assets/js/contacts.js', array(), _S_VERSION, true);
	}

	if (is_page(21)) {
		wp_enqueue_style('stand-with-ukraine-page', get_template_directory_uri() . '/assets/css/stand-with-ukraine.css', array(), _S_VERSION);
		wp_enqueue_script('stand-with-ukraine-page', get_template_directory_uri() . '/assets/js/stand-with-ukraine.js', array(), _S_VERSION, true);
	}

	if (is_page(23)) {
		wp_enqueue_style('send-demo-page', get_template_directory_uri() . '/assets/css/send-demo.css', array(), _S_VERSION);
		wp_enqueue_script('send-demo-page', get_template_directory_uri() . '/assets/js/send-demo.js', array(), _S_VERSION, true);
	}

	if (is_page(75)) {
		wp_enqueue_style('labels-page', get_template_directory_uri() . '/assets/css/labels.css', array(), _S_VERSION);
		wp_enqueue_script('labels-page', get_template_directory_uri() . '/assets/js/labels.js', array(), _S_VERSION, true);
	}

//	wp_localize_script('main', 'ajaxData', array(
//		'ajaxurl' => admin_url('admin-ajax.php'),
//	));

}

add_action('wp_enqueue_scripts', 'legrand_enqueue_assets');
