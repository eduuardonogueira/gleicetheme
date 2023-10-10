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


/*  Site title
/* ------------------------------------ */
function mr_wp_title( $title ) {
    // Do not filter for RSS feed / if SEO plugin installed
    if ( is_feed() || class_exists('All_in_One_SEO_Pack') || class_exists('HeadSpace_Plugin') || class_exists('Platinum_SEO_Pack') || class_exists('wpSEO') || defined('WPSEO_VERSION') )
        return $title;
    if ( is_front_page() ) { 
        $title = get_bloginfo('name').' - '.get_bloginfo('description');
    }
    if ( is_front_page() && get_bloginfo('description') == '' ) { 
        $title = get_bloginfo('name');
    }
    if ( !is_front_page() ) { 
        $title .= ' - '.get_bloginfo('name');
    }
    return $title;
}
add_filter( 'wp_title', 'mr_wp_title' );

?>