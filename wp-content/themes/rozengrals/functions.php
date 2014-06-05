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




//---------------------------------- AJAX CART ---------------------------------------------------

wp_enqueue_script( 'my-ajax-handle', get_template_directory_uri(). '/js/ajax_shop.js', array( 'jquery' ) );
wp_localize_script( 'my-ajax-handle', 'ajaxobj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );


add_action( 'wp_ajax_roz_add_cart', 'roz_add_cart' );
add_action( 'wp_ajax_nopriv_roz_add_cart', 'roz_add_cart' ); // need this to serve non logged in users


function roz_add_cart() {
    global $woocommerce;
    $id =  $_POST["id"];

    $woocommerce->cart->add_to_cart( $id, 1 );
    $cart_id = $woocommerce->cart->generate_cart_id( $id );
    $cart_item_key = $woocommerce->cart->find_product_in_cart( $cart_id );
    $quantity = $woocommerce->cart->cart_contents[$cart_item_key]['quantity'];
    $res = array (
        "item_count"=>$quantity,
         "id"=>$id,
     );
    header('Content-type: text/json');
    echo json_encode(rozGetCart($res));


    die(); // this is required to return a proper result
}


function rozGetCart($data){
    global $woocommerce;
    $price_total =$woocommerce->cart->cart_contents_total ;
    $price_total_eur = $price_total/0.702804;
    $res = array (
        "count"=>$woocommerce->cart->cart_contents_count,
        "total"=>number_format($price_total,2,'.',' '),
        "total_eur"=>number_format($price_total_eur,2,'.',' '),
    );
    return array_merge($data,$res);
}

function roz_remove_from_cart() {
    global $woocommerce;

    $id =  $_POST["id"];

    $cart_id = $woocommerce->cart->generate_cart_id( $id );
    $cart_item_key = $woocommerce->cart->find_product_in_cart( $cart_id );
    $quantity = $woocommerce->cart->cart_contents[$cart_item_key]['quantity'];
    if($quantity>0) {$quantity= $quantity-1;}
    $woocommerce->cart->set_quantity( $cart_item_key, $quantity );

    $res = array (
        "item_count"=>$woocommerce->cart->cart_contents[$cart_item_key]['quantity'],
        "id"=>$id,
    );
    header('Content-type: text/json');
    echo json_encode(rozGetCart($res));

    die(); // this is required to return a proper result
}

add_action( 'wp_ajax_roz_remove_from_cart', 'roz_remove_from_cart' );
add_action( 'wp_ajax_nopriv_roz_remove_from_cart', 'roz_remove_from_cart' ); // need this to serve non logged in users





?>