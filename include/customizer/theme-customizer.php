<?php 
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/testimonial.php';
require get_template_directory().'/include/customizer/colors.php';

function bb_customize_register($wp_customize)
{
    bb_social_customizer($wp_customize);
    bb_testimonial_customizer($wp_customize);
    bb_colors_customizer($wp_customize);
}