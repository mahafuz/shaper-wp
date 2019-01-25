<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VEX Bootstrap 4 Product Landing Page </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <!-- Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body id="body">

    <!-- <div id="preloader-wrapper">
        <div class="pre-loader"></div>
    </div> -->

    <!-- navigation -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <?php

                    if( get_option('shaper_options')['logo_confusion'] == 0 && isset(get_option( 'shaper_options' )['shaper_header_logo'] ) )
                    printf('<a class="navbar-brand" href="%s">%s</a>', esc_url(home_url('/')), get_option( 'shaper_options' )['shaper_header_logo']);

                    if( get_option('shaper_options')['logo_confusion'] == 1 && isset(get_option( 'shaper_options' )['shaper_header_img_logo'] ) ) {
                        printf('<a href="%2$s"><img src="%1$s" /></a>', esc_url(get_option( 'shaper_options' )['shaper_header_img_logo']), esc_url(home_url('/')));
                    }
                ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php
                        wp_nav_menu([
                            'theme_location'    => 'primary_menu',
                            'menu_class'        => 'navbar-nav ml-auto text-center text-lg-left',
                            'container'         => false
                        ]);
                    ?>

                </div>
            </nav>
        </div>
    </header>
    <!-- /navigation -->