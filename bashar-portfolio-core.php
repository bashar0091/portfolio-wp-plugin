<?php
/**
 * Plugin Name: Bashar Portfolio Core
 * Description: Plugin Made with Bashar.
 * Version:     1.0.0
 * Author:      Awal Bashar
 * Author URI:  https://akborweb.com/
 * Text Domain: bashar-portfolio
 */

function register_portfolio_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/portfolio-banner-widget.php' );

	$widgets_manager->register( new \portfolio_banner_widget() );

}
add_action( 'elementor/widgets/register', 'register_portfolio_widget' );

// function require 
require_once('helper-function.php');