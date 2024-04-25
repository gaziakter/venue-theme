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

/** Footer Logo function */
function venue_show_footer_logo(){

    $default_logo_url = get_template_directory_uri() . '/assets/img/footer_logo.png';
    $vunue_footer_logo = get_theme_mod('footer_logo', $default_logo_url);

    if (!empty($vunue_footer_logo)) { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($vunue_footer_logo); ?>" alt="<?php echo get_bloginfo('name'); ?>"></a>
    <?php
    }
}

/** Footer about function */
function venue_show_footer_text(){

    $footer_about_text = get_theme_mod('footer_about_text', __('Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst.', 'venue'));

    if (!empty($footer_about_text)) { ?>
        <p><?php echo esc_html($footer_about_text); ?></p>
    <?php
    }
}

