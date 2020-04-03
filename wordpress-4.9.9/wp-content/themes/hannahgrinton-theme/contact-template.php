<?php

/**
* Template Name: Contact Template
* Template Post Type: post, page
* @package hannahgrinton-theme
*/

get_header();
?>

<div id="primary" class="content-area content-area--contact">
    <main id="main" class="site-main site-main--contact">
        <div class="contact">
            <h1 class="entry-title entry-title--contact">Contact Me</h1>
            <div class="contact__items">
                <div class="contact__items__item"><i class="fas fa-map-marker-alt"></i><a class="contact__link contact__link--28" href="https://www.google.com/maps/place/Nova+Scotia/@43.9848154,-67.3597585,6z/data=!3m1!4b1!4m5!3m4!1s0x4b591298de18cf45:0x102581ef8cf0940!8m2!3d44.6819866!4d-63.744311" target="_blank">Nova Scotia, Canada</a></div>
                <div class="contact__items__item"><i class="far fa-envelope"></i><a class="contact__link" href="mailto:hannahgrinton.webdeveloper@gmail.com" target="_blank">hannahgrinton.webdeveloper@gmail.com</a></div>
                <div class="contact__items__item"><i class="fab fa-pinterest"></i><a class="contact__link contact__link--21" href="https://pinterest.com/hannahgrinton" target="_blank">pinterest.com/hannahgrinton</a></div>
                <div class="contact__items__item"><i class="fab fa-linkedin-in"></i><a class="contact__link contact__link--24" href="https://www.linkedin.com/in/hannah-grinton" target="_blank">linkedin.com/in/hannah-grinton</a></div>
                <div class="contact__items__item"><i class="fab fa-github"></i><a class="contact__link" href="https://github.io/hannahgrinton" target="_blank">github.io/hannahgrinton</a></div>
                <div class="contact__items__item"><i class="fab fa-stack-overflow"></i><a class="contact__link contact__link--27" href="https://stackoverflow.com/users/12297938/hannah-grinton?tab=profile" target="_blank">stackoverflow.com/hannah-grinton</a></div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();