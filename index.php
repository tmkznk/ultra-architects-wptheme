<?php get_header(); ?>

<?php
	$sticky = get_option( 'sticky_posts' );
	$args = array(
			'posts_per_page' => 1,
			'post__in' => $sticky,
			'ignore_sticky_posts' => 1
	);
	$query = new WP_Query( $args );
?>
<?php
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			get_template_part( 'template-parts/content/content-featured' );
		}
		wp_reset_postdata();
	} 
?>

<!-- main loop -->
<?php if ( have_posts() ) : ?>
    <div class="container">
        <div id="news">
            <?php 
				$sticky = get_option( 'sticky_posts' );
				$sticky = implode( ',', $sticky );
				echo do_shortcode('[ajax_load_more post_type="post" category="news" post__not_in="'.$sticky.'" posts_per_page="9" loading_style="infinite fading-circles" transition="masonry" masonry_selector=".grid-item" masonry_animation="none"]');
			?>
		</div>
		
	</div>
<?php else: ?>
	<?php 
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content/content-none' );
	?>
<?php endif; ?>
<?php get_footer(); ?>
