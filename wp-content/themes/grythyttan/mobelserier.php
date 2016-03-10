<?php

$context = Timber::get_context();
$context['furniture_series'] = 'Klassikerserien';
Timber::render('mobelserier.twig', $context);
