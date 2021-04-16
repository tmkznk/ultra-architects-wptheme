
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<section class="page-top">
            <div class="row align-items-center">
                <div class="col-6 col-md-4">
                    <?php the_title( '<h1 class="entry-title mb-0">', '</h1>' ); ?>
                </div>
                <div class="col-6 col-md-8 text-end">

                    

                    <?php 

                        $active =  htmlspecialchars($_GET["filter"]);
 
                        $tags = get_tags();
                        $html1 = '<select class="d-md-none">';
                        $html1 .= '<option>Wszystkie</option>';
                        foreach ( $tags as $tag ) {
                            $tag_link = get_tag_link( $tag->term_id );
                            $tag_name = $tag->name;
                            $tag_slug = $tag->slug;
                            $html1 .= "<option value='{$tag->slug}'>{$tag->name}</option>";
                        }
                        $html1 .= '</select>';
                        echo $html1;

                        $html2 = '<ul class="nav justify-content-end filters d-none d-md-flex">';

                        $html2 .= ($active == '') ? '<li class="nav-item"><a class="nav-link active" aria-current="page" href="?filter=">Wszystkie</a></li>' : '<li class="nav-item"><a class="nav-link" aria-current="page" href="?filter=">Wszystkie</a></li>';

                        foreach ( $tags as $tag ) {
                            $tag_link = get_tag_link( $tag->term_id );
                            $tag_name = $tag->name;
                            $tag_slug = $tag->slug;

                            $html2 .= $active == $tag->slug ? "<li class='nav-item'><a class='nav-link active' href='?filter={$tag->slug}'>{$tag->name}</a></li>" : "<li class='nav-item'><a class='nav-link' href='?filter={$tag->slug}'>{$tag->name}</a></li>";
                        }
                        $html2 .= '</ul>';
                        echo $html2;
                    ?>
                </div>
            </div>		
		</section>
		
		<div class="entry-content projects">
            <?php echo do_shortcode("[ajax_load_more post_type='post' category='projekt' tag='{$active}' posts_per_page='3' loading_style='infinite fading-circles' transition='masonry' masonry_selector='.grid-item' masonry_animation='none']"); ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<script>
    document.getElementById("nav-container").classList.add("with-line");
</script>

