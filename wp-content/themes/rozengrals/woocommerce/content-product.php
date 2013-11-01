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

global $product, $woocommerce_loop;

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

<div class="cat-item clearfix">
    <div class="cat-item-number"><?php echo $woocommerce_loop['loop'] ?>.</div>
    <div class="cat-item-name">
        <?php the_title();?>
    </div>
    <div class="cat-item-cl"></div>
    <div class="cat-item-price">
        <?php
            $price = $product->get_price();
            $price_eur = $price/0.702804;
            echo number_format($price,2,'.',' ').' / '.number_format($price_eur,2,'.',' ');

        ?> </div>
    <div class="item-add-to-basket">
        <div class="item-add">+</div>
        <div class="item-added-count">99</div>
        <div class="item-remove">-</div>
    </div>
</div>

