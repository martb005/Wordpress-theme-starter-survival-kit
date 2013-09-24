<?php

// Add home link to menu
function mainMenu($args) {
	$args['show_home'] = true;
	return $args;
}
add_filter('wp_page_menu_args', 'mainMenu');

// Limit excerpt characters
function get_excerpt($count){
	$permalink = get_permalink($post->ID);
	$excerpt = get_the_content();
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $count);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = $excerpt.'... <a href="'.$permalink.'">Read more</a>';
	return $excerpt;
}

 ?>