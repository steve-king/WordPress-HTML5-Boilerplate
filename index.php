<?php get_header();?>
	
	<div id="main">
		
		<div class="main-col">
			<?php if(have_posts()) : while(have_posts()): the_post(); ?>
		    	
		    	<h1><?php the_title(); ?></h1>
		    	<?php the_content(); ?>
			
			<?php endwhile; endif; ?>
		</div>
		
		<?php get_sidebar();?>
		
	</div>
	
<?php get_footer();?>    