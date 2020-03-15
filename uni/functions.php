<?php

function uni_files(){ 
	//microtime,koha e reload ,cache ne js
	//marrja e skriptit js ,parametri i pare cfaredo
	wp_enqueue_script('universi-js',get_theme_file_uri('js/scripts-bundled.js'), NULL,'microtime()',true);

	// marrja e google fonts
	wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	//bootstrap link
	wp_enqueue_style('fontawsome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	// stilizimi css
    wp_enqueue_style('uni_main_styles',get_stylesheet_uri(),NULL,microtime());

}
add_action('wp_enqueue_scripts','uni_files'); 

// browser name in tab

function uni_features(){
	//shtimi imenusde (dashboard)
	register_nav_menu('header_menu_location',' Header Menu Location');

	add_theme_support('title-tag');
}

add_action('after_setup_theme','uni_features');





?>
