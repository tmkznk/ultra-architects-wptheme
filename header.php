<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php ultraarchitects_the_html_classes(); ?>>
    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
        
		<!-- <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="./img/icon.png">
        <title>Ultra Architects</title>
        <script src="https://unpkg.com/magic-grid/dist/magic-grid.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script> -->
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
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#news">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="office" href="biuro.html">Biuro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="projects" href="projekty.html">Projekty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact" href="kontakt.html">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lang" href="#">En</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		<main>
