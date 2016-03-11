<?php
$context = Timber::get_context();
$context['active_menu_item'] = 'vara-mobler';
Timber::render('vara-mobler.twig', $context);
