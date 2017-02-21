<?php
/**
 * The template for displaying all single posts.
 *
 * @package GenieTheme
 */

get_header(); ?>
 <div class="row">
      <div class="col-md-8 ">
          <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content ">
            <h1 class="product-title"> <?php the_title()?>
            </h1>
            <?php if (has_post_thumbnail()) { 
             the_post_thumbnail('');  
              } ?>
              <div class="job_content">
               <div class="job_information">
                    <?php $experience=get_titan_option('exp_required');?>
                    <?php $location=get_titan_option('job_loc');?>
                    <?php $education=get_titan_option('edu_qual');?>
                    <?php $nationality=get_titan_option('nationality');?>
                    <?php $salary=get_titan_option('salary');?>
                    <?php $vaccancies=get_titan_option('vaccancies');?>
                    <?php $benefits=get_titan_option('benefits');?>
                    <?php $gender=get_titan_option('gender');?>
                    <?php $job_url=get_titan_option('j_link');?>
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
                             <?php if ( !empty( $experience)) : ?>
                                <li class="dashicons-before dashicons-portfolio"> 
                                  <span>Experience:</span><h6><?php echo $experience; ?></h6></li>
                              <?php endif;?>
                              <?php if ( !empty( $location)) : ?>
                                <li class="dashicons-before dashicons-location-alt"> 
                                  <span>Location:</span><h6><?php echo $location; ?></h6></li>
                              <?php endif;?>
                              <?php if ( !empty( $education)) : ?>
                                <li class="dashicons-before dashicons-welcome-learn-more"> 
                                  <span>Education:</span><h6><?php echo $education; ?></h6></li>
                              <?php endif;?>
                              <?php if ( !empty( $nationality)) : ?>
                                <li class="dashicons-before dashicons-admin-site"> 
                                  <span>Nationality:</span><h6><?php echo $nationality; ?></h6></li>
                              <?php endif;?>
                              <?php if ( !empty( $salary)) : ?>
                                <li class="dashicons-before dashicons-chart-bar"> 
                                  <span>Salary:</span><h6><?php echo $salary; ?></h6></li>
                              <?php endif;?>
                              <?php if ( !empty( $vaccancies)) : ?>
                                <li class="dashicons-before dashicons-groups"> 
                                  <span>Vaccancies:</span><h6><?php echo $vaccancies; ?></h6></li>
                              <?php endif;?>
                               <?php if ( !empty( $gender)) : ?>
                                <li class="dashicons-before dashicons-universal-access"> 
                                  <span>Gender:</span><h6><?php if ($gender==1){
                                  echo 'male'; }
                                  elseif ($gender==2) {
                                    echo "Female";
                                  }
                                  elseif ($gender==3) {
                                    echo "Male/Female";
                                  }?></h6></li>
                              <?php endif;?>
                              <?php if ( !empty( $benefits)) : ?>
                                <li class="dashicons-before dashicons-smiley"> 
                                  <span>Benefits:</span><h6><?php echo $benefits; ?></h6></li>
                              <?php endif;?>
                              <div class="clearfix"></div>
                </div>
                 <h1 class="product-title">Job Description
            </h1>
            <?php the_content(); ?>
            <div class="read_more ">
                 
   
              <a class="col-md-8 col-xs-12 col-md-offset-2 "href="<?php echo $job_url; ?>" target="_blank">  <span class="dashicons-before dashicons-migrate">Apply</span> </a> 
                  </a>
                  <div class="clearfix"></div>
            </div>
             <div class="clearfix"></div>
            
              <?php echo do_shortcode('[ssba]'); ?>
             
          </div>

            </div>
             
           
          </article><!-- #post-## -->
          <?php endwhile; // end of the loop. ?>
         
          <div class="related_products_block">
            
            <?php
                 //Get array of terms
                $terms = get_the_terms( $post->ID , 'job-category', 'string');
            //Pluck out the IDs to get an array of IDS
              $term_ids = wp_list_pluck($terms,'term_id');

        //Query posts with tax_query. Choose in 'IN' if want to query posts with any of the terms
        //Chose 'AND' if you want to query for posts with all terms
       $second_query = new WP_Query( array(
      'post_type' => 'jobs',
      'tax_query' => array(
                    array(
                        'taxonomy' => 'job-category',
                        'field' => 'id',
                        'terms' => $term_ids,
                        'operator'=> 'IN' //Or 'AND' or 'NOT IN'
                     )),
      'posts_per_page' => 4,
      'ignore_sticky_posts' => 1,
      'orderby' => 'rand',
      'post__not_in'=>array($post->ID)
   ) );

//Loop through posts and display...
   ?>
        <h1 class="product-title">Related Jobs
            </h1>
    <?php
    if($second_query->have_posts()) {
     while ($second_query->have_posts() ) : $second_query->the_post(); ?>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="single_related">
           <?php if (has_post_thumbnail()) { ?>
           <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(''); ?></a>
            <?php } ?>
            <div class="product_name">
                <a href="<?php echo get_permalink(); ?>"><?php the_title() ; ?> </a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>

       </div>
   <?php endwhile; wp_reset_query();
   }?>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
      </div>

      <div class="hidden-sm">
        <?php get_sidebar(); ?>
      </div>
      

          
      
  
    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_sidebar(); ?>
</div><!-- row ends here -->
</div><!-- site content ends here -->
</div><!-- container body  ends here -->
</div><!-- container-fluid body fluid ends here -->


<?php get_footer(); ?>