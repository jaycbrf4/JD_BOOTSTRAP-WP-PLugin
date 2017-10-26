<?php 

/*
Plugin Name: JD_BOOTSTRAP- Empty Plugin
Description: The description would go here
Version: 0.1
License: GPL
Author: Jay Deutsch
Author URI: http://HudsonValleyWebDesign.net
*/


//if accessed directly die
if ( !defined('ABSPATH')){
  die;
}



add_action( 'wp_enqueue_scripts', 'jdbs_custom_stylesheet' , 11);
/**
 * Load plugin styles and JS.
 */
function jdbs_custom_stylesheet() {

  if ( apply_filters( 'jdbs_load_styles', true ) ) {
    wp_enqueue_style( 'jdbs_custom_stylsheet', plugin_dir_url(__FILE__) . 'css/custom-styles.css' );
    wp_enqueue_script( 'jdbs_custom_script', plugin_dir_url(__FILE__) . 'js/custom-script.js', array('jquery'),'0', false );
  }
}
