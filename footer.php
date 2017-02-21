<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package GenieTheme
 */
?>

<div class="container-fluid footer_widget_fluid">
	<div class="container">
		<div class="row footer_row">
					
					<?php dynamic_sidebar( 'footer1' ); ?>
					<?php dynamic_sidebar( 'footer2' ); ?>
					<?php dynamic_sidebar( 'footer3' ); ?>
					<?php dynamic_sidebar( 'footer4' ); ?>
					
			</div>
	</div>
</div>

<div class="container-fluid footer_bottom_fluid">
	<div class="container">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
                    &copy; 2017 - <?php bloginfo( 'name' ); ?>
			<span class="sep"> | </span>
			<a href="http://mukhthar.com" target="_blank">Design and Development-mukhthar</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #footer container -->
</div><!-- #footer container fluid -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
