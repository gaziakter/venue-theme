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