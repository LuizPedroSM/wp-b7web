<?php 
function bb_testimonial_customizer($wp_customize)
{
    // Settings
    $wp_customize->add_setting('bb_testi1_url', array('default' => ''));
    $wp_customize->add_setting('bb_testi1_txt', array('default' => ''));
    $wp_customize->add_setting('bb_testi1_author', array('default' => ''));
    
    $wp_customize->add_setting('bb_testi2_url', array('default' => ''));
    $wp_customize->add_setting('bb_testi2_txt', array('default' => ''));
    $wp_customize->add_setting('bb_testi2_author', array('default' => ''));
    
    $wp_customize->add_setting('bb_testi3_url', array('default' => ''));
    $wp_customize->add_setting('bb_testi3_txt', array('default' => ''));
    $wp_customize->add_setting('bb_testi3_author', array('default' => ''));
    
    $wp_customize->add_setting('bb_testi4_url', array('default' => ''));
    $wp_customize->add_setting('bb_testi4_txt', array('default' => ''));
    $wp_customize->add_setting('bb_testi4_author', array('default' => ''));
    
    $wp_customize->add_setting('bb_testi5_url', array('default' => ''));
    $wp_customize->add_setting('bb_testi5_txt', array('default' => ''));
    $wp_customize->add_setting('bb_testi5_author', array('default' => ''));
    
    // Panel
    $wp_customize->add_panel('bb_testimonials', array(
        'title' => 'Depoimentos',
        'priority' => 10
    ));

    // Sections
    $wp_customize->add_section('bb_testi1', array(
        'title' => 'Depoimento 1',
        'priority' => 1,
        'panel' => 'bb_testimonials'
    ));
    $wp_customize->add_section('bb_testi2', array(
        'title' => 'Depoimento 2',
        'priority' => 2,
        'panel' => 'bb_testimonials'
    ));
    $wp_customize->add_section('bb_testi3', array(
        'title' => 'Depoimento 3',
        'priority' => 3,
        'panel' => 'bb_testimonials'
    ));
    $wp_customize->add_section('bb_testi4', array(
        'title' => 'Depoimento 4',
        'priority' => 4,
        'panel' => 'bb_testimonials'
    ));
    $wp_customize->add_section('bb_testi5', array(
        'title' => 'Depoimento 5',
        'priority' => 5,
        'panel' => 'bb_testimonials'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi1_txt',
            array(
                'label' => 'Texto: ',
                'section' => 'bb_testi1',
                'settings' => 'bb_testi1_txt',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi2_txt',
            array(
                'label' => 'Texto: ',
                'section' => 'bb_testi2',
                'settings' => 'bb_testi2_txt',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi3_txt',
            array(
                'label' => 'Texto: ',
                'section' => 'bb_testi3',
                'settings' => 'bb_testi3_txt',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi4_txt',
            array(
                'label' => 'Texto: ',
                'section' => 'bb_testi4',
                'settings' => 'bb_testi4_txt',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi5_txt',
            array(
                'label' => 'Texto: ',
                'section' => 'bb_testi5',
                'settings' => 'bb_testi5_txt',
            )
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi1_author',
            array(
                'label' => 'Autor: ',
                'section' => 'bb_testi1',
                'settings' => 'bb_testi1_author',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi2_author',
            array(
                'label' => 'Autor: ',
                'section' => 'bb_testi2',
                'settings' => 'bb_testi2_author',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi3_author',
            array(
                'label' => 'Autor: ',
                'section' => 'bb_testi3',
                'settings' => 'bb_testi3_author',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi4_author',
            array(
                'label' => 'Autor: ',
                'section' => 'bb_testi4',
                'settings' => 'bb_testi4_author',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bb_testi5_author',
            array(
                'label' => 'Autor: ',
                'section' => 'bb_testi5',
                'settings' => 'bb_testi5_author',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'bb_testi1_url',
            array(
                'label' => 'Imagem: ',
                'section' => 'bb_testi1',
                'settings' => 'bb_testi1_url',
                'width' => 200,
                'height' => 200
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'bb_testi2_url',
            array(
                'label' => 'Imagem: ',
                'section' => 'bb_testi2',
                'settings' => 'bb_testi2_url',
                'width' => 200,
                'height' => 200
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'bb_testi3_url',
            array(
                'label' => 'Imagem: ',
                'section' => 'bb_testi3',
                'settings' => 'bb_testi3_url',
                'width' => 200,
                'height' => 200
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'bb_testi4_url',
            array(
                'label' => 'Imagem: ',
                'section' => 'bb_testi4',
                'settings' => 'bb_testi4_url',
                'width' => 200,
                'height' => 200
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'bb_testi5_url',
            array(
                'label' => 'Imagem: ',
                'section' => 'bb_testi5',
                'settings' => 'bb_testi5_url',
                'width' => 200,
                'height' => 200
            )
        )
    );


}