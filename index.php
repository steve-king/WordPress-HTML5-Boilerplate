<?php get_header();?>
		
<div class="main_col">
	
	<?php if(have_posts()) : while(have_posts()): the_post(); ?>
	<article>
    	<h1><?php the_title(); ?></h1>
    	<?php the_content(); ?>
	</article>
	<?php endwhile; endif; ?>
	
</div><!-- END .main_col -->

<?php get_sidebar();?>
<?php get_footer();?>    