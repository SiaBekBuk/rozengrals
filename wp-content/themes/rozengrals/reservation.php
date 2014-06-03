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
                <form id="reservation-form" name="reservation-form" method="post" action=""
                      enctype="multipart/form-data">
                    <span id="reserv-header">Резервация столика</span>

                    <div id="reservation-desc">
                        <strong>Д</strong>ля того чтобы заказать столик или банкет в ресторане, пожалуйста, заполните
                        эту форму.
                        <strong>Н</strong>аш оператор свяжется с Вами по указанному Вами телефону или e-mail для
                        подтверждения
                        заказа.
                    </div>
                    <?php
                    if (sizeof($woocommerce->cart->get_cart()) > 0) {
                        ?>
                        <h2>Ваш заказ</h2>

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

                    <fieldset id="fsReservation">
                        <div id="cftbx1" class="cftbx">
                            <input type="text" id="datetime" name="datetime" placeholder="Дата и время…"
                                   data-date="12-02-2012" data-date-format="dd-mm-yyyy hh:ii">
                            <input type="text" id="persons" name="persons" placeholder="Количество персон…">
                            <input type="text" id="firstname" name="firstname" placeholder="Имя...">
                            <input type="text" id="lastname" name="lastname" placeholder="Фамилия...">
                            <input type="text" id="phone" name="phone" placeholder="Контактный телефон...">
                            <input type="text" id="email" name="email" placeholder="E-Mail...">
                        </div>
                        <div id="cftbx2" class="cftbx">
                            <textarea rows="6" cols="70" id="reserv-message" name="reserv-message"
                                      placeholder="Ваши пожелания и комментарии..."></textarea>
                        </div>
                        <button type="submit" class="btn" id="btnSubmit" name="btnSubmit">Отправить</button>
                        <div id="reserv-help">Резервация действительна только после получения подтверждения.</div>
                    </fieldset>

                </form>

            </div>


            <div class="clearfix"></div>


            <!--        ///////////////////////-->
        </div>
    </div>
<?php get_footer(); ?>