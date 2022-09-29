<?php

// Disable ssl verify **REMOVE BEFORE GOING LIVE

add_filter('https_ssl_verify', '__return_false');


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'left sidebar',
		'id'            => 'left-sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


//Theme support

function kow22_theme_support(){
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'kow22_theme_support');

//Add menu locations

function kow22_menus(){

    $locations = array(
        'primary' => 'Desktop Primary Left'
        
    );

    register_nav_menus($locations);
}

add_action('init', 'kow22_menus');


//Register Styles


function kow22_register_styles(){

    $version = wp_get_theme() ->get ('Version');

    wp_enqueue_style('kow22', get_template_directory_uri().'/style.css', array(), $version, 'all');
    wp_enqueue_style('kow22-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all');
    wp_enqueue_style('kow22-slick1', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css', array(), '1.5.8', 'all');
    wp_enqueue_style('kow22-slick2', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css', array(), '1.5.8', 'all');
    wp_enqueue_style('kow22-animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '1.0', 'all');
    

}

add_action('wp_enqueue_scripts', 'kow22_register_styles');


// Register scripts

function kow22_register_scripts(){

    
    

wp_enqueue_script('kow22-fontawesome', 'https://kit.fontawesome.com/c3ed52941f.js', array());
wp_enqueue_script('kow22-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array());
wp_enqueue_script('kow22-popper', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array(), '5.2.0', true);
wp_enqueue_script('kow22-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js', array(), '3.6.1', true); 
wp_enqueue_script('kow22-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js', array(), '3.4', true); 
wp_enqueue_script('kow22-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), '1.8.1', true);
wp_enqueue_script('kow22-main', get_template_directory_uri().'/Assets/js/main.js', array('kow22-jquery', 'kow22-slick', 'kow22-popper'), '1.1', true);
wp_enqueue_script('kow22-main', get_template_directory_uri().'/Assets/js/slick.js', array('kow22-main'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'kow22_register_scripts');



// File Block Style Edits

add_action('init', function() {
    wp_register_style('kow22-block-styles', get_template_directory_uri() . '/wp-blocks.css', false);
	register_block_style('core/file', [
		'name' => 'background-color-green',
		'label' => __('Background color green', 'txtdomain'),
        'style_handle' => 'kow22-block-styles'
	]);
});

?>