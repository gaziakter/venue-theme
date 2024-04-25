<?php 

new \Kirki\Panel(
	'venue_pannel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Venue Options', 'venue' ),
		'description' => esc_html__( 'Header and footer logo options', 'venue' ),
	]
);

/** Header logo section */
function venue_header_logo(){
    new \Kirki\Section(
        'venue_header_logo',
        [
            'title'       => esc_html__( 'Header logo Section', 'venue' ),
            'description' => esc_html__( 'Insert header logo', 'venue' ),
            'panel'       => 'venue_pannel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo', 'venue' ),
            'description' => esc_html__( 'Please upload your logo here. Recommended logo size: 220px x 100px', 'venue' ),
            'section'     => 'venue_header_logo',
            'default'     => get_template_directory_uri().'/assets/img/logo.png'
        ]
    );

}
venue_header_logo();

/** Header and Footer logo sitting */
function venue_footer_about(){
    new \Kirki\Section(
        'venue_footer_about',
        [
            'title'       => esc_html__( 'Footer About Section', 'venue' ),
            'description' => esc_html__( 'Footer about section content', 'venue' ),
            'panel'       => 'venue_pannel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_logo',
            'label'       => esc_html__( 'Footer Logo', 'venue' ),
            'description' => esc_html__( 'Please upload your logo here. Recommended logo size: 160px x 34px', 'venue' ),
            'section'     => 'venue_footer_about',
            'default'     => get_template_directory_uri().'/assets/img/footer_logo.png'
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'footer_about_text',
            'label'       => esc_html__( 'Footer About Text', 'venue' ),
            'section'     => 'venue_footer_about',
            'default'     => esc_html__( 'Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst.', 'venue' ),
        ]
    );

}
venue_footer_about();


/** Footer social setion */
function venue_footer_social(){
    new \Kirki\Section(
        'venue_footer_section',
        [
            'title'       => esc_html__( 'Footer Social Section', 'venue' ),
            'description' => esc_html__( 'Footer social link section', 'venue' ),
            'panel'       => 'venue_pannel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'venue_facebook',
            'label'    => esc_html__( 'Facebook URL', 'venue' ),
            'section'  => 'venue_footer_section',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'venue_twitter',
            'label'    => esc_html__( 'Twitter URL', 'venue' ),
            'section'  => 'venue_footer_section',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'venue_linkedin',
            'label'    => esc_html__( 'Linkedin URL', 'venue' ),
            'section'  => 'venue_footer_section',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'venue_rss',
            'label'    => esc_html__( 'RSS URL', 'venue' ),
            'section'  => 'venue_footer_section',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'venue_dribbble',
            'label'    => esc_html__( 'Dribble URL', 'venue' ),
            'section'  => 'venue_footer_section',
            'default'  => esc_html__( '#', 'venue' ),
            'priority' => 10,
        ]
    );
}
venue_footer_social();

/** Footer contact section */
function venue_footer_contact_section(){
    new \Kirki\Section(
        'venue_footer_contact',
        [
            'title'       => esc_html__( 'Footer Contact Section', 'venue' ),
            'description' => esc_html__( 'Footer contact section content', 'venue' ),
            'panel'       => 'venue_pannel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'footer_contct_text',
            'label'       => esc_html__( 'Footer Contact Text', 'venue' ),
            'section'     => 'venue_footer_contact',
            'default'     => esc_html__( 'Praesent iaculis gravida elementum. Proin fermentum neque facilisis semper pharetra. Sed vestibulum vehicula tincidunt.', 'venue' ),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'venue_footer_phone',
            'label'    => esc_html__( 'Footer Phone', 'venue' ),
            'section'  => 'venue_footer_contact',
            'default'  => esc_html__( '010-050-0550', 'venue' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'venue_footer_email',
            'label'    => esc_html__( 'Footer Email', 'venue' ),
            'section'  => 'venue_footer_contact',
            'default'  => esc_html__( 'hi@company.co', 'venue' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'venue_footer_address',
            'label'    => esc_html__( 'Footer Address', 'venue' ),
            'section'  => 'venue_footer_contact',
            'default'  => esc_html__( 'company.co', 'venue' ),
            'priority' => 10,
        ]
    );

}
venue_footer_contact_section();