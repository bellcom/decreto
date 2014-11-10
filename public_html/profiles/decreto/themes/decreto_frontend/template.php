<?php

/**
 * @param $css
 */
function decreto_frontend_css_alter( &$css ) {

    // System
    unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);

    // Search
    unset($css[drupal_get_path('module', 'search') . '/search.css']);

    // Forum
    unset($css[drupal_get_path('module', 'forum') . '/forum.css']);

}


/**
 * Implements theme_preprocess_page().
 */
function decreto_frontend_preprocess_page(&$variables) {

    $variables['user_is_logged_in'] = FALSE;

    // Image path
    $variables['image_path'] = base_path() . drupal_get_path('theme', 'decreto_frontend') . '/img/';

}