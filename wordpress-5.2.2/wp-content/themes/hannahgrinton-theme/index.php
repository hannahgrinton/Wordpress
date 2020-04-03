<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hannahgrinton-theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-main--home-page">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			
			/* Start the Loop */
			//while ( have_posts() ) :
				//the_post();
			$my_post = get_post(41);?>
			<h1 class="entry-title entry-title--home-page"><?php echo $my_post->post_title; ?></h1>
			<div class="entry-content entry-content--home-page"><?php echo $my_post->post_content ?></div>
			<div class="home-page__icons">
				<div class="home-page__icons__icon">
					<a href="./about">
						<span class="icon"><i class="far fa-newspaper"></i></span>
						<span class="icon-text">About</span>
					</a>
				</div>
				<div class="home-page__icons__icon">
					<a href="./experience">
						<span class="icon"><i class="fas fa-code-branch"></i></span>
						<span class="icon-text">Experience</span>
					</a>
				</div>
				<div class="home-page__icons__icon">
					<a href="./services">
						<span class="icon"><i class="fas fa-tools"></i></span>
						<span class="icon-text">Services</span>
					</a>
				</div>
				<div class="home-page__icons__icon">
					<a href="./projects">
						<span class="icon"><i class="fas fa-code"></i></span>
						<span class="icon-text">Projects</span>
					</a>
				</div>
				<div class="home-page__icons__icon">
					<a href="./contact">
						<span class="icon"><i class="fas fa-feather"></i></span>
						<span class="icon-text">Contact</span>
					</a>
				</div>
			</div>
			<?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );

			//endwhile;

			//the_posts_navigation();
			
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
