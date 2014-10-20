<?php
/**
 * @file
 * template.php
 */

/**
 * Implements theme_preprocess_html().
 */
function decreto_theme_preprocess_html(&$variables) {
  drupal_add_css('http://fonts.googleapis.com/css?family=Asap:700|Open+Sans:400,700', array('type' => 'external'));
}

/**
 * Implements theme_preprocess_page().
 */
function decreto_theme_preprocess_page(&$variables) {
  // Add the signup form to variables, if we're on the frontpage.
  if (drupal_is_front_page()) {
    $signup_form = module_invoke('decreto_signup', 'block_view', 'decreto_signup');
    $variables['signup_form'] = drupal_render($signup_form);
  }
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
