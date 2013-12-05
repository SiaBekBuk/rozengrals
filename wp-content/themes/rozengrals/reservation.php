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
                <span id="reserv-header">Резервация столика</span>
                <form id="reservation-form" name="reservation-form" method="post" action=""
                      enctype="multipart/form-data">
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