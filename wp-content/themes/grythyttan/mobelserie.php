<?php
global $params;

$series = new TimberTerm($params['series']);
$furniture_series = get_terms( 'produktserier', array(
    'hide_empty' => false,
    'exclude' => $params['series']
));


$context = Timber::get_context();
$context['body_class'] = 'mobelserie ' . $params['series'];
$context['active_menu_item'] = 'vara-mobler';
$context['all_furniture_series'] = $furniture_series;
$context['series'] = $series;
$context['posts'] = Timber::get_posts( array(
    'post_type' => 'produkter',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'produktserier',
            'field' => 'slug',
            'terms' => array($params['series'])
        )
    )
) );
Timber::render('mobelserie.twig', $context);
