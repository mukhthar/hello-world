<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package GenieTheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="stashlist-header">
		<?php the_title( '<h1 class="stash-title product-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'genietheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
