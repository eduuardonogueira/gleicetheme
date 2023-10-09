<?php
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */

function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// post thumbnail support
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
 
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'post-thumb', 630, 270 );
    add_image_size( 'home-thumb', 200, 270, true );
}


?>