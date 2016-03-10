<?php
global $params;

$series = new TimberTerm($params['series']);
$furniture_series = get_terms( 'produktserier', array(
    'hide_empty' => false,
    'exclude' => $params['series']
));


$context = Timber::get_context();
$context['body_class'] = 'mobelserie ' . $params['series'];
$context['furniture_series'] = $furniture_series;
$context['series'] = $series;
Timber::render('mobelserie.twig', $context);