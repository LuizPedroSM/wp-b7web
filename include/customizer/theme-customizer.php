<?php 
require get_template_directory().'/include/customizer/social.php';

function bb_customize_register($wp_customize)
{
    bb_social_customizer($wp_customize);
}