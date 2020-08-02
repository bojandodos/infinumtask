<?php

/*
    ==========================================
     Include scripts
    ==========================================
*/

function main_enqueue() {

	//css

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

	
	//js
     
	wp_deregister_script('jquery');
	wp_register_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js", true, null);
	wp_enqueue_script('jquery');
  

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'main_enqueue');


 
