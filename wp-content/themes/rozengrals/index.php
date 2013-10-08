<?php
/*
Template Name: Index
*/
?>
<?php get_header(); ?>

<div id="bg-mid">
    <div id="content">
        <div id="description">
            <span class="main-char">А</span>утентичный, средневековый, ресторан Rozengrāls
            распологается в центре Старой Риги в помещениях, которые уже в 1293 году упоминаются в манускриптах, как
            самый древний винный погреб и место проведення торжеств Рижской ратуши!
            В самом большом зале ресторана с 4-метровыми арками до сих пор находится единственный средневековый колодец
            Риги и фрагмент первой защитной стены, построенной в 1201 году!
            В 5 залах, в средневековой атмосфере мы сможем одновременно потчевать 150 гостей изысканными
            блюдами,приготовленными по старинным рецептам! Следите за жизнью ресторана и специальными предложениями.
            <div id="youtube_video">
                <a href="http://youtube.com/watch?v=eZdob8H6YHo" rel="lightbox-1">
                    <div id="youtube_img"></div>
                </a>
            </div>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

                <div class="entry">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
