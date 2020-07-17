function mrc_adding_styles() {
    wp_enqueue_style( 'mrcstyle', get_stylesheet_directory_uri() . '/css/mrcstyle.css', false, '1.1' );
}
add_action( 'wp_enqueue_scripts', 'mrc_adding_styles' );  
