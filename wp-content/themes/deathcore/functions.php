<?php

// Inicialization theme styles and scripts
add_action( 'wp_enqueue_scripts', 'theme_deathcore_scripts' );

function theme_deathcore_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap' );
}