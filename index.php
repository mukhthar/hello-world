<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package GenieTheme
 */

get_header(); ?>
</div><!-- site content ends here -->
</div><!-- container body  ends here -->
</div><!-- container-fluid body fluid ends here -->
<div class="container-fluid search-fluid">
	<div class="container">
		<div class="col-md-12 search-block">
		<h1>Find a Job Now!</h1>
		<div class="header_search home-search"><?php echo do_shortcode('[wpbsearch]');?></div>
		</div>
		</div>
	
</div>
<div class="container-fluid ">
	<div class="container">
		<div class="col-md-12 home_welcome ">
		<h1>Come on,Work with your Dream company</h1>
		
		</div>
		</div>
	
</div>
<div class="container-fluid register-fluid">
	<div class="container">
		<div class="container">
			<div class="col-md-8  col-md-offset-4 home_welcome ">
			<h2>Register  your Whatsapp Number </h2>
			<h3>Get Alerts to your Whatsapp number, Never miss a job</h3>	

			<div class="register-button"><a href="#">Register Now</a>
				<div class="clear"></div>
			</div>	
		</div>


		</div>
		</div>
	
</div>
<div class="container-fluid category-fluid">
	<div class="container">
		<div class="container">
			<div class="col-md-12 home_welcome ">
			<h1>Find Jobs in your Field</h1>
			<?php wp_nav_menu( array( 'theme_location' => 'stash-menu-hom', 'container_class' => 'stash-container', 'menu_class' => 'stash-menu',) ); ?>
		<div class="clear"></div>
			</div>


		</div>
		</div>
	
</div>
<div class="container-fluid location-fluid">
	<div class="container">
		<div class="container">
			<div class="col-md-12 home_welcome ">
			<h1>Find Jobs by Location</h1>
			<?php wp_nav_menu( array( 'theme_location' => 'loc-menu-hom', 'container_class' => 'stash-container', 'menu_class' => 'stash-menu',) ); ?>
		<div class="clear"></div>
			</div>


		</div>
		</div>
	
</div>
<div class="container-fluid featured_fluid home-feature">
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

