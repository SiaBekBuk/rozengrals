<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	//if ( !is_admin() ) {
	//   wp_deregister_script('jquery');
	//   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	//   wp_enqueue_script('jquery');
	//}

    if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
    function my_jquery_enqueue() {
        wp_deregister_script('jquery');
        wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
        wp_enqueue_script('jquery');
    }
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_filter( $filter, 'wp_filter_kses' );
    add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    foreach ( array( 'pre_term_description' ) as $filter ) {
        remove_filter( $filter, 'wp_filter_kses' );
    }

    foreach ( array( 'term_description' ) as $filter ) {
        remove_filter( $filter, 'wp_kses_data' );
    }

add_filter('woocommerce_default_catalog_orderby', 'custom_default_catalog_orderby');

function custom_default_catalog_orderby() {
    return 'date'; // Can also use title and price
}

?>