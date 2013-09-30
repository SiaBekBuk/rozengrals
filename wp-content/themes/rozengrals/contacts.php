<?php
/*
Template Name: Contacts
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

            <!--            <div id="googlemap">-->
            <!--                <iframe width="800" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?vpsrc=6&amp;ctz=-120&amp;ie=UTF8&amp;msa=0&amp;msid=212996677177251629188.0004b2a377acd438c38c8&amp;t=m&amp;ll=56.94886,24.106343&amp;spn=0.005851,0.008562&amp;z=16&amp;output=embed"></iframe>-->
            <!--            </div>-->

            <table style="width:800px; margin:0 auto;">
                <tr>
                    <td style="width:400px;">
                        <div id="contacts-info">
                            <p>Контактный телефон/факс: <b>+371 67224748</b>, <b>+371 67220356</b></p>

                            <p>E-Mail: <a href="mailto:info@rozengrals.lv"><b>info@rozengrals.lv</b></a></p>

                            <p>Адрес: <b>Rozena 1, Rīga, Latvija</b></p>
                        </div>
                    </td>
                    <td style="width:400px;">
                        <div id="googlemap">
                            <iframe width="330" height="230" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="http://maps.google.com/maps/ms?vpsrc=6&amp;ctz=-120&amp;ie=UTF8&amp;msa=0&amp;msid=212996677177251629188.0004b2a377acd438c38c8&amp;t=m&amp;ll=56.94886,24.106343&amp;spn=0.005851,0.008562&amp;z=16&amp;output=embed"></iframe>
                            <div id="googlemap-link"><a
                                    href="https://maps.google.com/maps/ms?vpsrc=6&ctz=-120&ie=UTF8&msa=0&msid=212996677177251629188.0004b2a377acd438c38c8&t=m&ll=56.94886,24.106343&spn=0.005851,0.008562&z=16&output=embed"
                                    target="_blank">Просмотреть увеличенную карту</a></div>
                        </div>
                    </td>
                </tr>
            </table>

            <div id="divContactForm">
                <span>Задайте нам вопрос</span>
                <form id="contactform" name="contactform" method="post"
                      action="http://pudeles.lv/%D0%BA%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D1%8B/" class="contactform"
                      enctype="multipart/form-data">
                    <div id="cftbx1" class="cftbx">
                        <input type="text" id="fullname" placeholder="Имя" tabindex="1" name="fullname" required/>
                        <input type="text" id="phone" placeholder="Телефон" tabindex="2" name="phone" required/>
                        <input type="text" id="email" placeholder="E-mail" tabindex="3" name="email" required/>
                    </div>
                    <div id="cftbx2" class="cftbx">
                        <textarea id="message" tabindex="4" name="message" cols="60" rows="7" required></textarea>
                    </div>
                    <input type="submit" value="Отослать" tabindex="5" id="btnSubmit" name="btnSubmit"/>
                </form>
            </div>

        </div>
    </div>
<?php get_footer(); ?>