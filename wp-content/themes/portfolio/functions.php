<?php
if (!defined("ABSPATH"))
	exit;

if (!defined("_VERSION")) {
	define("_VERSION", "1.0.0");
}

add_action("wp_enqueue_scripts", "portfolio_scripts");
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
add_action('after_setup_theme', 'themename_custom_logo_setup');
add_filter('get_custom_logo', 'change_logo_class');
function change_logo_class($html)
{
	$html = str_replace('custom-logo-link', 'logo', $html);

	return $html;
}


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