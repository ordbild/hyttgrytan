<?php
add_filter( 'timber/context', 'add_menu_to_timber' );
function add_menu_to_timber( $context ) {
    $site_url = $context['site']->url;
    $context['active_menu_item'] = 'home';
    $context['menu_items'] = array(
        array(
            'name' => 'home',
            'link' => $site_url,
            'classes' => 'history',
            'link_text' => 'En svensk historia',
            'target' => '_self'
        ),
        array(
            'name' => 'vara-mobler',
            'link' => $site_url . '/vara-mobler',
            'classes' => 'furniture-series',
            'link_text' => 'Våra möbler',
            'target' => '_self'
        ),
        array(
            'name' => 'reseller',
            'link' => '',
            'classes' => 'reseller',
            'link_text' => 'Återförsäljare',
            'target' => '_blank'
        ),
    );
    return $context;
}

