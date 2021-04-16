<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php ultraarchitects_the_html_classes(); ?>>
    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <nav id="menu" class="navbar navbar-expand-lg fixed-top">
            <div class="container" id="nav-container">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Ultra Architects</a>

                <button class="hamburger hamburger--spin navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                </button>

                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'navbarSupportedContent',
                        'menu_class'        => 'navbar-nav ms-auto mb-2 mb-lg-0',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
                
            </div>
        </nav>

		<main>
