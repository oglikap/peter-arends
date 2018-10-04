<?php

/**************************
Add scripts and stylesheets
***************************/

function arends_scripts() {
  wp_enqueue_style( 'uikit_css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/css/uikit.min.css' );
  wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );
  wp_enqueue_script( 'uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'uikit_icons_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit-icons.min.js' );
  wp_enqueue_script( 'uikit_lightbox_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/components/lightbox.min.js' );
  wp_enqueue_script( 'uikit_slider_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/components/slider.min.js' );
}
add_action( 'wp_enqueue_scripts', 'arends_scripts' );


/**********
Custom menu
**********/
function wp_arends_menu() {
  register_nav_menu( 'arends-menu', __('Arends Menu')  );
}
add_action( 'init', 'wp_arends_menu' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'uk-active';
    }
    return $classes;
}


/**********************************************************************************
arends_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/
function arends_theme_support() {

  /* post formats */
  add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

  /* post thumbnails */
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'websites', 'toneel' ) );

  /* HTML5 */
  add_theme_support( 'html5' );

  /* automatic feed links */
  add_theme_support( 'automatic-feed-links' );

  // Wordpress titles
  add_theme_support( 'title-tag' );

  /* Logo support */
  add_theme_support( 'custom-logo', array(
  	'height'      => 240, // set to your dimensions
  	'width'       => 240,
  	'flex-height' => true,
  	'flex-width'  => true,
  ) );

}
add_action( 'after_setup_theme', 'arends_theme_support' );
