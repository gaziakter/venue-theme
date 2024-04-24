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
        'main-menu'     =>  __('Main Menu', 'venue'),
        'footer-menu'   =>  __('Footer Menu', 'venue'),
    ) );

    /** Remove blog editior */
    remove_theme_support( 'widgets-block-editor' );

}

add_action( 'after_setup_theme', 'venue_support' );





/** Include files */
include_once('inc/common/scripts.php');
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');

if(class_exists('kirki')){
    include_once('inc/venue-kirki.php');
}