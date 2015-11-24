<?php
function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
/*--- New Widget --- */
    register_sidebar( array(
        'name' => ('Footer Widget One'),
        'id' => 'footer-widget-one',
        'description' => 'First widget for our footer', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
    /*--- Second New Widget --- */
        register_sidebar( array(
        'name' => ('SideBar Widget One'),
        'id' => 'sidebar-widget-one',
        'description' => 'Sidebar Wdiget', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));

}

// Removes ul class from wp_nav_menu
function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}

add_filter( 'wp_nav_menu', 'remove_ul' );

add_action('widgets_init', 'blank_widgets_init');

add_theme_support('menus');

add_theme_support( 'post-thumbnails' );

add_theme_support( 'html5', array( 'search-form' ) );

?>
