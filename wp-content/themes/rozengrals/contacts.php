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



            <div id="div-contactform">
                <span id="contactform-header"><?php echo __("Задайте нам вопрос","rozengral");?></span>
                <div id="contact-desc"><?php echo __("При помощи этой формы Вы можете задать нам любой интересующий Вас вопрос!","rozengral");?>
                </div>

                <?php echo do_shortcode( __('[contact-form-7 id="490" title="Контакт" html_id="contactform"]',"rozengral") ); ?>

            </div>

        </div>
    </div>
<?php get_footer(); ?>