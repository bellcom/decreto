<?php
/**
 * @file
 * template.php
 */

/**
 * Implements theme_preprocess_html().
 */
function decreto_frontend_preprocess_html(&$variables) {
  drupal_add_js('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js', array('type' => 'external'));
  drupal_add_css('//fonts.googleapis.com/css?family=Asap:700|Open+Sans:200,300,400,500,600,700', array('type' => 'external'));
  drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array('type' => 'external'));
}

/**
 * Implements theme_form_element().
 */
function decreto_theme_form_element($variables) {
  $element = $variables['element'];

  if ($element['#type'] == 'radio' && isset($element['#attributes']['decreto_radio'])) {
    $o = $element['#return_value'];
    $id = $element['#id'];
    $name = $element['#name'];
    $title = $element['#title'];
    $description = $element['#attributes'][$o]['#description'];
    $checked = ($o == $element['#default_value']) ? 'checked' : '';

    return '<div class="radio">
        <label class="' . $checked . '">
          <input type="radio" name="' . $name . '" id="' . $id . '" value="' . $o . '" ' . $checked . '>
          ' . $title . ', <span class="orange">' . $description . '</span>
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

  // Add the signup form to variables, if we're on the frontpage.
  if (drupal_is_front_page()) {
    $signup_form = module_invoke('decreto_signup', 'block_view', 'decreto_signup');
    $variables['signup_form'] = drupal_render($signup_form);
  }
}