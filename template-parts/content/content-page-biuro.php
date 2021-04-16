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

            <?php if( have_rows('founders') ): ?>
                <section>
                    <h2 class="heading-1 animate__animated">Założyciele</h2>
                    <div class="row">
                        <?php while( have_rows('founders') ): the_row(); ?>
                            <div class="col-md-6 founder">
                                <img class="img-fluid mb-3 mb-md-0 animate__animated" src="<?php echo esc_url(get_sub_field('founder-photo')['url']); ?>">
                                <div class="bg-white animate__animated">
                                    <p class="heading-1"><?php the_sub_field('founder-name'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </section>
            <?php endif; ?>

            <?php if( have_rows('team') ): ?>
                <section>
                    <h2 class="heading-1 animate__animated">Zespół</h2>
                    <div class="row">
                        <?php while( have_rows('team') ): the_row(); ?>
                            <div class="col-6 col-md-3 mb-3 mb-md-4 pe-1 pe-md-3 team-member">
                                <img class="img-fluid mb-2 mb-md-3 animate__animated" src="<?php echo esc_url(get_sub_field('team-member-photo')['url']); ?>">
                                <p class="heading-3 animate__animated"><?php the_sub_field('team-member-name'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </section>
            <?php endif; ?>

            <?php if( have_rows('awards') ): ?>
                <section>
                    <h2 class="heading-1 animate__animated">Nagrody</h2>

                    <?php while( have_rows('awards') ): the_row(); ?>
                        <p class="animate__animated">
                            <strong><?php the_sub_field('award-title'); ?></strong><br/>
                            <?php the_sub_field('award-description'); ?>
                        </p>            
                    <?php endwhile; ?>
                </section>
            <?php endif; ?> 

            <?php if( have_rows('exhibitions') ): ?>
                <section>
                    <h2 class="heading-1 animate__animated">Wystawy</h2>

                    <?php while( have_rows('exhibitions') ): the_row(); ?>
                        <p class="animate__animated">
                            <strong><?php the_sub_field('exhibition-title'); ?></strong><br/>
                            <?php the_sub_field('exhibition-description'); ?>
                        </p>            
                    <?php endwhile; ?>
                </section>
            <?php endif; ?> 

            <?php if( have_rows('lectures') ): ?>
                <section>
                    <h2 class="heading-1 animate__animated">Wykłady</h2>

                    <?php while( have_rows('lectures') ): the_row(); ?>
                        <p class="animate__animated">
                            <strong><?php the_sub_field('lecture-title'); ?></strong><br/>
                            <?php the_sub_field('lecture-description'); ?>
                        </p>            
                    <?php endwhile; ?>
                </section>
            <?php endif; ?> 

        </div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<script>
    var isInViewport = function(elem) {
        var distance = elem.getBoundingClientRect();
        return (
            distance.bottom <= ((window.innerHeight + distance.height - 100) || (document.documentElement.clientHeight + distance.height -100)) 
        );
    };

    var showItem = function () {
        var findMe = document.querySelectorAll('.animate__animated');    
        findMe.forEach(element => {
            if (isInViewport(element)) {
                element.classList.add("animate__fadeInUp");
            }
        });
    };

    window.addEventListener('scroll', showItem, false);
    showItem();

    document.getElementById("nav-container").classList.add("with-line");
</script>