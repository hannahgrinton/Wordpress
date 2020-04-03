<?php

/**
* Template Name: Project Template
* Template Post Type: post, page
* @package hannahgrinton-theme
*/

get_header();
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <h1 class="entry-title entry-title--project">Projects</h1>
        <div class="project">
            <nav class="project__navigation">
                <a data-value="#php" class="project__navigation__link project__navigation__link--current">PHP & CMS</a>
                <a data-value="#fullstack" class="project__navigation__link">Full Stack</a>
                <a data-value="#dotnetcore" class="project__navigation__link">ASP.NET Core</a>
                <a data-value="#vanillajs" class="project__navigation__link">Vanilla JS</a>
            </nav>
            <div class="project__content">
                <div class="project__content__section" id="php" style="display: flex;">
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2020/03/Screen-Shot-2020-03-30-at-4.34.15-PM-e1585596940968.png"></div>
                        <div class="project__card__header">Contact Manager</div>
                        <div class="project__card__body">PHP CRUD app using custom MVC OOP framework and login sessions. <br>(U: "test" P: "password").</div>
                        <div class="project__card__links">
                            <a href="https://github.com/hannahgrinton/ContactManager.git" target="_blank" class="card-links">Github</a>
                            <a href="https://hannahgrinton.ca/contactmanager" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2020/03/Screen-Shot-2020-03-30-at-4.39.10-PM.png"></div>
                        <div class="project__card__header">Task Manager</div>
                        <div class="project__card__body">PHP web app developed using HTML, Sass, JS, and jQuery front-end and a MVC OOP back-end.</div>
                        <div class="project__card__links">
                            <a href=" https://github.com/hannahgrinton/taskmanager" target="_blank" class="card-links">Github</a>
                            <a href="https://hannahgrinton.ca/taskManager" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2019/05/halisi.png"></div>
                        <div class="project__card__header">Halisi Travel and Adventure</div>
                        <div class="project__card__body">WordPress site that allows users to book a trip with the company (Halisi Travel); includes child themes, plugins, custom PHP modifications, and custom CSS.</div>
                        <div class="project__card__links">
                            <a href="https://github.com/hannahgrinton/Halisi-Travel" target="_blank" class="card-links">Github</a>
                            <a href="https://halisitravel.com/" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2020/03/Screen-Shot-2020-03-30-at-5.40.38-PM.png"></div>
                        <div class="project__card__header">Résumé Builder</div>
                        <div class="project__card__body">Laravel app for creating custom résumés according to job applications.</div>
                        <div class="project__card__links">
                            <a href="https://github.com/hannahgrinton/Resume-Builder" target="_blank" class="card-links">Github</a>
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Live Demo</a>
                        </div>
                    </div>
                </div><!-- #php -->
                <div class="project__content__section" id="fullstack">
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2020/03/Screen-Shot-2020-03-30-at-4.52.58-PM.png"></div>
                        <div class="project__card__header">New Age Architects</div>
                        <div class="project__card__body">Angular app that displays recent work; includes two image sliders and walkthrough videos. Served by Node/Express and uses Angular routing.</div>
                        <div class="project__card__links">
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Github</a>
                            <a href="http://ec2-52-91-81-225.compute-1.amazonaws.com:8080/" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2019/12/techroster.png"></div>
                        <div class="project__card__header">Tech Roster</div>
                        <div class="project__card__body">Angular app that allows users to connect and interact with technologies and courses in a Mongo database, through connecting to a Node/Express server and RESTful API.</div>
                        <div class="project__card__links">
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Github</a>
                            <a href="http://ec2-35-173-192-50.compute-1.amazonaws.com:8080/main" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2019/12/photoviewer3.png"></div>
                        <div class="project__card__header">PhotoViewer</div>
                        <div class="project__card__body">Angular 7 version of the original JavaScript app, implements the same UI but fetches data from Node/Express server RESTful API, which connects with Mongo database.</div>
                        <div class="project__card__links">
                            <a href="https://github.com/hannahgrinton/photoViewer" target="_blank" class="card-links">Github</a>
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2020/03/Screen-Shot-2020-03-30-at-5.09.24-PM.png"></div>
                        <div class="project__card__header">React Portfolio</div>
                        <div class="project__card__body">Simple React portfolio site built from a <a href="https://www.youtube.com/watch?list=PL3KAvm6JMiowqFTXj3oPQkhP7aCgRHFTm&v=9AboneIxeM8" target="_blank" class="card-links">youtube tutorial</a>; uses React-MDL for design.</div>
                        <div class="project__card__links">
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Github</a>
                            <a href="http://ec2-3-95-154-250.compute-1.amazonaws.com:8080/" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                </div><!-- #fullstack -->
                <div class="project__content__section" id="dotnetcore" style="padding-bottom: 120px;">
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2019/12/homepage.png"></div>
                        <div class="project__card__header">HomePage</div>
                        <div class="project__card__body">.NET Core app for managing links. Change link URLs, names, categories, add new links, and rename categories. Uses google’s API to retrieve URL favicons.</div>
                        <div class="project__card__links">
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Github</a>
                            <a href="http://ec2-18-234-24-93.compute-1.amazonaws.com/" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                </div><!-- #dotnetcore -->
                <div class="project__content__section" id="vanillajs">
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2019/04/Screen-Shot-2019-04-15-at-5.41.11-PM.png"></div>
                        <div class="project__card__header">PhotoViewer</div>
                        <div class="project__card__body">A responsive photo gallery implicating Vanilla JavaScript & jQuery, Sass (BEM notation), Font Awesome, Spin.js, and AJAX requests for JSON.</div>
                        <div class="project__card__links">
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Github</a>
                            <a href="https://hannahgrinton.ca/PhotoAlbum/" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2020/03/Screen-Shot-2020-03-30-at-5.33.59-PM.png"></div>
                        <div class="project__card__header">WeatherWorks</div>
                        <div class="project__card__body">JS web app that displays Open Weather Map’s API XML data, stores your city in a cookie, and displays the corresponding Weather Icon.</div>
                        <div class="project__card__links">
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Github</a>
                            <a href="https://hannahgrinton.ca/WeatherApp/" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2019/04/Screen-Shot-2019-04-15-at-5.42.16-PM.png"></div>
                        <div class="project__card__header">Web Server Config</div>
                        <div class="project__card__body">Web server documentation app demonstrates CSS grid, Flex-box, handling links, placing images, and media queries.</div>
                        <div class="project__card__links">
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Github</a>
                            <a href="https://hannahgrinton.ca/WebServerSite/" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2019/04/Screen-Shot-2019-04-15-at-5.42.38-PM-1.png"></div>
                        <div class="project__card__header">Review Form Example</div>
                        <div class="project__card__body">Online form demonstrating the latest form design trends and responsiveness.</div>
                        <div class="project__card__links">
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Github</a>
                            <a href="https://hannahgrinton.ca/Form/" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                    <div class="project__card">
                        <div class="project__card__image"><img src="https://hannahgrinton.ca/wp-content/uploads/2020/03/Screen-Shot-2020-03-30-at-5.36.57-PM.png"></div>
                        <div class="project__card__header">My First Portfolio</div>
                        <div class="project__card__body">Created before learning Javascript, CSS grid, and Flex-box, this 6-page site is purely static.</div>
                        <div class="project__card__links">
                            <a href="" target="_blank" class="card-links card-links--disabled" disabled>Github</a>
                            <a href="https://hannahgrinton.ca/Portfolio/index.html" target="_blank" class="card-links">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div><!-- .project__content -->
        </div><!-- .project -->
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();