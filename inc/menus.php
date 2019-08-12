<?php

/**
 * Register Menus
 *
 * @package Pentamint_WP_Theme
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

add_action('after_setup_theme', 'pentamint_wp_theme_menu_setup');

if (!function_exists('pentamint_wp_theme_menu_setup')) :

    function pentamint_wp_theme_menu_setup()
    {
        // Secondary Nav Menu
        register_nav_menus(array(
            'secondary' => esc_html__('Secondary Menu', 'pentamint_wp_theme'),
        ));

        // Footer Nav Menu
        register_nav_menus(array(
            'top-footer' => esc_html__('Top Footer Menu', 'pentamint_wp_theme'),
        ));

        // Colophon Nav Menu
        register_nav_menus(array(
            'colophon' => esc_html__('Colophon Menu', 'pentamint_wp_theme'),
        ));
    }
endif;
