<?php

/* Voce Theme and Child Theme Support */
require_once( get_template_directory() . '/inc/init-functions.php' );

function child_front_scripts(){
	wp_enqueue_style( 'child-style', THEME_STYLESHEET, null, '19.06.23zza');
}
add_action('wp_enqueue_scripts', 'child_front_scripts', 25);

/* Add Google Fonts Support */
function sg_google_fonts() {
	$query_args = array(
		'family' => 'Open+Sans|Source+Code+Pro|Merriweather:400,400i,600,600i,800&dispay=swap',
		'subset' => 'latin,latin-ext'
	);
	wp_register_style( 'sg_google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }
            
add_action('wp_enqueue_scripts', 'sg_google_fonts');
