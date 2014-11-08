<?php
register_nav_menus( array(
'menu' => 'Menu Principal',
));

add_theme_support( 'post-thumbnails' );
add_image_size( 'slider_thumbs', 1030, 575, true);
add_image_size( 'list_articles_thumbs', 570, 318, true);
add_image_size( 'article_image', 770, 514, true);

register_sidebar(array(
'name' => 'Sidebar-Article',
'before_widget' => '<widget>',
'after_widget' => '</widget>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

function programas_init() {
    $args = array(
      'label' => 'Noticias',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'programas'),
        'query_var' => true,
		'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'programas', $args );
}
add_action( 'init', 'programas_init' );
?>