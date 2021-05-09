<?php
    $googlemap = get_field('googlemap');
?>

<script>
    function initMap() {
        const ultraArchitects = { lat: <?= $googlemap['lat'] ?>, lng: <?= $googlemap['lng'] ?> };

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: <?= $googlemap['zoom'] ?>,
            center: ultraArchitects,
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        });
    
        const marker = new google.maps.Marker({
            position: ultraArchitects,
            map: map,
        });
    }
</script>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">	
        <section class="page-top">
            <?php the_title( '<h1 class="entry-title animate__animated">', '</h1>' ); ?>
        </section>
		<div class="entry-content animate__animated">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

        <div class="gmap animate__animated" id="map"></div>

	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<script src="https://maps.googleapis.com/maps/api/js?key=yourApiKey&callback=initMap&libraries=&v=weekly" async></script>
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

