<?php
/**
 * @package GenieTheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row stash_entry">
							<div class="col-md-3">
								<a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('partner_thumb'); ?></a>
							</div>
							<div class="col-md-9 stash_entry_content">
								<div class="product_name">
								<a href="<?php echo get_permalink(); ?>"><?php the_title() ; ?> </a>
								</div>
								<div class="product_tag">
							 			 <?php $tag_lines=get_titan_option('pro_tag');?>
											<?php if ( !empty( $tag_lines)) : ?>
											<h3> <?php echo $tag_lines; ?></h3>
											 <?php endif;?>
								</div>
								<div class="product_excerpt_less">
									<?php the_excerpt(); ?>
									<div class="read_more"><a href="<?php echo get_permalink() ?>">Read More</a></div>
									<div class="clearfix"></div>
								</div>
									<div class="clearfix"></div>
									
							</div>
								
								
	</div>
	</article><!-- #post-## -->
