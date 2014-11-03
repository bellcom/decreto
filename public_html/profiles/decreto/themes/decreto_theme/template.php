<?php
/**
 * @file
 * template.php
 */

/**
 * Implements theme_preprocess_html().
 */
function decreto_theme_preprocess_html(&$variables) {
  drupal_add_css('//fonts.googleapis.com/css?family=Asap:700|Open+Sans:400,700', array('type' => 'external'));
  drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array('type' => 'external'));
}

/**
 * Implements theme_preprocess_page().
 */
function decreto_theme_preprocess_page(&$variables) {
  $variables['user_is_logged_in'] = FALSE;

  // Add the signup form to variables, if we're on the frontpage.
  if (drupal_is_front_page()) {
    $signup_form = module_invoke('decreto_signup', 'block_view', 'decreto_signup');
    $variables['signup_form'] = drupal_render($signup_form);
  }
  if (user_is_logged_in()) {
    // Frontpage is the dashboard, for users that are logged in.
    $variables['user_is_logged_in'] = TRUE;
    $variables['front_page'] = '/dashboard';
    if ($company = decreto_helper_get_company()) {
      $variables['company_name'] = $company->name;
    }
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

/**
 * Implements theme_theme_date_nav_title().
 */
function decreto_theme_date_nav_title($params) {
  $granularity = $params['granularity'];
  $view = $params['view'];
  $date_info = $view->date_info;
  $link = !empty($params['link']) ? $params['link'] : FALSE;
  $format = !empty($params['format']) ? $params['format'] : NULL;

  switch ($granularity) {
    case 'year':
      $title = $date_info->year;
      $date_arg = $date_info->year;
      break;

    case 'month':
      $format = !empty($format) ? $format : (empty($date_info->mini) ? 'F Y' : 'F Y');
      $title = date_format_date($date_info->min_date, 'custom', $format);
      $date_arg = $date_info->year . '-' . date_pad($date_info->month);
      break;

    case 'day':
      $format = !empty($format) ? $format : (empty($date_info->mini) ? 'l, F j Y' : 'l, F j');
      $title = date_format_date($date_info->min_date, 'custom', $format);
      $date_arg = $date_info->year . '-' . date_pad($date_info->month) . '-' . date_pad($date_info->day);
      break;

    case 'week':
      $format = !empty($format) ? $format : (empty($date_info->mini) ? 'F j Y' : 'F j');
      $title = t('Week of @date', array(
        '@date' => date_format_date($date_info->min_date, 'custom', $format),
      ));
      $date_arg = $date_info->year . '-W' . date_pad($date_info->week);
      break;
  }

  if (!empty($date_info->mini) || $link) {
    // Month navigation titles are used as links in the mini view.
    $attributes = array('title' => t('View full page month'));
    $url = date_pager_url($view, $granularity, $date_arg, TRUE);
    return l($title, $url, array('attributes' => $attributes));
  }
  else {
    return $title;
  }
}
