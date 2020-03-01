<?php 
/**
* Template Name: Display Post Titles for a Category
*/

get_header(); 

// if ( have_posts() ) : 
//     while ( have_posts() ) : the_post(); 
//         // if ( in_category( 2 ) ) :
//         //     the_title( '<h1>', '</h1>' ); 
//         // endif;
//         the_title('<h1>', '</h1>');
//     endwhile;
// else: 
//     _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
// endif; 
$args = array(
    'post_type'=> 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => -1 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) :
    while ( $result->have_posts() ) : $result->the_post();
        if ( in_category( 1 ) ) : ?>
            <h1>UNCATEGORIZED</h1>
            <div style="color: red;"><?php the_title(); ?></div>
            <div style="color: orange;"><?php the_content(); ?></div>
        <?php elseif ( in_category( 2 ) ) : ?>
            <h1>MYCATEGORY</h1>
            <div style="color: blue;"><?php the_title(); ?></div>
            <div style="color: purple;"><?php the_content(); ?></div>
        <?php else: ?>
            <h1>OTHER POSTS</h1>
            <div style="color: green;"><?php the_title(); ?></div>
            <div style="color: yellow;"><?php the_content(); ?></div>
        <?php endif;
    endwhile;
endif; 
wp_reset_postdata();

get_footer();
?>
