<?php

/*
 * Admin Options of Theme Settings using Titan
 * 
 */


require_once( 'titan-framework-checker.php' );
 
add_action( 'tf_create_options', 'my_theme_create_options' );
function my_theme_create_options() {
    // Initialize Titan with my special unique namespace
    $titan = TitanFramework::getInstance( 'genietheme' );
 
    // Create my admin panel
    $panel = $titan->createAdminPanel( array(
        'name' => 'Theme Options',
    ) );
 
    
    $generaltab = $panel->createTab( array(
    'name' => 'General Tab',
    ) );
    
    // Create options for my admin panel
    $generaltab->createOption( array(
        'name' => 'LOGO',
        'id' => 'head_logo',
        'type' => 'upload',
        'desc' => 'Upoad logo of site.'
    ) );
    
     $generaltab->createOption( array(
        'name' => 'Header Scripts',
        'id' => 'header_scripts',
        'type' => 'textarea',
        'desc' => 'Enter your header scripts or code like google analytics,webmaster code etc...'
    ) );
 
    
  $generaltab->createOption( array(
        'name' => 'Footer Scripts',
        'id' => 'footer_scripts',
        'type' => 'textarea',
        'desc' => 'Enter your footer scripts or code like google analytics,webmaster code etc...'
    ) );
 
  
    $generaltab->createOption( array(
        'type' => 'save'
    ) );
 
    
     $titan = TitanFramework::getInstance( 'genietheme' );
$productMetaBox = $titan->createMetaBox( array(
    'name' => 'Additinal Job Information',
    'post_type' => 'jobs',
) );

 $productMetaBox->createOption( array(
        'name' => 'Job Link',
        'id' => 'j_link',
        'type' => 'text',
       
    ) );
 $productMetaBox->createOption( array(
        'name' => 'Experience Required',
        'id' => 'exp_required',
        'type' => 'text',
       
    ) );
    $productMetaBox->createOption( array(
        'name' => 'Education Qualification',
        'id' => 'edu_qual',
        'type' => 'text',
       
    ) );
      $productMetaBox->createOption( array(
        'name' => 'Preffered Nationality',
        'id' => 'nationality',
        'type' => 'text',
       
    ) );
          $productMetaBox->createOption( array(
        'name' => 'Salary',
        'id' => 'salary',
        'type' => 'text',
       
    ) );
              $productMetaBox->createOption( array(
        'name' => 'No. of vaccancies',
        'id' => 'vaccancies',
        'type' => 'text',
       
    ) );
                  $productMetaBox->createOption( array(
        'name' => 'Benefits',
        'id' => 'benefits',
        'type' => 'text',
       
    ) );
                            $productMetaBox->createOption( array(
        'name' => 'Gender',
        'id' => 'gender',
        'options' => array(
        '1' => 'Male',
        '2' => 'Female',
        '3' => 'Male/Female',
        ),
        'type' => 'radio',
        'desc' => 'Select gender',
        'default' => '1',
       
    ) );

 
}

function get_titan_option($id){
        $titan = TitanFramework::getInstance( 'genietheme' );
        return $titan->getOption( $id );      

}
?>
