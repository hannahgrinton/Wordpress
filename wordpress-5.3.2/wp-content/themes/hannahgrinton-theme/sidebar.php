<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hannahgrinton-theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
<!-- <?php
// Suppose you want one sidebar for pages and another for absolutely everything else.
//if (is_page()) {
  //$no_sidebar = !dynamic_sidebar('sidebar-page'); // Attempt showing page sidebar
//} else {
//  $no_sidebar = !dynamic_sidebar('sidebar-1'); // Fall back to showing generic sidebar
//}
?> -->