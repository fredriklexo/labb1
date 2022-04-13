<?php 

/* --------Registers theme support for a given feature. ------------ */

add_theme_support('post-thumbnails'); 
add_theme_support('menus');
add_theme_support('widgets');

    
/* ------------Register menu---------------- */

function registerMenu() {

    register_nav_menu('header_nav', 'Header menu');
    register_nav_menu('footer_nav', 'Footer menu');
    register_nav_menu('subpage_menu', 'Subpage menu');
} 

add_action('after_setup_theme', 'registerMenu'); //

/* ------------------------------------ */

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1', 'all');

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.1', 'all');
    
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array ( 'jquery' ), 1.1, true);

    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
    
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/* ------------------------------------ */

function labbtheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'labbtheme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar kolum 1', 'labbtheme' ),
        'id'            => 'footer-colum-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar kolum 2', 'labbtheme' ),
        'id'            => 'footer-colum-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar kolum 3', 'labbtheme' ),
        'id'            => 'footer-colum-3',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'labbtheme_widgets_init' );


?>