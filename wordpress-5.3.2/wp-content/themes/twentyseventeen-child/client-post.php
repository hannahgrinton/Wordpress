<?php 
/**
* Template Name: Page for single client post
* Template Post Type: post
*/

get_header(); 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h1>', '</h1>' ); 
        the_content();
    endwhile;
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 
rewind_posts();
?>
<div>Here is some hard coded html!!!</div>
<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h1>', '</h1>' ); 
        the_content();
    endwhile;
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 

get_footer();
?>
