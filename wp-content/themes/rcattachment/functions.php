<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

function portfolio_scripts() {
 if ( is_home() ) 
 wp_enqueue_script( 'fgfgj', get_template_directory_uri() . '/libs/Scrollify-master/jquery.scrollify.js', array( 'jquery' ), '2.9', true );
 wp_enqueue_script( 'izotope', get_template_directory_uri() . '/libs/PageScroll2id/PageScroll2id.min.js', array( 'jquery' ), '2.9', true );
 }
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

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
        'eik_menu' => 'Боковое меню EIK', 
    ));

function parent_category_is($id) {
    $category = get_category(get_query_var('cat'));
    if ($category->parent == $id) {
        return true;
    }
    return false;
}

function get_category_parents_my( $id, $link = false, $separator = ',', $nicename = false, $visited = array() ) {
    $chain = '';
    $parent = get_term( $id, 'category' );
    if ( is_wp_error( $parent ) )
        return $parent;
    $name = $parent->term_id;

    if ( $parent->parent && ( $parent->parent != $parent->term_id ) && !in_array( $parent->parent, $visited ) ) {
        $visited[] = $parent->parent;
        $chain .= get_category_parents_my( $parent->parent, $link, $separator, $nicename, $visited );
    }
    $chain .= $name.$separator;
    return $chain;
}

function main_parent_is($parent) {
    return in_array($parent, explode(",", get_category_parents_my(get_query_var('cat'))));
}

