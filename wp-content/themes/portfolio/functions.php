<?php
if (!defined("ABSPATH"))
	exit;

if (!defined("_VERSION")) {
	define("_VERSION", "1.0.0");
}

// Connect styles and scripts

add_action("wp_enqueue_scripts", "portfolio_scripts");
function portfolio_scripts()
{
	wp_enqueue_script(
		"main-script",
		get_template_directory_uri() . "/assets/js/app.min.js",
		array(),
		_VERSION,
		true
	);
	wp_enqueue_style(
		"main-style",
		get_stylesheet_uri(),
		array(),
		_VERSION
	);
}

// Add custom logo support
add_action('after_setup_theme', 'themename_custom_logo_setup');
function themename_custom_logo_setup()
{
	$defaults = array(
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	add_theme_support('custom-logo', $defaults);
}
// Add navigation menu support
add_theme_support("menus");
add_filter('nav_menu_link_attributes', "filter_nav_menu_link_attributes", 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
	if($args->menu->name === "Header menu") {
		$atts['class'] = 'menu__link';
	};
	return $atts;
}
