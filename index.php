<?php get_header();?>
		
<div class="main-col">
	<article>
	<?php if(have_posts()) : while(have_posts()): the_post(); ?>
    	
    	<h1><?php the_title(); ?></h1>
    	<?php the_content(); ?>
	
	<?php endwhile; endif; ?>
	</article>
</div>

<?php get_sidebar();?>
<?php get_footer();?>    