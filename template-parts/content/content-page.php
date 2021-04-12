<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">

		<?php if ( ! is_front_page() ) : ?>
			<section class="page-top">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</section>
		<?php elseif ( has_post_thumbnail() ) : ?>
			<header class="entry-header alignwide">
				<?php twenty_twenty_one_post_thumbnail(); ?>
			</header><!-- .entry-header -->
		<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

	</div>
</article><!-- #post-<?php the_ID(); ?> -->
