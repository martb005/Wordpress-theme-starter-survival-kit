<h4>Sidebar</h4>

<?php if(have_posts()) : ?>

	<ul>
		<?php while(have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php the_time('l, j F Y') ?>	
			<?php echo get_excerpt(100); // see functions.php for more settings ?></li>
		<?php endwhile; ?>
	</ul>

	<?php else : ?><?php the_ID(); ?><?php _e('Not found'); ?>

<?php endif; ?>