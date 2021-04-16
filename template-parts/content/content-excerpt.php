<div class="col-md-4">
	<a href="<?php echo esc_url( get_permalink()); ?>" id="post-<?php the_ID(); ?>" <?php post_class('news animate__animated'); ?>>
		<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid mb-3']); ?>
		<span class="date"><?php echo esc_html( get_the_date() ); ?></span>
		<h3><?php the_title(); ?></h3>
		<?php the_excerpt(); ?>
	</a>
</div>
