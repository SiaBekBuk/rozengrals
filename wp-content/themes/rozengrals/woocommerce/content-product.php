<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop,$cart_count;

$product_in_cart;
foreach ( $cart_count as $cart_item_key => $values ) {
    if($values['product_id'] == $product->id){
        $product_in_cart = $values['quantity'];
    }
}
// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>

<div class="cat-item clearfix" id="item<?php echo $product->id;  ?>">
    <div class="cat-item-number"><?php echo $woocommerce_loop['loop'] ?>.</div>
    <div class="cat-item-name">
        <?php the_title();?>
    </div>
    <div class="cat-item-cl">

    </div>
    <div class="cat-item-price">
        <?php
            $price = $product->get_price();
            echo '€ '. number_format($price,2,'.',' ');

        ?> </div>
    <div class="item-add-to-basket">
        <!--<button type="submit"  id="add_cart_<?php /*echo $product->id; */?>"
              data-product_id="<?php /*echo $product->id; */?>"
                class="item-add-2 roz_add_to_cart  <?php /*if($product_in_cart) echo 'hide'; */?>">
        </button>-->

        <div class=" <?php if(!$product_in_cart) echo 'hide'; ?>" id ="basket_<?php echo $product->id;?>">
            <div class="item-added-count"><?php echo $product_in_cart; ?></div>
            <div class="item-count-control">
                <a href=""></a>
                <div data-product_id="<?php echo $product->id; ?>"
                        class="item-add roz_add_to_cart">+
                </div>
                <div class="item-remove" data-product_id="<?php echo $product->id; ?>">-</div>
            </div>
        </div>
    </div>
    <div class="item-comment clearfix">
        <?php echo $post->post_excerpt;?>
    </div>
</div>

