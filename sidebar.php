<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package GenieTheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-4  " role="complementary">
	<aside  class="widget sidebar_widget">
		<h1 class="widget-title">Jobs by Category</h1>
		<?php wp_nav_menu( array( 'theme_location' => 'stash-menu-wid', 'container_class' => 'stash-container', 'menu_class' => 'stash-menu',) ); ?>
		<div class="clear"></div>
	</aside>
	<aside  class="widget sidebar_widget">
		<h1 class="widget-title">Jobs by Location</h1>
		<?php wp_nav_menu( array( 'theme_location' => 'stash-menu-wid', 'container_class' => 'stash-container', 'menu_class' => 'stash-menu',) ); ?>
		<div class="clear"></div>
	</aside>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
