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
function register_my_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'footer-menu' => __('Footer Menu')
		)
	);
}
add_action('init', 'register_my_menus');
function my_nav_menu_submenu_css_class($classes)
{
	$classes[] = 'header__submenu submenu';
	return $classes;
}
add_filter('nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class');
// Function to add custom class for submenu
function custom_add_submenu_class($classes)
{

	if (in_array('menu-item-has-children', $classes)) {
		$classes[] = 'menu__button';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'custom_add_submenu_class', 10, 1);

// Add custom class to menus
add_filter('nav_menu_link_attributes', "filter_nav_menu_link_attributes", 10, 1);
function filter_nav_menu_link_attributes($atts)
{
	$atts['class'] = 'menu__link';
	return $atts;
}
add_theme_support("widgets");
add_theme_support('widgets-block-editor');

// Add custom class to form wrapper
function custom_form_class_attr($class)
{
	$class .= ' form';
	return $class;
}
add_filter('wpcf7_form_class_attr', 'custom_form_class_attr');
