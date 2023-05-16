<?php

// status post type field
add_action( 'cmb2_admin_init', 'status_cufield' );
function status_cufield() {
	$cmb_field = new_cmb2_box( array(
		'id'            => 'status_extra_field',
		'title'         => esc_html__( 'Extra Field', 'bashar-portfolio' ),
		'object_types'  => array( 'status' ),
	) );
	$cmb_field->add_field( array(
		'name'       => esc_html__( 'Count Number', 'bashar-portfolio' ),
		'id'         => 'count_num',
		'type'       => 'text',
	) );
	$cmb_field->add_field( array(
		'name'       => esc_html__( 'Count Number Prefix', 'bashar-portfolio' ),
		'id'         => 'count_num_prefix',
		'type'       => 'text',
		'default'	=> '+'
	) );
}


// skill post type field
add_action( 'cmb2_admin_init', 'skill_cufield' );
function skill_cufield() {
	$cmb_field = new_cmb2_box( array(
		'id'            => 'skill_extra_field',
		'title'         => esc_html__( 'Extra Field', 'bashar-portfolio' ),
		'object_types'  => array( 'skill' ),
	) );
	$cmb_field->add_field( array(
		'name'       => esc_html__( 'Percentage', 'bashar-portfolio' ),
		'id'         => 'skill_percentage',
		'type'       => 'text',
	) );
}


// timeline post type field
add_action( 'cmb2_admin_init', 'timeline_cufield' );
function timeline_cufield() {
	$cmb_field = new_cmb2_box( array(
		'id'            => 'timeline_extra_field',
		'title'         => esc_html__( 'Extra Field', 'bashar-portfolio' ),
		'object_types'  => array( 'timeline' ),
	) );
	$cmb_field->add_field( array(
		'name'       => esc_html__( 'Start date', 'bashar-portfolio' ),
		'id'         => 'timeline_start_date',
		'type'       => 'text_date',
	) );
	$cmb_field->add_field( array(
		'name'       => esc_html__( 'End date', 'bashar-portfolio' ),
		'id'         => 'timeline_end_date',
		'type'       => 'text_date',
	) );
	$cmb_field->add_field( array(
		'name'       => esc_html__( 'Present', 'bashar-portfolio' ),
		'id'         => 'timeline_present',
		'type'       => 'checkbox',
	) );
	$cmb_field->add_field( array(
		'name'       => esc_html__( 'Tagline', 'bashar-portfolio' ),
		'id'         => 'timeline_tagline',
		'type'       => 'text',
	) );
}


// portfolio post type field
add_action( 'cmb2_admin_init', 'portfolio_cufield' );
function portfolio_cufield() {
	$cmb_field = new_cmb2_box( array(
		'id'            => 'portfolio_extra_field',
		'title'         => esc_html__( 'Extra Field', 'bashar-portfolio' ),
		'object_types'  => array( 'portfolio' ),
	) );
	$cmb_field->add_field( array(
		'name'       => esc_html__( 'Website Url', 'bashar-portfolio' ),
		'id'         => 'portfolio_website_url',
		'type'       => 'text',
	) );
}