<?php
function setup_theme()
{
    add_theme_support('title-tag');
    load_theme_textdomain('thorat',get_template_directory_uri().'/languages');

    register_nav_menus(array('main-menu' => __('Primary Menu','thorat')));
}
add_action( 'after_setup_theme', 'setup_theme' );

function theme_css_js_enqueue( )
{
    //wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    // CSS Load
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css', array(),'5.01','all' );
    wp_enqueue_style('linericon',get_template_directory_uri().'/vendors/linericon/style.css', array(),'1.01','all' );
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css', array(),'1.01','all' );
    wp_enqueue_style('owl-carousel',get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.css', array(),'1.01','all' );
    wp_enqueue_style('lightbox',get_template_directory_uri().'/vendors/lightbox/simpleLightbox.css', array(),'1.01','all' );
    wp_enqueue_style('nice-select',get_template_directory_uri().'/vendors/nice-select/css/nice-select.css', array(),'1.01','all' );
    wp_enqueue_style('animate-css',get_template_directory_uri().'/vendors/animate-css/animate.css', array(),'1.01','all' );
    wp_enqueue_style('flaticon',get_template_directory_uri().'/vendors/flaticon/flaticon.css', array(),'1.01','all' );
    wp_enqueue_style('css',get_template_directory_uri().'/css/style.css', array(),'1.01','all' );
    wp_enqueue_style('css-responsive',get_template_directory_uri().'/css/responsive.css', array(),'1.01','all' );

    wp_enqueue_style('style-css',get_template_directory_uri());

    // JS Load
    //wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
    wp_enqueue_script('jquery-3.2.1',get_template_directory_uri().'/js/jquery-3.2.1.min.js', array('jquery'),'3.2',true);
    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.js', array('jquery'),'1.0',true);
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('stellar',get_template_directory_uri().'/js/stellar.js', array('jquery'),'1.0',true);
    wp_enqueue_script('simpleLightbox',get_template_directory_uri().'/vendors/lightbox/simpleLightbox.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('nice-select',get_template_directory_uri().'/vendors/nice-select/js/jquery.nice-select.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('imagesloaded',get_template_directory_uri().'/vendors/isotope/imagesloaded.pkgd.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('isotope',get_template_directory_uri().'/vendors/isotope/isotope-min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('owl-carousel',get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('ajaxchimp',get_template_directory_uri().'/js/jquery.ajaxchimp.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('waypoints',get_template_directory_uri().'/vendors/counter-up/jquery.waypoints.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('counterup',get_template_directory_uri().'/vendors/counter-up/jquery.counterup.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('mail',get_template_directory_uri().'/js/mail-script.js', array('jquery'),'1.0',true);
    wp_enqueue_script('maps',get_template_directory_uri().'/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE');
    wp_enqueue_script('gmaps',get_template_directory_uri().'/js/gmaps.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('theme',get_template_directory_uri().'/js/theme.js', array('jquery'),'1.0',true);
}
add_action( 'wp_enqueue_scripts', 'theme_css_js_enqueue' );

add_filter('nav_menu_css_class','so_37823371_menu_item_class',10,4);
function so_37823371_menu_item_class($classes,$item,$arge,$depth){
    $classes[]="nav-link col-xs-2";
    return $classes;

}
?>