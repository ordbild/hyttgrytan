<?php
function enqueue_scripts_and_styles () {
	$themeDir = get_template_directory_uri();
	$assetsDir = $themeDir . '/assets';
	$assetsPath = get_stylesheet_directory() . '/assets';

	// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	#wp_enqueue_style( 'stylesheet', $assetsDir.'/css/style.css', null, filemtime($assetsPath.'/css/style.css'), null );

	// wp_enqueue_scripts($handle, $src, $deps, $ver, $in_footer);
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

function get_stylesheets() {
	$themeDir = get_template_directory_uri();
	$assetsDir = $themeDir . '/assets';

    $stylesheets = array();
    $stylesheets[] = $assetsDir . '/css/fonts.css';
    if (ENV == 'local') {
        $stylesheets[] = $assetsDir . '/css/normalize.css';    
        $stylesheets[] = $assetsDir . '/css/boilerplate.css';    
        $stylesheets[] = $assetsDir . '/css/slick.css';
        $stylesheets[] = $assetsDir . '/css/jquery.lazyloadxt.fadein.min.css';
        $stylesheets[] = $assetsDir . '/css/style.css';
    } else {
        $stylesheets[] = $assetsDir . '/css/style.min.css?ver=20160314';
    }

    $link_tags = array();
    if (ENV == 'local' || !is_home()) {
        $link_attributes = 'rel="stylesheet"';
    } else {
        $link_attributes = 'rel="preload" as="style" onload="this.rel=\'stylesheet\'"';
    }
    foreach ($stylesheets as $stylesheet) {
        $link_tags[] = '<link '.$link_attributes.' href="'.$stylesheet.'">' . "\n"; 
    }

    if (ENV != 'local') {
        $loadCSS = file_get_contents(get_stylesheet_directory().'/assets/js/min/loadCSS-min.js');
        $preload = file_get_contents(get_stylesheet_directory().'/assets/js/min/cssrelpreload-min.js');
        $critical_css = file_get_contents(get_stylesheet_directory().'/assets/css/critical.css');
        $critical_css = str_replace('../img', get_template_directory_uri().'/assets/img', $critical_css);
        if (is_home()) {
            $link_tags[] = '<style>'.$critical_css.'</style>';
            $link_tags[] = '<script>'.$loadCSS.$preload.'</script>';
        }
    }


    return implode( $link_tags );
}

function get_scripts()
{
	$themeDir = get_template_directory_uri();
	$assetsDir = $themeDir . '/assets';

    $scripts = array();
    if (ENV == 'local') {
        $scripts[] = $assetsDir . '/js/jquery.min.js';
        $scripts[] = $assetsDir . '/js/jquery.hitstop.js';
        $scripts[] = $assetsDir . '/js/picturefill.js';
        $scripts[] = $assetsDir . '/js/fontfaceonload.js';
        $scripts[] = $assetsDir . '/js/slick.min.js';
        $scripts[] = $assetsDir . '/js/jquery.lazyloadxt.js';
        $scripts[] = $assetsDir . '/js/jquery.lazyloadxt.bg.js';
        $scripts[] = $assetsDir . '/js/jquery.lazyloadxt.srcset.js';
        $scripts[] = $assetsDir . '/js/app.js';
    } else {
        $scripts[] = $assetsDir . '/js/min/scripts-min.js';
    }

    $script_tags = array();

    if (ENV != 'local') {
        $loadJS = file_get_contents(get_stylesheet_directory().'/assets/js/min/loadJS-min.js');
        $script_tags[] = '<script>'.$loadJS.'</script>';
    }

    foreach ($scripts as $script) {
        if (ENV == 'local') {
            $script_tags[] = '<script src="'.$script.'"></script>';
        } else {
            $script_tags[] = '<script>loadJS("'.$script.'");</script>';
        }
    }

    return implode( $script_tags );
}

