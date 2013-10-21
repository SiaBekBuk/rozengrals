<?php

/*
Template Name: WP-Shop
*/


?>

<?php get_header(); ?>

<div id="bg-mid">
    <div id="content">
        <div id="edienkarte">
            <?php if (have_posts()) :

            woocommerce_content();

        endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>