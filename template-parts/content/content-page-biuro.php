<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<section class="page-top"></section>
        <div class="entry-content">
            <section>
                <div class="row">
                    <div class="col-md-5 d-none d-md-block">
                        <?php if ( has_post_thumbnail() ) : ?>
			                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
		                <?php endif; ?>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>

            <?php if( have_rows('team') ): ?>
                <section>
                    <h2 class="heading-1 animate__animated">Zespół</h2>
                    <div class="row">
                        <?php while( have_rows('team') ): the_row(); ?>
                            <div class="col-6 col-md-3 mb-3 mb-md-4 pe-1 pe-md-3 team-member">
                                <img class="img-fluid mb-2 mb-md-3" src="<?php echo esc_url(get_sub_field('team-member-photo')['url']); ?>">
                                <p class="heading-3"><?php the_sub_field('team-member-name'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </section>
            <?php endif; ?>

        </div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
