<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package GenieTheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row ">
							<div class="stash_entry">
							<div class="col-md-3 col-sm-3">
								<a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('partner_thumb'); ?></a>
							</div>
							<div class="col-md-9 col-sm-9 stash_entry_content">
								<div class="product_name search_product_name">
								<a href="<?php echo get_permalink(); ?>"><?php the_title() ; ?> </a>
								</div>
								<div class="stash_category_list search_category_list">
									<?php $terms = get_the_terms($post->ID, 'product-category');
									if (! empty($terms)) {
									  foreach ($terms as $term) {
									    $url = get_term_link($term->slug, 'product-category');
									   		print "<li><a href='$url'>{$term->name}</a></li>"; 							   
									  }
									}
									?>
									<div class="clearfix"></div>
								</div>
								<div class="product_tag">
							 			 <?php $tag_lines=get_titan_option('pro_tag');?>
											<?php if ( !empty( $tag_lines)) : ?>
											<h3> <?php echo $tag_lines; ?></h3>
											 <?php endif;?>
								</div>
								<div class="product_excerpt_less">
									<?php// the_excerpt(); ?>
									<div class="read_more"><a href="<?php echo get_permalink() ?>">Read More</a></div>
									<div class="clearfix"></div>
								</div>

									
							</div>
							<div class="clearfix"></div>
							</div>
								
								
	</div>
</article><!-- #post-## -->