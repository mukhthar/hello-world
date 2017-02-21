<?php
/*
Template Name: Home  Page
*/?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GenieTheme
 */

get_header(); ?>

<div class="row">
	<div class="col-md-12 search-block">
		<h1>Find a Job Now!</h1>
		<div class="header_search home-search"><?php echo do_shortcode('[wpbsearch]');?></div>
	</div>
	<div id="primary" class="content-area col-md-8 col-sm-8">
		<main id="main" class="site-main" role="main">

		<?php
		    $args = array(
        'post_type' => 'jobs',
        'posts_per_page' => 10,
        'orderby' => 'asc',
        
    );

    $the_query = new WP_Query( $args );

?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

 <div class="row">
					<div class="col-md-8 col-sm-12"> 
						<div class="row ">
							<div class="stash_entry">
							<div class="col-md-7 col-sm-12">
								<a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(''); ?></a>
							</div>
							<div class="col-md-5 col-sm-12 stash_entry_content">
								<div class="product_name">
								<a href="<?php echo get_permalink(); ?>"><?php the_title() ; ?> </a>
								</div>
								<div class="product_excerpt_less">
									<?php the_excerpt(); ?>
								</div>
								<div class="job_information">
										<?php $experience=get_titan_option('exp_required');?>
                            			<?php $location=get_titan_option('job_loc');?>
										<?php $education=get_titan_option('edu_qual');?>
										<?php $nationality=get_titan_option('nationality');?>
										<?php $salary=get_titan_option('salary');?>
										<?php $vaccancies=get_titan_option('vaccancies');?>
										<?php $benefits=get_titan_option('benefits');?>
										<?php $gender=get_titan_option('gender');?>

										<?php if ( !empty( $experience)) : ?>
	                	  					<li class="dashicons-before dashicons-portfolio"> 
	                	  						<span>Experience:</span><h6><?php echo $experience; ?></h6></li>
                  						<?php endif;?>
                  						<?php if ( !empty( $location)) : ?>
	                	  					<li class="dashicons-before dashicons-location-alt"> 
	                	  						<span>Location:</span><h6><?php echo $location; ?></h6></li>
                  						<?php endif;?>
                  						
                  						
                  						<?php if ( !empty( $salary)) : ?>
	                	  					<li class="dashicons-before dashicons-chart-bar"> 
	                	  						<span>Salary:</span><h6><?php echo $salary; ?></h6></li>
                  						<?php endif;?>
                  						<?php if ( !empty( $vaccancies)) : ?>
	                	  					<li class="dashicons-before dashicons-groups"> 
	                	  						<span>Vaccancies:</span><h6><?php echo $vaccancies; ?></h6></li>
                  						<?php endif;?>
                  						<?php if ( !empty( $benefits)) : ?>
	                	  					<li class="dashicons-before dashicons-smiley"> 
	                	  						<span>Benefits:</span><h6><?php echo $benefits; ?></h6></li>
                  						<?php endif;?>
                  						

                  						<div class="clearfix"></div>



								</div>
								<div class="clearfix"></div>
								<div class="read_more">
									<a href="<?php echo get_permalink() ?>">
										<span class="dashicons-before dashicons-migrate"></span>Apply
									</a>
								</div>
									<div class="clearfix"></div>

									
							</div>
							<div class="clearfix"></div>
							</div>
								
								
						</div>
					</div>
				</div>

<?php endwhile; else : ?>

   
<?php endif;?>
<div class="pagination_mk">
					 <?php wp_pagenavi(); ?>
					 </div>
<?php wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div><!-- row ends here -->
</div><!-- site content ends here -->
</div><!-- container body  ends here -->
</div><!-- container-fluid body fluid ends here -->


<?php get_footer(); ?>
