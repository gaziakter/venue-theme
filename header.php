<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <?php endif; ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 flex justify-between">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <?php venue_show_header_logo(); ?>
                        <nav id="primary-nav" class="dropdown cf">
                        <?php venue_main_menu(); ?>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>