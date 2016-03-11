<?php
/*
 * Plugin name: Post type Produkter
 */
add_action( 'init', 'create_post_type_produkter' );
function create_post_type_produkter()
{
    register_post_type( 'produkter', array(
        'labels' => array(
            'name' => 'Produkter',
            'singular_name' => 'Produkt'
        ),
        'public' => true,
        'supports' => array( 'title' ),
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'thumbnail')
    ) );

    register_taxonomy( 'produktserier', 'produkter', array(
        'label' => 'Produktserier',
        'public' => false,
        'show_ui' => true, 
        'hierarchical' => true,
    ) );
}

