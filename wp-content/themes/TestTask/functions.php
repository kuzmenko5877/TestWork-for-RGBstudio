<?php
function enqueue_bootstrap_styles()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_styles');

function enqueue_intl_tel_input_css()
{
    wp_enqueue_style('intl-tel-input-css', 'https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/css/intlTelInput.css');
}
add_action('wp_enqueue_scripts', 'enqueue_intl_tel_input_css');

function enqueue_custom_js()
{
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/custom-script.js', array(), '1.0.0',);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '5.0.2',);
    wp_enqueue_script('intl-tel-input', 'https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/intlTelInput.min.js', array(), '19.5.6',);
    wp_enqueue_script('intl-tel-input-utils', 'https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/utils.js', array(), '19.5.6',);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js');

require_once get_template_directory() . '/includes/lead-functions.php';
require_once get_template_directory() . '/includes/lead-email-settings.php';
require_once get_template_directory() . '/posts-types/lead-post-type.php';
require_once get_template_directory() . '/ajax.php';
