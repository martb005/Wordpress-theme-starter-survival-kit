<?php get_header(); ?>

	<?php
		echo basename( __FILE__ );
		/*
		Template file used to render the Archive Index page for a Custom Taxonomy http://codex.wordpress.org/Taxonomies 
		*/
	 ?>
	
	<nav>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav>

	<section>
		<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post(); ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php the_time('l, j F Y') ?>	
				<?php the_content(); ?>
			<?php endwhile; ?>

			<?php else : ?><?php the_ID(); ?><?php _e('Not found'); ?>

		<?php endif; ?>
	</section>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>