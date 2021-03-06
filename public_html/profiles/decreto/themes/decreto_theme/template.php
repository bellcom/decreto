<?php
/**
 * @file
 * template.php
 */

/**
 * Implements theme_preprocess_html().
 */
function decreto_theme_preprocess_html(&$variables) {

  drupal_add_js('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js', array('type' => 'external'));

  // Paths
  $variables['vendor_path']       = base_path() . drupal_get_path('theme', 'decreto_theme') . '/vendor/';
  $variables['image_path']        = base_path() . drupal_get_path('theme', 'decreto_theme') . '/img/';
  $variables['stylesheet_path']   = base_path() . drupal_get_path('theme', 'decreto_theme') . '/css/';

  // Header
  $variables['classes_array'][] = 'header-sticky'; // Sticky
  $variables['classes_array'][] = 'header-sidebar-visible-xs'; // Header sidebar - mobile
  $variables['classes_array'][] = 'header-sidebar-visible-sm'; // Header sidebar - tablet
  $variables['classes_array'][] = 'header-sidebar-visible-md'; // Header sidebar - desktop
  $variables['classes_array'][] = 'header-sidebar-visible-lg'; // Header sidebar - large desktop

  // Sidebar
  $variables['classes_array'][] = 'sidebar-open'; // Sidebar - open
  $variables['classes_array'][] = 'sidebar-left-open'; // Sidebar - open - left

}

/**
 * Implements theme_preprocess_page().
 */
function decreto_theme_preprocess_page(&$variables) {
  $variables['user_is_logged_in'] = FALSE;

  if (user_is_logged_in()) {
    // Frontpage is the dashboard, for users that are logged in.
    $variables['user_is_$logged_in'] = TRUE;
    if ($company = decreto_helper_get_company()) {
      $variables['company_name'] = $company->name;
    }
  }
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
