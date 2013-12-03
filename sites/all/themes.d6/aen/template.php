<?php
// $Id$

// Load the Superfish JS
//jq_add('superfish');
// Load the select multiple -> asmselect script
//jq_add('jquery.asmselect');

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {

  // add css and js for user menu
  if ($vars['logged_in']) {
    drupal_add_css(drupal_get_path('theme', 'aen') .'/user_menu.css', 'theme');
    $vars['styles'] = drupal_get_css();
  }
  // remove spacing between menu items when displayed inline
  $vars['main_menu'] = str_replace("\n", "", $vars['main_menu']);

  // $task_menu_r : rendered local tasks menu with title integration ($tabs + $title)
  $temp1 = menu_primary_local_tasks();
  $temp2 = menu_secondary_local_tasks();
  $vars['task_menu_r'] = '';
  if ($temp1) {
    $vars['task_menu_r'] .= '<div id="tasks-menu">';
  }
  if ($vars['title'] && !($vars['is_front']) && !($vars['node']->type == 'blog'))  {
    $vars['task_menu_r'] .= '<h3'. ' class="page-title"' . ($temp1 ? ' class="with-tabs"' : '') .'>'. $vars['title'] .'</h3>';
  }
  if ($temp1) {
    $vars['task_menu_r'] .= '<ul class="tabs primary">'. $temp1 .'</ul></div>';
  }
  if ($temp2) {
    $vars['task_menu_r'] .= '<ul class="tabs secondary">'. $temp2 .'</ul>';
  }
  if ($vars['task_menu_r'] == '') {
    unset ($vars['task_menu_r']);
  }
}

/**
 * Override or insert PHPTemplate variables into the node templates.
 */
function phptemplate_preprocess_node(&$variables) {
  $node = $variables['node'];
  if (!empty($node)) {
    switch ($node->nid) {
      case '1':
        break;
    }
  }
}
