<?php
if (!defined("ABSPATH"))
	exit;

if (!defined("_VERSION")) {
	define("_VERSION", "1.0.0");
}

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
		get_template_directory_uri() . "/assets/css/style.min.css",
		array(),
		_VERSION
	);
}