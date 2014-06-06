<?php
/*
Template Name: Reservation
*/
?>
<?php get_header(); ?>
    <div id="bg-mid">
        <div id="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>


            <div id="divReservationForm">

                    <span id="reserv-header"><?php echo __("Резервация столика","rozengral");?></span>

                    <div id="reservation-desc">
                        <?php echo __("Для того чтобы заказать столик или банкет в ресторане, пожалуйста, заполните эту форму. Наш оператор свяжется с Вами по указанному Вами телефону или e-mail для  подтверждения  заказа.","rozengral");?>
                    </div>
                    <?php
                    if (sizeof($woocommerce->cart->get_cart()) > 0) {
                        ?>
                        <h2><?php echo __("Ваш заказ","rozengral");?></h2>

                        <?php
                        $i = 0;
                        foreach ($woocommerce->cart->get_cart() as $cart_item_key => $values) {
                            $_product = $values['data'];
                            if ($_product->exists() && $values['quantity'] > 0) {
                                $i++;
                                ?>

                                <div class="cat-item clearfix" id="item<?php echo $_product->id; ?>">
                                    <div class="cat-item-number"><?php echo $i ?>.</div>
                                    <div class="cat-item-name" style="width: 360px">
                                        <?php echo $_product->get_title(); ?>
                                    </div>
                                    <div class="cat-item-cl">

                                    </div>
                                    <div class="cat-item-price">
                                        <?php
                                        $price = $_product->get_price();
                                        $price_eur = $price / 0.702804;
                                        echo number_format($price, 2, '.', ' ') . '/' . number_format($price_eur, 2, '.', ' ');

                                        ?> </div>
                                    <div class="">
                                        <?php
                                        echo sprintf('<input type="number" name="cart[%s][qty]" style="width:50px" value="%s" min="0" size="4" title="" class=""  />', $cart_item_key, esc_attr($values['quantity']));
                                        ?>
                                    </div>
                                    <div class="cat-item-price">
                                        <?php
                                        $row_price = $_product->get_price();
                                        $price = $row_price * $values['quantity'];
                                        $price_eur = $price / 0.702804;
                                        echo number_format($price, 2, '.', ' ') . '/' . number_format($price_eur, 2, '.', ' ');

                                        ?> </div>
                                    <div class="">
                                         <a type="submit" id="add_cart_<?php echo $product->id;?>"
                        href="<?php echo esc_url( $woocommerce->cart->get_remove_url( $cart_item_key ) )?>"
                       style="width: 27px;height: 27px;display: block;"   class="item-add-2 ">
                </a>

                                    </div>
                                    <div class="item-comment clearfix"></div>
                                </div>
                            <?php
                            }
                        }
                        ?>




                    <?php

                    }

                    ?>
                <?php echo do_shortcode( __('[contact-form-7 id="527" title="Резервация" html_id="reservation-form"]',"rozengral") ); ?>



                <div id="reserv-help"><?php echo __("Резервация действительна только после получения подтверждения.","rozengral");?></div>
            </div>


            <div class="clearfix"></div>


            <!--        ///////////////////////-->
        </div>
    </div>
<?php get_footer(); ?>