<?php
/**
 * Content
 *
 * 1. Custom post types
 * 2. Enqueue scripts and styles
 * 3. Images
 * 4. Filters
 * 5. Actions
 */
require 'includes/custom-post-types.php';

require 'includes/enqueue-scripts-styles.php';

require 'includes/images/images.php';
require 'includes/images/custom-image-sizes.php';

require 'includes/filters.php';

require 'includes/actions.php';

Timber::add_route('vara-mobler', function() {
    Timber::load_template('vara-mobler.php');
});
Timber::add_route('vara-mobler/:series', function( $params ) {
    $series = array(
        'klassikerserien' => 'Klassikerserien',
        'high-tech' => 'High-tech',
        'bryggeriserien' => 'Bryggeriserien'
    );
    $context = array();
    $context['series'] = $params['series'];
    $context['series_name'] = $series[$params['series']];
    Timber::load_template('mobelserie.php', null, 200, $context);
});
