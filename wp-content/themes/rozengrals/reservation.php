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
                <span>Резервация столика</span>
                <form id="reservation-form" name="reservation-form" method="post" action=""
                      enctype="multipart/form-data">
                    <fieldset id="fsReservation">
                        <div id="cftbx1" class="cftbx">
<!--                            <label for="datetime">Дата и время</label>-->
                            <input type="text" id="datetime" name="datetime" placeholder="Дата и время…"
                                   data-date="12-02-2012" data-date-format="dd-mm-yyyy hh:ii">
<!--                            <br/>-->
<!--                            <label for="persons">Количество персон</label>-->
                            <input type="text" id="persons" name="persons" placeholder="Количество персон…">
<!--                            <br/>-->
<!--                            <label for="firstname">Имя</label>-->
                            <input type="text" id="firstname" name="firstname" placeholder="Имя...">
<!--                            <br/>-->
<!--                            <label for="lastname">Фамилия</label>-->
                            <input type="text" id="lastname" name="lastname" placeholder="Фамилия...">
<!--                            <br/>-->
<!--                            <label for="phone">Контактный телефон</label>-->
                            <input type="text" id="phone" name="phone" placeholder="Контактный телефон...">
<!--                            <br/>-->
<!--                            <label for="email">E-Mail</label>-->
                            <input type="text" id="email" name="email" placeholder="E-Mail...">
                        </div>
                        <!--                    <br/><br/>-->
                        <div id="cftbx2" class="cftbx">
<!--                            <label for="comments">Ваши пожелания и комментарии</label>-->
                            <textarea rows="6" cols="70" id="reserv-message" name="reserv-message"
                                      placeholder="Ваши пожелания и комментарии..."></textarea>
                            <!--                    <br/><br/>-->
                        </div>
                        <button type="submit" class="btn" id="btnSubmit" name="btnSubmit">Отправить</button>
                        <span>Резервация действительна только после получения подтверждения.</span>
                    </fieldset>

                </form>


                <!--                    <div id="cftbx1" class="cftbx">
                                        <input type="text" id="fullname" placeholder="Имя" tabindex="1" name="fullname" required/>
                                        <input type="text" id="phone" placeholder="Телефон" tabindex="2" name="phone" required/>
                                        <input type="text" id="email" placeholder="E-mail" tabindex="3" name="email" required/>
                                    </div>
                                    <div id="cftbx2" class="cftbx">
                                        <textarea id="message" tabindex="4" name="message" cols="60" rows="7" required></textarea>
                                    </div>
                                    <input type="submit" value="Отослать" tabindex="5" id="btnSubmit" name="btnSubmit"/>-->

            </div>


            <div class="clearfix"></div>


            <!--        ///////////////////////-->
        </div>
    </div>
<?php get_footer(); ?>