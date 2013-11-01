<?php get_header(); ?>
<div id="bg-mid">
    <div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				

			</div>
			

		</div>



	<?php endwhile; endif; ?>
        <div class="clearfix"></div>

    </div>

</div>
<?php get_footer(); ?>