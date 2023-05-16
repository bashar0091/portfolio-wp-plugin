<?php

// elementor new category added 
function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'bashar-addon',
		[
			'title' => esc_html__( 'Bashar Addon', 'lskit' ),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );

// field show function 
function show($id) {
	return get_post_meta(get_the_ID(), $id, true);
}
// field date show function 
function showDate($date) {
	$dateStr = $date;
	$dateTimeObj = DateTime::createFromFormat('d/m/Y', $dateStr);
	$year = $dateTimeObj->format('Y');
	return $year; // output the year
}


// meta box require
require_once('includes/cmb2/init.php');
require_once('includes/custom-metaboxs/meta-box.php');

// redux theme option require 
require_once('includes/redux-framework/redux-core/framework.php');
require_once('includes/theme-options/theme-options.php');