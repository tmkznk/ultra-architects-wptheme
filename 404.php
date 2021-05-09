<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">	
        	<section class="page-top">
            	<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>
        	</section>
			<div class="entry-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
			</div><!-- .entry-content -->
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

	<script>
    	document.getElementById("nav-container").classList.add("with-line");
	</script>
<?php
get_footer();


