<?php

/**
 * Implements hook_preprocess_html().
 */
function cloudy_preprocess_html(&$variables) {
  drupal_add_js(drupal_get_path('theme', 'omega') . '/js/jquery.matchmedia.js', array('group' => JS_THEME));

  if (render($variables['page']['banner'])) {
    $variables['attributes_array']['class'][] = 'with-banner';
  }
}