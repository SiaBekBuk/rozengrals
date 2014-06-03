<?php

/*
Template Name: WP-Shop
*/


?>

<?php get_header();

global $woocommerce;

$cart_count = $woocommerce->cart->get_cart();

?>

    <div id="bg-mid">
        <div id="content">
            <div id="edienkarte">
                <table>
                    <tr>
                        <td>

                            <div  class="menu-cat-content"  id ="pl-snacks-and-salads">
                                <?php
                                if (is_product_category()) {
                                    global $wp_query;
                                    $cat = $wp_query->get_queried_object();
                                    echo '<div class="menu-cat-header">' . $cat->description . '</div>';
                                }

                                if (have_posts()) : ?>



                                <div class="menu-items">
                                    <?php while (have_posts()) : the_post(); ?>

                                        <?php woocommerce_get_template_part('content', 'product'); ?>

                                    <?php endwhile; // end of the loop. ?>
                                </div>

                                <?php endif; ?>
                            </div>
                        </td>

                        <td style="vertical-align: top;">
                            <div id="cart" <?php if(!$woocommerce->cart->cart_contents_count>0){ echo 'style="visibility:hidden;"'; } ?> >
                                <div id="cart-header">Корзина</div>
                                <div id="cart-item-count">Количество покупок: <span><?php echo $woocommerce->cart->cart_contents_count;?></span></div>
                                <div id="cart-sum">Сумма: <span>
                                                <?php
                                                $price_total =$woocommerce->cart->cart_contents_total ;
                                                $price_total_eur = $price_total/0.702804;
                                                echo number_format($price_total,2,'.',' ').'Ls /'.number_format($price_total_eur,2,'.',' ').'Eur';

                                                ?>
                                        </span></div>
                                <div id="cart-to-reservation">
                                    <a href="<?php echo $woocommerce->cart->get_cart_url()."#nav";?>" id="cart-reserv-btnx" class="btnx">
                                        Перейти к резервации
                                    </a>
                                </div>
                            </div>

                            <?php
                            global $post;
                            $catTerms = get_terms('product_cat', array('hide_empty' => 0,)); ?>
                            <div id="menu-categories2" class="menu-categories">
                                <ul>
                                    <?php foreach ($catTerms as $catTerm) :
                                        get_term_link($catTerm->slug, 'product_cat');

                                        echo '<li '.($cat->slug==$catTerm->slug?'class="active"':'').'><a href="' . get_term_link($catTerm->slug, 'product_cat') . '#nav">' . $catTerm->name . '</a></li>';
                                    endforeach;
                                    ?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>


            </div>
        </div>
        <div class="clearfix"></div>
    </div>
<?php get_footer(); ?>