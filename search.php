<?php
/**
 * The template for displaying search results pages.
 *
 * @package GenieTheme
 */

get_header(); ?>
<div class="row">
	<section id="primary" class="content-area col-md-8 col-sm-8">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="stashlist-header">
				<h1 class="stash-title product-title"><?php printf( __( 'Search Results for: %s', 'genietheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
</div><!-- row ends here -->
</div><!-- site content ends here -->
</div><!-- container body  ends here -->
</div><!-- container-fluid body fluid ends here -->


<?php get_footer(); ?>
