<?php
	add_theme_support('post-thumbnails');
	add_image_size( 'thumb_610x500', 610, 500, true );
	add_image_size( 'thumb_355x250', 355, 250, true );

	/**
	* Path constants
	*/
	define('PATH_TEMPLATE', get_bloginfo('template_directory'));
	define('PATH_IMAGES', get_bloginfo('template_directory') . '/assets/images');
	define('PATH_URL', get_bloginfo('url'));
?>