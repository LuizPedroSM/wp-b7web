<?php 
function bb_colors_customizer($wp_customize) 
{
    // Settings
    $wp_customize->add_setting('bb_colorButton', array('default' => '#455482'));
    $wp_customize->add_setting('bb_colorTitle', array('default' => '#2d3a64'));

    // Sections
    $wp_customize->add_section('bb_colors_section', array(
        'title' => 'Cores',
        'priority' => '2'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'bb_colorButton',
            array(
                'label' => 'Cor do Botão',
                'section' => 'bb_colors_section',
                'settings' => 'bb_colorButton'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'bb_colorTitle',
            array(
                'label' => 'Cor do titulo',
                'section' => 'bb_colors_section',
                'settings' => 'bb_colorTitle'
            )
        )
    );
}