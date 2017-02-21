<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package GenieTheme
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="stashlist-header">
					<h1 class="stash-title product-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'genietheme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try  a search?', 'genietheme' ); ?></p>

					<div class="hidden-xs">?php echo do_shortcode('[wpbsearch]');?></div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- row ends here -->
</div><!-- site content ends here -->
</div><!-- container body  ends here -->
</div><!-- container-fluid body fluid ends here -->


<?php get_footer(); ?>

