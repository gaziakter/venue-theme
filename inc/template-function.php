<?php

/** Logo function */
function venue_show_header_logo(){

    $default_logo_url = get_template_directory_uri() . '/assets/img/logo.png';
    $vunue_header_logo = get_theme_mod('header_logo', $default_logo_url);

    if (!empty($vunue_header_logo)) { ?>
        <a class="flex" href="<?php echo esc_url(home_url('/')); ?>"><div class="logo"><img src="<?php echo esc_url($vunue_header_logo); ?>" alt="<?php echo get_bloginfo('name'); ?>"></div></a>
    <?php
    }
}