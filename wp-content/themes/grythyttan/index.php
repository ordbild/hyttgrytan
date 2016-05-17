<?php
/*
Template name: Startsida
 */
$context = Timber::get_context();
$context['body_class'] = 'home';
Timber::render('index.twig', $context);
