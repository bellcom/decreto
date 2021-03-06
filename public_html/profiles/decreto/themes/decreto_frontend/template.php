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
 * Implements theme_preprocess_html().
 */
function decreto_frontend_preprocess_html(&$variables) {

    drupal_add_js('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js', array('type' => 'external'));

    // Paths
    $variables['vendor_path']       = base_path() . drupal_get_path('theme', 'decreto_frontend') . '/vendor/';
    $variables['image_path']        = base_path() . drupal_get_path('theme', 'decreto_frontend') . '/img/';
    $variables['stylesheet_path']   = base_path() . drupal_get_path('theme', 'decreto_frontend') . '/css/';

    // Header
    $variables['classes_array'][] = 'header-sticky'; // Sticky
    $variables['classes_array'][] = 'header-sidebar-visible-xs'; // Header sidebar - mobile
    $variables['classes_array'][] = 'header-sidebar-visible-sm'; // Header sidebar - tablet
    $variables['classes_array'][] = 'header-visible-md'; // Header - desktop
    $variables['classes_array'][] = 'header-visible-lg'; // Header - large desktop

    // Sidebar - push content
    $variables['classes_array'][] = 'sidebar-push';

    // Footer
    $variables['classes_array'][] = 'footer-attached';

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

    // Login
    if ($form_id == 'user_login_block' || $form_id == 'user_login') {

        // Name
        $form['name']['#title'] = t('Name');
        $form['name']['#title_display'] = 'invisible';
        $form['name']['#description'] = '';
        $form['name']['#attributes'] = array('placeholder' => 'Brugernavn eller e-mail adresse');
        $form['name']['#prefix'] = '<div class="form-group">';
        $form['name']['#suffix'] = '</div>';
        $form['name']['#weight'] = 0;

        // Password
        $form['pass']['#title'] = t('Username or email address');
        $form['pass']['#title_display'] = 'invisible';
        $form['pass']['#description'] = '';
        $form['pass']['#attributes'] = array('placeholder' => 'Adgangskode');
        $form['pass']['#prefix'] = '<div class="form-group">';
        $form['pass']['#suffix'] = '</div>';
        $form['pass']['#weight'] = 5;

        // Submit
        $form['actions']['submit']['#value'] = "Log ind <span class='icon fa fa-sign-in'></span>";
        $form['actions']['submit']['#attributes'] = array('class' => array('btn', 'btn-primary', 'btn-block', 'btn-loader'));
        $form['actions']['submit']['#weight'] = 10;

    }

    // Reset password
    if ($form_id == 'user_pass_block' || $form_id == 'user_pass') {

        // Name
        $form['name']['#title'] = '';
        $form['name']['#title_display'] = 'invisible';
        $form['name']['#description'] = '';
        $form['name']['#attributes'] = array('placeholder' => 'Brugernavn eller e-mail adresse');
        $form['name']['#prefix'] = '<div class="form-group">';
        $form['name']['#suffix'] = '</div>';
        $form['name']['#weight'] = 0;

        // Submit
        $form['actions']['submit']['#value'] = "Nulstil adgangskode <span class='icon fa fa-lock'></span>";
        $form['actions']['submit']['#attributes'] = array('class' => array('btn', 'btn-primary', 'btn-block', 'btn-loader'));
        $form['actions']['submit']['#weight'] = 10;

    }
}

/**
 * Implements theme_form_required_marker().
 */
function decreto_frontend_form_required_marker($variables) {
    return '';
}