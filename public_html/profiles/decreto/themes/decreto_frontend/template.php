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
 * Implements theme_form_element().
 */
function decreto_frontend_form_element($variables) {
    $element = $variables['element'];
    if ($element['#type'] == 'radio' && isset($element['#attributes']['decreto_radio'])) {
        $o = $element['#return_value'];
        $id = $element['#id'];
        $name = $element['#name'];
        $title = $element['#title'];
        $description = $element['#attributes'][$o]['#description'];
        $checked = ($o == $element['#default_value']) ? 'checked' : '';
        return '<div class="radio">
        <label class="bold">
          <input type="radio" name="' . $name . '" id="' . $id . '" value="' . $o . '" ' . $checked . '>
          <span class="gui-input"></span>
          ' . $title . ', <span class="font-color-primary">' . $description . '</span>
        </label>
      </div>';
    }
    return theme_form_element($variables);
}

/**
 * Implements theme_preprocess_page().
 */
function decreto_frontend_preprocess_page(&$variables) {

    $variables['user_is_logged_in'] = FALSE;

    // Image path
    $variables['image_path'] = base_path() . drupal_get_path('theme', 'decreto_frontend') . '/img/';

    // Add the signup form to variables, if we're on the frontpage.
    if (drupal_is_front_page()) {
        $signup_form = module_invoke('decreto_signup', 'block_view', 'decreto_signup');
        $variables['signup_form'] = drupal_render($signup_form);
    }
}

/**
 * Implements theme_form_alter().
 */
function decreto_frontend_form_alter(&$form, &$form_state, $form_id) {

    if ($form_id == 'user_login_block' || $form_id == 'user_login') {

        // Name
        $form['name']['#title'] = '';
        $form['name']['#description'] = '';
        $form['name']['#attributes'] = array('placeholder' => 'Brugernavn');

        // Password
        $form['pass']['#title'] = '';
        $form['pass']['#description'] = '';
        $form['pass']['#attributes'] = array('placeholder' => 'Adgangskode');

        // Submit
        $form['actions']['submit']['#value'] = "Log ind";
        $form['actions']['submit']['#attributes'] = array("class" => array("btn", "btn-primary", "btn-block"));




    }

}

function decreto_frontend_form_required_marker($variables) {
    return '';
}