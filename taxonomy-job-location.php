<?php
/**
 * The template for displaying archive pages based on location.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package GenieTheme
 */

get_header(); ?>
<div class="row">

	<div id="primary" class="content-area col-md-8 ">
		
<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			
			<header class="stashlist-header">
				<h1 class="stash-title product-title">
					Jobs in <span><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></span>
				</h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

			
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-md-12 col-sm-12"> 
						<div class="row ">
							<div class="stash_entry">
							<div class="col-md-7 col-sm-7">
								<a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(''); ?></a>
							</div>
							<div class="col-md-5 col-sm-5 stash_entry_content">
								<div class="product_name">
								<a href="<?php echo get_permalink(); ?>"><?php the_title() ; ?> </a>
								</div>
									<div class="job_information">
										<?php $terms = get_the_terms($post->ID, 'job-category');?>
										<?php if ( !empty( $terms)) : ?>
	                	  					<li class="dashicons-before dashicons-sos"> 
	                	  						<span>Category:</span><h6><?php foreach ($terms as $term) {
	                	  							  $url = get_term_link($term->slug, 'job-category');
							   			print "<a href='$url'>{$term->name}</a> "; 	
	                	  						} ?></h6></li>
                  						<?php endif;?>
                  						
										<?php $terms = get_the_terms($post->ID, 'job-location');?>
										<?php if ( !empty( $terms)) : ?>
	                	  					<li class="dashicons-before dashicons-location"> 
	                	  						<span>Location:</span><h6><?php foreach ($terms as $term) {
	                	  							  $url = get_term_link($term->slug, 'job-location');
							   			print "<a href='$url'>{$term->name}</a> "; 	
	                	  						} ?></h6></li>
                  						<?php endif;?>
                  						<div class="clearfix"></div>

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

			<?php endwhile; ?>
			<div class="clearfix"></div>
			<div class="pagination_mk">
					 <?php wp_pagenavi(); ?>
					 </div>

			

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div><!-- row ends here -->
</div><!-- site content ends here -->
</div><!-- container body  ends here -->
</div><!-- container-fluid body fluid ends here -->

<div class="container-fluid featured_fluid">
	<div class="container">
		
			<?php
				$args = array(
    			'post_type' => 'jobs',
    			'showposts'=>6,
    			'orderby'=> 'date',
    			'order'=>'desc', );
    			$wp_query = new WP_Query( $args );
    		?>

    		<h1 class="product_category_title home_slider_title">
							New Jobs
			</h1>
    		<div id="featured_stash" class="owl-carousel corousel_entry">
	         	<?php 
	       			 while( $wp_query->have_posts() ) : $wp_query->the_post(); 
	       		?>
	       		<div>
                <div class="stash_entry slider_entry">
							<div class="col-md-12 col-sm-12">
								<a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(''); ?></a>
							</div>
							<div class="col-md-12 col-sm-12 stash_entry_content">
								<div class="product_name">
								<a href="<?php echo get_permalink(); ?>"><?php the_title() ; ?> </a>
								</div>
										<div class="job_information">
										<?php $terms = get_the_terms($post->ID, 'job-category');?>
										<?php if ( !empty( $terms)) : ?>
	                	  					<li class="dashicons-before dashicons-sos"> 
	                	  						<span>Category:</span><h6><?php foreach ($terms as $term) {
	                	  							  $url = get_term_link($term->slug, 'job-category');
							   			print "<a href='$url'>{$term->name}</a> "; 	
	                	  						} ?></h6></li>
                  						<?php endif;?>
                  						
										<?php $terms = get_the_terms($post->ID, 'job-location');?>
										<?php if ( !empty( $terms)) : ?>
	                	  					<li class="dashicons-before dashicons-location"> 
	                	  						<span>Location:</span><h6><?php foreach ($terms as $term) {
	                	  							  $url = get_term_link($term->slug, 'job-location');
							   			print "<a href='$url'>{$term->name}</a> "; 	
	                	  						} ?></h6></li>
                  						<?php endif;?>
                  						<div class="clearfix"></div>

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
                    <div class="clearfix"></div>       
                </div>
                <?php endwhile;   ?>
            </div> 							
     		<?php wp_reset_query();?>
		
	</div>

</div>
<?php get_footer(); ?>

