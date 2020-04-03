<?php

/**
* Template Name: Experience Template
* Template Post Type: post, page
* @package hannahgrinton-theme
*/

get_header();
?>


<div id="primary" class="content-area content-area--experience">
    <main id="main" class="site-main site-main--experience">    
        <h1 class="entry-title entry-title--experience">Experience</h1>
        <div class="experience">
            <nav class="experience__navigation">
                <a data-value="#current" class="experience__navigation__link experience__navigation__link--current">Current Employment</a>
                <a data-value="#past" class="experience__navigation__link">Previous Employment</a>
                <a data-value="#recent" class="experience__navigation__link">Recent Volunteer Work</a>
            </nav>
            <div class="experience__content">
                <div class="experience__content__section" id="current" style="display: flex;">
                    <div class="experience-item">
                        <span class="experience-item__date"><i class="far fa-calendar-alt"></i>&nbsp;February 2020 - Present</span>
                        <span class="experience-item__work">
                            <span>Java & JavaScript Tutor</span><br>
                            <span>NSCC Truro Campus</span>
                        </span>
                    </div>
                    <div class="experience-item">
                        <span class="experience-item__date"><i class="far fa-calendar-alt"></i>&nbsp;July 2017 - Present</span>
                        <span class="experience-item__work">
                            <span>Deli Clerk & Cashier</span><br>
                            <span>Sobeys, 594 Robie St. Truro, NS</span>
                        </span>
                    </div>
                </div>
                <div class="experience__content__section" id="past">
                    <div class="experience-item">
                        <span class="experience-item__date"><i class="far fa-calendar-alt"></i>&nbsp;May 2020</span>
                        <span class="experience-item__work">
                            <span>Student Solutions Developer</span><br>
                            <span>Greenhorn Solutions, NSCC Truro Campus</span>
                        </span>
                    </div>
                    <div class="experience-item">
                        <span class="experience-item__date"><i class="far fa-calendar-alt"></i>&nbsp;2014 - 2017 Seasons</span>
                        <span class="experience-item__work">
                            <span>Referee/Coach</span><br>
                            <span>Colchester Mini Basketball Assoc.</span>
                        </span>
                    </div>
                    <div class="experience-item">
                        <span class="experience-item__date"><i class="far fa-calendar-alt"></i>&nbsp;2013 - 2016</span>
                        <span class="experience-item__work">
                            <span>Private Hireable Musician</span><br>
                            <span>Truro Farmer's Market, Sobeys Events, and weddings</span>
                        </span>
                    </div>
                </div>
                <div class="experience__content__section" id="recent">
                    <div class="experience-item">
                        <span class="experience-date">
                            <span class="calendar-day">
                                <span class="month">Oct. 2019</span> 
                                <span class="day">23</span>
                            </span>
                            <span style="padding-top: 25px; padding-right: 10px;">to</span>
                            <span class="calendar-day">
                                <span class="month">Nov. 2019</span>
                                <span class="day">27</span>
                            </span>
                        </span>
                        <span class="experience-item__text">Every Wednesday - taught IT Web Programming Exploratory at Redcliff Middle School (for students grades 5-7)</span>
                    </div>
                    <div class="experience-item">
                        <span class="experience-date">
                            <span class="calendar-day">
                                <span class="month">June 2019</span> 
                                <span class="day">7</span>
                            </span>
                        </span>
                        <span class="experience-item__text">Harmony Heights Elementary Track and Field day supervisor at the TAAC Grounds (for students grades 3-5)</span>
                    </div>
                    <div class="experience-item">
                        <span class="experience-date">
                            <span class="calendar-day">
                                <span class="month">March 2019</span> 
                                <span class="day">5</span>
                            </span>
                        </span>
                        <span class="experience-item__text">New Media Arts day at NSCC Truro Campus</span>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();