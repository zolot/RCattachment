<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

/**
*сайдбар
**/
register_sidebar(array(
    'name' => 'Виджеты сайдбара',
    'id' => 'sidebar',
    'description' => 'Здесь размещайте виджеты сайдбара',
    'before_widget' => '<div class="banner">',
    'after_widget' => '</div>',
    'title' => '') 
     );
// Скрываем заголовок виджета через символ "!"
add_filter( 'widget_title', 'hide_widget_title' );
function hide_widget_title( $title ) {
    if ( empty( $title ) ) return '';
    if ( $title[0] == '!' ) return '';
    return $title;
}

add_theme_support('post-thumbnails' );

register_nav_menus( array( 
        'primary' => __( 'Main Menu', 'rcattachment' ),
        'impulse_menu' => 'Боковое меню Impulse', 
    ));


