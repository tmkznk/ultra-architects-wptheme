<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid px-0">
        <section class="pb-4">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid mb-3 w-100']); ?>
        </section>
    </div>


	<div class="container">
		<section>
			<h1 class="animate__animated">
                <span class="year d-md-none"><?php the_field('project-year'); ?></span>
                <?php echo get_the_title(); ?>
                <span class="year d-none d-md-inline-block"><?php the_field('project-year'); ?></span></h1>
            <p class="animate__animated">
                <strong>ARCHITEKCI:</strong> <?php the_field('project-architects'); ?><br/>
                <strong>WSPÓŁPRACA:</strong> <?php the_field('project-cooperation'); ?><br/>
                <strong>POWIERZCHNIA:</strong> <?php the_field('project-area'); ?>m²<br/>
                <strong>STATUS:</strong> <?php the_field('project-status'); ?>
                
            </p>
        </section>

		<section>
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
		</section>
	</div>

	<div class="container-fluid bg-black">
        <div class="container">
            <section class="page-top">
                <h2 class="heading-1 mb-0 animate__animated">Zobacz także</h2>
            </section>
            <section class="projects">
				<?php echo do_shortcode("[ajax_load_more post_type='post' category='projekt' posts_per_page='9' loading_style='infinite fading-circles' transition='masonry' masonry_selector='.grid-item' masonry_animation='none']"); ?>
			</section>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
