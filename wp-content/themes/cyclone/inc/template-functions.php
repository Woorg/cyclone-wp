<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package cyclone
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cyclone_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'cyclone_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cyclone_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'cyclone_pingback_header' );


// Change wp nav item classes

add_filter( 'nav_menu_css_class', 'cyclone_nav_menu_css_class', 10, 4 );
function cyclone_nav_menu_css_class( $classes, $item, $args, $depth ){
	if (in_array('current-menu-item', $classes) ){
    $classes[] = 'nav__item_active ';
  }

	$classes[] = 'nav__item';
	return $classes;

}


// Change wp nav link classes
add_filter( 'nav_menu_link_attributes', 'cyclone_filter_nav_menu_link_attributes', 10, 4 );
function cyclone_filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	// if ( $item->current ) {
		$atts['class'] .= 'nav__link';

	return $atts;
}



// Defer scripts
function defer_parsing_of_js($url) {
  if (is_admin()) return $url;
  if (false === strpos($url, '.js')) return $url;
  if (strpos($url, 'jquery.js')) return $url;
  if (strpos($url, 'initMap')) return str_replace(' src', 'async defer src', $url);

  return str_replace(' src', ' defer src', $url);

}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);


//add support for async and defer params
add_filter( 'script_loader_tag', function($tag, $handle){
    if ( wp_scripts()->get_data( $handle, 'defer' ) ) {
        $tag = str_replace( '></', ' defer></', $tag );
    }
    if ( wp_scripts()->get_data( $handle, 'async' ) ) {
        $tag = str_replace( '></', ' async></', $tag );
    }
    return $tag;
}, 10, 2 );



// Change gutenberg editor width
function custom_admin_css() {
  echo '<style type="text/css">
  .wp-block { max-width: 1920px; }
  </style>';
}
add_action('admin_head', 'custom_admin_css');


// ACF

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(
    array(
      'page_title'  => 'Настройки cyclone',
      'menu_title'  => 'Настройки cyclone',
      'menu_slug'   => 'theme-settings',
      'capability'  => 'edit_posts',
      'icon_url'    => 'dashicons-admin-settings',
      'redirect'    => false
    )
  );

}


// Contacts form 7

add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  return $content;
});


// Add custom text to console

function cyclone_footer_text() {
  echo '<p>Адаптивная верстка + натяжка на WordPress —  <a href="//igrlv.ru" target="_blank">igrlv.ru</a></p>';
}

add_filter('admin_footer_text', 'cyclone_footer_text');