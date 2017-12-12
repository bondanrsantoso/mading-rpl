<?php
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	add_image_size('index-categories', 150, 150, true);
	add_image_size('page-single', 350, 350, true);
}
?>