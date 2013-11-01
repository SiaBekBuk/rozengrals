<?php

/*
Template Name: WP-Shop
*/


?>

<?php get_header(); ?>

    <div id="bg-mid">
        <div id="content">
            <div id="edienkarte">
                <table>
                    <tr>
                        <td>
                            <div class="eur">LVL/EUR</div>
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