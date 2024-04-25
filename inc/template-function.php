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

/** footer menu function */
function venue_footer_menu(){
    wp_nav_menu(
        array(
            'theme_location'    => 'footer-menu',
            'container' => false, // Disable the menu container
            'menu_class' => 'menu', // Add a class to the <ul> element
            'items_wrap' => '<ul>%3$s</ul>', // Customize the markup for <ul>
            'link_before' => '<i class="fa fa-stop"></i>', // Add font awesome icon before the link text
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

/** Venue social function */
function venue_social_icon(){

    $venue_facebook = get_theme_mod('venue_facebook', __('#', 'venue'));
    $venue_twitter = get_theme_mod('venue_twitter', __('#', 'venue'));
    $venue_linkedin = get_theme_mod('venue_linkedin', __('#', 'venue'));
    $venue_rss = get_theme_mod('venue_rss', __('#', 'venue'));
    $venue_dribbble = get_theme_mod('venue_dribbble', __('#', 'venue'));
    ?>

    <?php if (!empty($venue_facebook)) : ?>
        <a target="_blank" href="<?php echo esc_url($venue_facebook); ?>"><i class="fa fa-facebook"></i></a>
    <?php endif; ?>
    <?php if (!empty($venue_twitter)) : ?>
        <a target="_blank" href="<?php echo esc_url($venue_twitter); ?>"><i class="fa fa-twitter"></i></a>
    <?php endif; ?>
    <?php if (!empty($venue_linkedin)) : ?>
        <a target="_blank" href="<?php echo esc_url($venue_linkedin); ?>"><i class="fa fa-linkedin"></i></a>
    <?php endif; ?>
    <?php if (!empty($venue_rss)) : ?>
        <a target="_blank" href="<?php echo esc_url($venue_rss); ?>"><i class="fa fa-rss"></i></a>
    <?php endif; ?>
    <?php if (!empty($venue_dribbble)) : ?>
        <a target="_blank" href="<?php echo esc_url($venue_dribbble); ?>"><i class="fa fa-dribbble"></i></a>
    <?php endif; ?>

<?php     
}

/** Footer contact text */
function footer_contact_text(){

    $footer_contact_text = get_theme_mod('footer_contct_text', __('Praesent iaculis gravida elementum. Proin fermentum neque facilisis semper pharetra. Sed vestibulum vehicula tincidunt.', 'venue'));

    if (!empty($footer_contact_text)) { ?>
        <p><?php echo esc_html($footer_contact_text); ?></p>
    <?php
    }
}

/** Footer contact info */
function footer_contact_info(){

    $venue_footer_phone = get_theme_mod('venue_footer_phone', __('010-050-0550', 'venue'));
    $venue_footer_email = get_theme_mod('venue_footer_email', __('hi@company.co', 'venue'));
    $venue_footer_address = get_theme_mod('venue_footer_address', __('company.co', 'venue'));
    ?>

    <?php if (!empty($venue_footer_phone)) : ?>
        <li><span>Phone:</span><a href="tel:<?php echo esc_url($venue_footer_phone); ?>"><?php echo esc_html($venue_footer_phone); ?></a></li>
    <?php endif; ?>
    <?php if (!empty($venue_footer_email)) : ?>
        <li><span>Email:</span><a href="mailto:<?php echo esc_url($venue_footer_email); ?>"><?php echo esc_html($venue_footer_email); ?></a></li>
    <?php endif; ?>
    <?php if (!empty($venue_footer_address)) : ?>
        <li><span>Address:</span><a target="_blank" href="<?php echo esc_url($venue_footer_address); ?>"><?php echo esc_html($venue_footer_address); ?></a></li>
    <?php endif; ?>

    <?php
}


/** Footer copyright text */
function venue_footer_copyright_show(){

    $venue_footer_copyright = get_theme_mod('venue_copyright', __('Copyright © 2018 Company Name - Design: Template Mo', 'venue'));

    if (!empty($venue_footer_copyright)) { ?>
        <p><?php echo wp_kses_post($venue_footer_copyright); ?></p>
    <?php
    }
}