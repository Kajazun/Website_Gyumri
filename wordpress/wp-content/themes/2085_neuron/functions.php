<?php

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );




function custom_theme_setup(){ 
register_nav_menus(array(
'primary' =>__('Primary menu'),
'footer' => __('Footer menu')

));

    add_theme_support('post-thumbnails');
    add_image_size('my-image',1200,300,array('left','top'));
    add_image_size('page-image',1200,500,array('left','top'));
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function widgetsInit(){
    register_sidebar(array(
    'id'=> 'sidebar1',
    'name'=>'Sidebar'
    
    ));
}

add_action('widgets_init', 'widgetsInit');
?>

