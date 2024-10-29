<?php
/*
Plugin Name: Beaverlodge Pushmenu
Plugin URI: https://beaverlodgehq.com
Description: Add a off canvas menu to your site
Version: 1.0.0
Author: Beaverlodge
Author URI: https://beaverlodgehq.com
Text Domain: sw_menu
*/


define( 'SW_PUSHMENU_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'SW_PUSHMENU_URL', plugins_url( '/', __FILE__ ) );

function sw_pushmenu_module() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'includes/bb-sw-pushmenu-module.php';
    }
}
add_action( 'init', 'sw_pushmenu_module' );


function sw_pushment_load_textdomain() {
	load_plugin_textdomain( 'sw_menu', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
add_action('plugins_loaded', 'sw_pushment_load_textdomain');