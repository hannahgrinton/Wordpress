<?php 
/**
* Template Name: Display Post Titles for a Category
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
$args = array(
    'post_type'=> 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'category_name' => 'MyCategory'
    //'posts_per_page' => -1 // this will retrive all the post that is published 
    );
    $result = new WP_Query( $args );
    if ( $result-> have_posts() ) :
        while ( $result->have_posts() ) : $result->the_post();
            the_title();  
        endwhile;
    endif; 
wp_reset_postdata();

get_footer();
?>
