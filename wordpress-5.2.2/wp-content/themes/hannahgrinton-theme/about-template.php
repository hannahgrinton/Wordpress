<?php

/**
* Template Name: About Template
* Template Post Type: post, page
* @package hannahgrinton-theme
*/

get_header();
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main site-main--about">
        <h1 class="entry-title entry-title--about">About</h1>
        <a data-value="#about-1" class="about-link">Who I am&nbsp;<i class="fas fa-chevron-up" id="about-1-icon"></i></a>
        <div class="about-section" id="about-1" style="display: inline-block;">
            <p class="about-section__paragraph"><i class="fas fa-portrait"></i><span>Programmer, Photographer, Musician, Math-Lover, Artist, Designer, Reader, Traveller...</span></p>
            <p class="about-section__paragraph"><i class="fas fa-map-marked-alt"></i><span>I am from rural Nova Scotia - where I grew up snowmobiling, hiking, four-wheeling, bicycling, tree-climbing, and "helping" my dad change tires on the cars.</span></p>
        </div><!-- #about-1 -->
        <a data-value="#about-2" class="about-link">Education&nbsp;<i class="fas fa-chevron-down" id="about-2-icon"></i></a>
        <div class="about-section" id="about-2">
            <p class="about-section__paragraph"><i class="fas fa-language"></i><span>French DELF B1 exam - bilingual</span></p>
            <p class="about-section__paragraph"><i class="fas fa-award"></i><span>NSCC entrance award</span></p>
            <p class="about-section__paragraph"><i class="fas fa-award"></i><span>Dr. Regis Callaghan Memorial award</span></p>
            <p class="about-section__paragraph"><i class="fas fa-award"></i><span>Principal's award for academic achievement</span></p>
            <p class="about-section__paragraph"><i class="fas fa-calculator"></i><span>Placed in the top 20 highest scoring students in North America for the University of Waterloo Mathematica contest 5 years in a row</span></p>
            <p class="about-section__paragraph"><i class="fas fa-certificate"></i><span>WHMIS and OH&S certified - by NSCC and Sobeys</span></p>
        </div><!-- #about-2 -->
        <a data-value="#about-3" class="about-link">Interests&nbsp;<i class="fas fa-chevron-down" id="about-3-icon"></i></a>
        <div class="about-section" id="about-3"style="margin-bottom: 40px;">
            <p class="about-section__paragraph"><i class="fas fa-plane"></i>
                <span>Travelling: 
                <br>Canadian Provinces (NS, NL, NB, PE, QC, ON, AL, BC)
                <br>American States (ME, NH, MA, MI, NJ, NY, OR, PA, VT, WA)</span>
            </p>
            <p class="about-section__paragraph"><i class="fas fa-camera"></i>
            <span>Photography:
            
                <br><a href="https://hannahgrintonphotography.pixieset.com/" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">hannahgrintonphotography.pixieset.com</a></span>
            </p>
            <p class="about-section__paragraph"><i class="fas fa-palette"></i><span>I also love drawing, painting, playing guitar and piano, reading, designing, and playing with my puppy Cooper.</span></p>
        </div><!-- #about-3 -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();