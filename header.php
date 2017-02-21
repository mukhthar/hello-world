<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GenieTheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'genietheme' ); ?></a>
	<div class="container-fluid header-top-fluid">
		
			<div class="container">
				<div class="header_top ">
					


				</div><!-- #header top ends here -->

			</div><!-- #header top container ends here -->
	</div><!-- #header top container fluid ends here-->

<div class="container-fluidc site-brand-fluid">
		<div class="container">
			<div class="row">
			<div class="col-md-4 col-sm-4 site_logo">
				<?php 
						$logo_id=get_titan_option('head_logo');
						$logo_path=wp_get_attachment_image_src($logo_id,full);
          				
						?>
						<?php if ( !empty( $logo_id)) : ?> 
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src='<?php echo $logo_path[0]; ?>' /></a>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php endif;?>
			</div>
			<div class="col-md-8 col-sm-8 hidden-xs">
				<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'mktheme' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
				<div class="clearfix"></div>
				<?php if (!is_front_page()) {
					?>
				
				<div class="header_search"><?php echo do_shortcode('[wpbsearch]');?></div>
				<?php } ?>
				<div class="clearfix"></div>


			</div>
			<div class="col-xs-12 visible-xs">
				<div class="mobile_menu_block">
					<a href="#" class="MobileMenu">MENU</a>
				<div class="clearfix"></div>

				</div>
		
				<div class="col-xs-12 mobile-navi hidden-md hidden-sm hidden-lg">
	              <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	               <div class="clearfix"></div>
	            </div>
	           
	            <?php if (!is_front_page()) {
					?>
				
				<div class="header_search"><?php echo do_shortcode('[wpbsearch]');?></div>
				<?php } ?>
				<div class="clearfix"></div>

			</div>

								
		</div>
				
	    </div><!-- #header container -->
</div><!-- #header container fluid -->
<div class="container-fluid"><!-- container-fluid body fluid starts here-->
	<div class="container"><!-- container body  starts here -->
			<div id="content" class="site-content"><!-- site content starts here -->

