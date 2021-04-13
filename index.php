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
<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : ?>
		<?php  $query->the_post(); ?>
		<div class="container-fluid wide px-md-0">
			<div class="featured-news" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid d-md-none mb-3']); ?>
				<div class="container-container">
					<div class="container px-0 px-md-3">
						<div class="row">
							<a href="<?php echo esc_url( get_permalink()); ?>" class="col-md-6 offset-md-6">
								<div class="bg-white">
									<h3>rok <?php the_time( 'Y' ); ?></h3>
									<h1 class="mb-4 mb-md-0"><?php the_title(); ?></h1>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<!-- main loop -->
<?php if ( have_posts() ) : ?>
    <div class="container">
        <div id="news">
            <div class="row masonry-layout">
				<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content/content-excerpt' );
					}
				?>
			</div>
		</div>
		<?php 
			// Previous/next page navigation.
			// twenty_twenty_one_the_posts_navigation();
		?>
	</div>
<?php else: ?>
	<?php 
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content/content-none' );
	?>
<?php endif; ?>
<?php get_footer(); ?>
