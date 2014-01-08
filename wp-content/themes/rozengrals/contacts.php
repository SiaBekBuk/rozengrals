<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>
<?php
if( $_SERVER['REQUEST_METHOD'] == "POST" ) {
    $to = "alexgloock@gmail.com";
    $from = $_POST['email'];
    $subject = "Сообщение из формы обратной связи";

    $message = $_POST['message']."\r\n\r\n Телефон:".$_POST['phone'];

    $headers = 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();

//    ini_set("SMTP","smtpout.europe.secureserver.net" );
//    ini_set("smtp_port ","80" );
//    ini_set('sendmail_from', 'me@domain.com');

    if( wp_mail($to, $subject, $message, $headers) ) {
        ?><script type="text/javascript">
            $(function(){
                jQuery('#contact-msg').html('<span>Сооббщение успешно отправлено!</span>');
            });
            //alert("Сообщение отправлено!");
        </script><?php
    } else {
        ?><script type="text/javascript">
            $(function(){
                jQuery('#contact-msg').html('<span>Сообщение не было отправлено, повторите попытку позже!</span>');
            });
            //alert("Сообщение не было отправлено!");
        </script><?php
    };
}
?>
    <div id="bg-mid">
        <div id="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>

            <div id="contact-desc">
                <h2>Добро пожаловать в <span class="gothic-latin">Rozengrāls</span>!</h2>
               <strong>Н</strong>аш ресторан располагается в самом центре Старой Риги в помещениях, которые уже в 1293 году упоминаются в манускриптах, как самый древний винный погреб и место проведення торжеств Рижской ратуши!
            </div>
<br/>
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
                            <iframe width="360" height="230" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="http://maps.google.com/maps/ms?vpsrc=6&amp;ctz=-120&amp;ie=UTF8&amp;msa=0&amp;msid=212996677177251629188.0004b2a377acd438c38c8&amp;t=m&amp;ll=56.94886,24.106343&amp;spn=0.005851,0.008562&amp;z=16&amp;output=embed"></iframe>
                            <div id="googlemap-link"><a
                                    href="https://maps.google.com/maps/ms?vpsrc=6&ctz=-120&ie=UTF8&msa=0&msid=212996677177251629188.0004b2a377acd438c38c8&t=m&ll=56.94886,24.106343&spn=0.005851,0.008562&z=16&output=embed"
                                    target="_blank">Просмотреть увеличенную карту</a></div>
                        </div>
                    </td>
                </tr>
            </table>

            <div id="div-contactform">
                <span id="contactform-header">Задайте нам вопрос</span>
                <div id="contact-desc">
                    При помощи этой формы Вы можете задать нам любой интересующий Вас вопрос!
                </div>
                <div id="contact-msg"></div>

                <form id="contactform" name="contactform" method="post"
                      action=""
                      class="contactform"
                      enctype="multipart/form-data">
                    <div id="cftbx1" class="cftbx">
                        <input type="text" id="fullname" placeholder="Имя" tabindex="1" name="fullname" required/>
                        <input type="text" id="phone" placeholder="Телефон" tabindex="2" name="phone" required/>
                        <input type="text" id="email" placeholder="E-mail" tabindex="3" name="email" required/>
                    </div>
                    <div id="cftbx2" class="cftbx">
                        <textarea id="message" tabindex="4" name="message" cols="60" rows="7" required></textarea>
                    </div>
                    <input type="submit" value="Отослать" tabindex="5" id="btn-contactform-submit" name="btnSubmit"/>
                </form>

            </div>

        </div>
    </div>
<?php get_footer(); ?>