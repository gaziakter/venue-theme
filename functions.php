<?php 

    /**
 * Essential theme supports
 * */
function venue_support(){

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** Register Menus */
    register_nav_menus( array(
        'main-menu'     =>  __('Main Menu', 'persona'),
        'side-menu'     =>  __('Side Menu', 'persona'),
        'footer-menu'     =>  __('Footer Menu', 'persona'),
    ) );

    /** Remove blog editior */
    remove_theme_support( 'widgets-block-editor' );

}

add_action( 'after_setup_theme', 'venue_support' );





/** Include files */
include_once('inc/common/scripts.php');