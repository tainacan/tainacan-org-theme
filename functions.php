<?php

function tainacan_org_enqueue_styles() {
   
	$parent_style = 'panoramic';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'tainacan-org',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
	
}
add_action( 'wp_enqueue_scripts', 'tainacan_org_enqueue_styles', 99 );
