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

/** Main function */
function venue_main_menu(){
    wp_nav_menu(
        array(
            'theme_location'    => 'main-menu',
            'menu_class' => 'dropdown menu',
            'fallback_cb'       => 'Venue_Walker_Nav_Menu::fallcak',
            'walker'            => new Venue_Walker_Nav_Menu
        )
    );
}