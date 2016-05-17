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
            'link_text' => 'En svensk historie',
            'target' => '_self'
        ),
        array(
            'name' => 'vara-mobler',
            'link' => $site_url . '/no/vara-mobler',
            'classes' => 'furniture-series',
            'link_text' => 'Våre møbler',
            'target' => '_self'
        ),
        array(
            'name' => 'reseller',
            'link' => 'http://www.grythyttan.net/hitta-butik/',
            'classes' => 'reseller',
            'link_text' => 'Forhandler',
            'target' => '_blank'
        ),
    );
    return $context;
}

