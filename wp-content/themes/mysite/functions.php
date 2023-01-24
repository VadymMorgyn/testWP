<?php 

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'fonts', "https://fonts.googleapis.com" );
	wp_enqueue_style( 'fonts-gstatic', "https://fonts.gstatic.com" );
	wp_enqueue_style( 'fontsMon', "https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;900&display=swap" );
	wp_enqueue_style( 'fontsRead', "https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap" );
	wp_enqueue_style( 'fontsPopp', "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

	wp_deregister_script('jquery');
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), 'null', true );
	
	wp_enqueue_script('jquery');

	wp_deregister_script('slick');
	wp_register_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), 'null', true );
	
	wp_enqueue_script( 'slick');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
}
);

add_theme_support('post-thumbnails' );
add_theme_support('title-tag' );
add_theme_support('custom-logo' );

?>