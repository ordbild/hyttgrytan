<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Grythyttan stålmöbler</title>
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/boilerplate.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/fonts.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/style.css">
        <!--[if lt IE 9]>
<script src="<?php bloginfo('template_directory');?>/assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <![endif]-->
        <?php wp_head();?>
    </head>
    <body>

        <header class="site-header">
            <div class="inner clearfix">
                <div class="brand">
                    <div class="logo">
                        <a href="/">
                            <picture>
                            <source type="image/svg+xml" srcset="<?php bloginfo('template_directory');?>/assets/img/grythyttan-logo.svg">
                            <img src="<?php bloginfo('template_directory');?>/assets/img/grythyttan-logo.png" alt="Grythyttan stålmöbler">
                            </picture>
                        </a>
                    </div>
                    <div class="social-media-icons">
                        <ul>
                            <li class="social-media-icon icon-facebook">
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/icons/icon-fb-wo-box.svg" alt="Facebook">
                                </a> 
                            </li>
                            <li class="social-media-icon icon-twitter">
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/icons/icon-twitter.svg" alt="Twitter">
                                </a>    
                            </li>
                            <li class="social-media-icon icon-instagram">
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/icons/icon-instagram.svg" alt="Instagram">
                                </a> 
                            </li>
                        </ul>
                    </div>
                </div>
                
                <nav class="main-menu">
                    <ul>
                        <li class="main-menu-item history">
                            <a href="/" class="active">
                                En svensk historia
                            </a>
                        </li>
                        <li class="main-menu-item furniture-series">
                            <a href="<?php echo home_url();?>/mobelserier">
                                Våra möbler
                            </a>
                        </li>
                        <li class="main-menu-item reseller">
                            <a href="http://www.grythyttan.net/hitta-butik/">
                                Återförsäljare
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

