<?php 

new \Kirki\Panel(
	'venue_pannel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Venue Options', 'venue' ),
		'description' => esc_html__( 'Header and footer logo options', 'venue' ),
	]
);

/** Header and Footer logo sitting */
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