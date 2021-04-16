<div class="container-fluid wide px-md-0">
    <style>
        .featured-news { background-image: none; }
        
        @media (min-width: 768px) {
            .featured-news { background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); }
        }
    </style>
    <div class="featured-news">
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